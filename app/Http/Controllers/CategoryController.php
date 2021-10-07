<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Shop\Category;

class CategoryController extends Controller
{

    // save products in DB
    //
    public function save(Request $request)
    {
        // dd($request);
        $attributes = [
            'name' => $request->name,
            'description' => $request->description
        ];
        $category = new Category($attributes);
        // dd($category);
        $category->save();
        return view('wip.category.form', ['category' => $category]);
    }
    // view saved products
    //
    public function view()
    {

        return view('wip.category.view', ['categories' => Category::all()]);
    }


    //show existing product
    //
    public function edit(int $id)
    {

        //  dd($id);
        $category = Category::find($id);

        $parents = Category::all();
        //  dd($category);
        return view('wip.category.edit',
            [
                'category' => $category,
                'parents' => $parents
            ]
        );


    }

    public function update(Request $request)
    {
        $category = Category::find($request->id);
        $category->name = $request->name;
        $category->description = $request->description;
        $category->parent_category_id = $request->parent_category_id;
        $parents=Category::all();

        // dump($category);
        $category->save();
        //  dd($category);

        return view('wip.category.edit', [
            'category' => $category,
            'parents'=>$parents
        ]);
    }


    // update existing product
    // 
    // public function update(Request $request)
    // {
    //     $category = Category::find($request->id);

    //     $category->update($request->all());

    //     return view('wip.category.edit', ['category' => $category]);
    // }


    public function delete(int $id)
    {

        $category = Category::find($id);
        $category->delete();

        return $this->view();
    }
}
