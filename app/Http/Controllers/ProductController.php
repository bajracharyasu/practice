<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Http\validate;
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
        return view('product.index')->with('product', $products);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('product.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request->all());
        /*$formFields =  $request->validate([
            'name' => 'requried',
            'description' => 'requried',
            'price' => 'requried'
        ]);
        Product::create($formFields);
        return view('product.index')->with('message', 'Product added');*/
        $formFields = $request->validate([
            'name' => 'required',
            'description'=>'required',
            'price' => 'required'
        ]);
        Product::create($formFields);
        return redirect('product/index')->with('message','Product Added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        return view('product.edit', ['product'=> $product]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        $fromFields = $request->validate([
            'name'=>'required',
            'description'=> 'required',
            'price'=>'required',
        ]);
        $product->update($fromFields);
        return redirect('product/index')->with('message', 'Product updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $product->delete();
        return redirect("product/index")->with('message','Product deleted');
    }
}
