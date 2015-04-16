<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Product;
use App\Category;
use App\Promo;
use Illuminate\Http\Request;

class MainController extends Controller {

	/**
	 * Display the index page.
	 *
	 * @return Response
	 */
	public function index()
	{
        $random = Product::randomProducts(null);
        $top = Category::top();
        $promo = Promo::find(1);

		return view('guest.index', ['random' => $random, 'top' => $top, 'promo' => $promo]);
	}

    /**
     * Display an item.
     *
     * @param $id
     */
    public function item($id)
    {
        $product = Product::find($id);
        if ($product == null) {
            abort(404);
        }

        // create breadcrumb
        $breadcrumb = [$product->category];
        while ($breadcrumb[count($breadcrumb) - 1]->parent_id != null) {
            $parent = $breadcrumb[count($breadcrumb) - 1]->parent;
            array_push($breadcrumb, $parent);
        }
        $breadcrumb = array_reverse($breadcrumb);

        // random items
        $random = Product::randomProducts($product->id);

        $top = Category::top();

        return view('guest.item', ['product' => $product, 'breadcrumb' => $breadcrumb, 'random' => $random, 'top' => $top]);
    }

    /**
     * Display collections
     * @param $id
     */
    public function collections($id)
    {
        $category = Category::find($id);
        if ($category == null) {
            abort(404);
        }

        // find children category
        $children = $category->children()->get();

        // find products
        $products = $category->products()->get();

        // create breadcrumb
        $breadcrumb = [$category];
        while ($breadcrumb[count($breadcrumb) - 1]->parent_id != null) {
            $parent = $breadcrumb[count($breadcrumb) - 1]->parent;
            array_push($breadcrumb, $parent);
        }
        $breadcrumb = array_reverse($breadcrumb);

        $top = Category::top();

        return view('guest.item-collections', ['category' => $category, 'children' => $children, 'products' => $products, 'breadcrumb' => $breadcrumb, 'top' => $top]);
    }

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
