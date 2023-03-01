<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Section;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();
        $sections = Section::all();
        return view('products.products', compact('products', 'sections'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $products = Product::all();
        $sections = Section::all();
        return view('products.add_product', compact('products', 'sections'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $realNameOfImg = $request->file('img_name')->getClientOriginalName();
        $path = $request->file('img_name')->store('productsImg', 'imgFromForm');

        $product = Product::create([
            'product_name' => $request->product_name,
            'section_id' => $request->section_id,
            'description' => $request->description,
            'countCus' => $request->countCus,
            'product_new_price' => $request->product_new_price,
            'country_currency' => $request->country_currency,
            'product_old_price' => $request->product_old_price,
            'img_path' => $path,
            'img_alt_text' => $request->img_alt_text,

        ]);

        return redirect()->back()->with(['msg' => 'تم اضافه المنتج  بنجاح ']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = Product::find($id);
        return view('products.show_product', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::find($id);
        $sections = Section::all();
        return view('products.edit_product', compact('product', 'sections'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $VS = $request->value_status;
        if ($VS == 1) {
            $status = 'متوفر';
        } else {
            $status = 'غير متوفر';
        }

        $id = $request->id;
        $product = Product::find($id);

        if ($request->has('img_name')) {
            $realNameOfImg = $request->file('img_name')->getClientOriginalName();
            $path = $request->file('img_name')->store('productsImg', 'imgFromForm');

            $product->update([
                'product_name' => $request->product_name,
                'section_id' => $request->section_id,
                'description' => $request->description,
                'product_new_price' => $request->product_new_price,
                'country_currency' => $request->country_currency,
                'product_old_price' => $request->product_old_price,
                'value_status' => $request->value_status,
                'value_status' => $request->value_status,
                'status' => $status,
                'img_path' => $path,
                'img_alt_text' => $request->img_alt_text,
            ]);

        } else {
            $product->update([
                'product_name' => $request->product_name,
                'section_id' => $request->section_id,
                'description' => $request->description,
								'countCus' => $request->countCus,
                'product_new_price' => $request->product_new_price,
                'country_currency' => $request->country_currency,
                'product_old_price' => $request->product_old_price,
                'value_status' => $request->value_status,
                'value_status' => $request->value_status,
                'status' => $status,
                'img_alt_text' => $request->img_alt_text,
            ]);

        }

        return redirect()->back()->with(['msg' => 'تم تعديل المنتج    بنجاح ']);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $id = $request->product_id;
        Product::find($id)->delete();
        return redirect()->back()->with(['msg' => 'تم حذف المنتج  بنجاح ']);
    }
}
