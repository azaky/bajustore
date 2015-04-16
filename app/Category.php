<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'categories';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['name', 'description', 'photo_extension'];

    public function parent() {
        return $this->belongsTo('App\Category', 'parent_id', 'id');
    }

    public function children() {
        return $this->hasMany('App\Category', 'parent_id', 'id');
    }

    public function products() {
        return $this->hasMany('App\Product', 'category_id', 'id');
    }

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = [];

    public static function top() {
        return Category::where('parent_id', '=', null)->get();
    }

}
