<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Shop\Discount;

class DiscountController extends Controller
{

    //  Create discount   
    public function create()
    {

        $input = request()->all();

        $discount = new Discount($input);

        $discount->save();

        return view('wip.discount.create_form', [

            'discount' => $discount
        ]);
    }

    // Edit discount
    public function edit(Discount $discount)
    {

        return view('wip.discount.edit', ['discount' => $discount]);
    }

    // index
    public function index()
    {

        return view('wip.discount.index', ['discounts' => Discount::all()]);
    }

    // Update discount

    public function update(Request $request, Discount $discount)
    {

        $input = $request->all();
        $discount->fill($input)->save();

        return back()->with('discount', $discount);
    }

    public function destroy(Discount $discount){

        $discount->delete();

        return back();
    }
}
