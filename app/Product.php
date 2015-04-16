<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'products';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['name', 'description', 'photo_extension', 'category_id'];

    public function category() {
        return $this->belongsTo('App\Category', 'category_id', 'id');
    }

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = [];

    public static function randomProducts($id = null) {
        $all = [];
        if ($id == null) {
            $all = Product::all();
        } else {
            $all = Product::where('id', '!=', $id)->get();
        }

        $all_sliced = [];
        for ($i = 0; $i < count($all); ++$i) {
            array_push($all_sliced, $all[$i]);
        }
        shuffle($all_sliced);
        $all_sliced = array_slice($all_sliced, 0, 3);

        return $all_sliced;
    }

}
