<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Shop\Category;

class CategoryController extends Controller
{
    public function store(Request $request)
    {
        // dd($request);
        $attributes = [
            'name'=>$request->name,
            'description'=> $request->description
        ];
        $category = new Category($attributes);
        // dd($category);
        $category->save();
        return view('wip.category.form', ['category' => $category]);
    }
}
