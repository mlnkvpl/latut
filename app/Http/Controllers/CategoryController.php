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
            'description'=> $request->description,
          
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

        // $parents = Category::all();
        $parents = Category::where('id', '!=', $id)->get();
        //  dd($category);
        return view('wip.category.edit',
            [
                'category' => $category,
                'parents' => $parents,
              
            ]
        );


    }

    public function update(Request $request)
    {
        $category = Category::find($request->id);
        $category->name = $request->name;
        $category->description = $request->description;

        $category->parent_category_id = $request->parent_category_id;
        $parents=Category::where('id','!=',$request->id)->get();


        // dump($category);
        $category->save();
        //  dd($category);

        return view('wip.category.edit', [
            'category' => $category,
            'parents'=>$parents,
           
        ]);
    }





    public function delete(int $id)
    {

        $category = Category::find($id);
        $category->delete();

        // return $this->view();
        return back();
    }
}
