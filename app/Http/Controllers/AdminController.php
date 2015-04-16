<?php namespace App\Http\Controllers;

use Request;
use Redirect;
use Validator;
use Auth;

use App\Product;
use App\Category;
use App\Promo;


class AdminController extends Controller {
	
	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('auth', [
			'except' => ['showLogin', 'login'],
			]);
	}

	/**
	 * Show the application welcome screen to the admin.
	 *
	 * @return Response
	 */
	public function index()
	{
		return view('admin.dashboard')
			->with('promos', Promo::all())
			->with('products', Product::all());
	}

	public function showLogin()
	{
		if (Auth::check())
			return redirect('admin/dashboard');
		else
			return view('admin.login');
	}

	public function login()
	{
		$validation = Validator::make(Request::all(), [
			"email" => "required",
			"password" => "required"
		]);
		if ($validation->passes()) {
			if (Auth::attempt([
				"email" => Request::input('email'),
				"password" => Request::input('password')
			])) {
				return redirect('admin/dashboard');
			}
			else {
				return redirect('admin');
			}
		}
		else
			return redirect('admin');
	}

	public function showAddItem()
	{
		return view('admin.add-item')
			->with('categories', Category::all());
	}

	public function addItem()
	{
		$validation = Validator::make(Request::all(), [
			"image" => "required",
			"name" => "required",
			"description" => "required",
			"category_id" => "required"
		]);
		// echo Request::get('category_id');
		if ($validation->passes()) {
			$product = Product::create([
					'name' => Request::get('name'),
					'description' => Request::get('description'),
					'category_id' => Request::get('category_id'),
				]);
			Request::file('image')->move(public_path().'/product/', $product->id.'.'.Request::file('image')->getClientOriginalExtension());
			return redirect('admin/dashboard#product');
		}
		else;
			return redirect('admin/add-item')
				->withErrors($validation);
	}

	public function showEditItem($id)
	{
		$product = Product::find($id);
		return view('admin.edit-item')
			->with('product', Product::find($id))
			->with('categories', Category::all());
	}

	public function editItem($id)
	{
		$validation = Validator::make(Request::all(), [
			"name" => "required",
			"description" => "required",
			"category_id" => "required"
		]);
		if ($validation->passes()) {
			$product = Product::find($id);
			$product->name = Request::get('name');
			$product->description = Request::get('description');
			$product->category_id = Request::get('category_id');
			Request::file('image')->move(public_path().'/product/', $product->id.'.'.Request::file('image')->getMimeType());
			$product->save();
			return redirect('admin/dashboard#product');
		}
		else {
			return redirect('admin/edit-item/'.$id)
				->withErrors($validation);
		}
	}

	public function deleteItem($id)
	{
		$product = Product::find($id);
		if ($product !== null)
			$product->delete();
		return redirect('admin/dashboard#product');
	}

	public function showAddPromo()
	{
		return view('admin.add-promo');
	}

	public function addPromo()
	{
		$validation = Validator::make(Request::all(), [
			"image" => "required",
			"name" => "required",
			"description" => "required",
			"valid_until" => "required"
		]);

		if ($validation->passes()) {
			$promo = Promo::create([
					'name' => Request::get('name'),
					'description' => Request::get('description'),
					'valid_until' => Request::get('valid_until'),
				]);
			Request::file('image')->move(public_path().'/promo/', $promo->id);
			return redirect('admin/dashboard#promo');
		}
		else {
			return redirect('admin/add-promo/'.$id)
				->withErrors($validation);
		}
	}

	public function showEditPromo($id)
	{
		return view('admin.edit-promo')
			->with('promo', Promo::find($id));
	}

	public function editPromo($id)
	{
		$validation = Validator::make(Request::all(), [
			"image" => "required",
			"name" => "required",
			"description" => "required",
			"valid_until" => "required"
		]);

		if ($validation->passes()) {
			$promo = Promo::find($id);
			$promo->name = Request::get('name');
			$promo->description = Request::get('description');
			$promo->valid_until = Request::get('valid_until');
			$promo->save();

			Request::file('image')->move(public_path().'/promo/', $promo->id);

			return redirect('admin/dashboard#promo');
		}
		else {
			return redirect('admin/edit-promo/'.$id)
				->withErrors($validation);
		}
	}

	public function deletePromo($id)
	{
		$promo = Promo::find($id);
		if ($promo !== null)
			$promo->delete();
		return redirect('admin/dashboard#promo');
	}
}