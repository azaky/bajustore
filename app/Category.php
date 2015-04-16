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
	protected $fillable = ['*'];

    public function parent() {
        return $this->belongsTo('App\Category', 'parent_id', 'id');
    }

    public function children() {
        return $this->hasMany('App\Category');
    }

    public function products() {
        return $this->hasMany('App\Product');
    }

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = [];

}
