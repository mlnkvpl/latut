<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Shop\Product;

class ProductController extends Controller
{

    public function  create()
    {

        // $input = Request::all();
        $input = request()->all();
        // dump($input);

        $product = new Product($input);
        $product->save();

        // return view('wip.category.form', ['category' => $category]);

        // shows the stored data
        return view('wip.product.create_form', ['product' => $product]);
    }


    public function edit(Product $product)
    {

        return view('wip.product.edit_form', ['product' => $product]);
    }

    public function update(Request $request,  Product $product)
    {
        $input = $request->all();
        $product->fill($input)->save();
        // return view('wip.product.edit_form', ['product' => $product]);

        return back()->with('product',$product);
        // return $product->toJson();
    }

    public function destroy(Product $product){

        $product->delete();

        return back();
    }

    public function index(){

        return view('wip.product.index',['products'=>Product::all()]);
    }
}
