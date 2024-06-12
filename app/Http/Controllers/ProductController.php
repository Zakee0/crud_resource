<?php

namespace App\Http\Controllers;

use App\Models\Product;

use Illuminate\Http\Request;

use function Ramsey\Uuid\v1;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::all();
       return view('products.index', ["products"=>$products]);
    }
  

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
            Product::create($request->all());
            return redirect(route('products.index'))
            ->with('success','Product created succesfuly');
        // dd($request->all());
    }

    /**
     * Display the specified resource.
     */
    public function show(product $product)
    {
        return view('products.show', ['product'=>$product]);

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        return view('products.edit',['product'=>$product]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        
        $product->update($request->all());
        return redirect(route('products.index'))
        ->withSuccess('Product Update successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
      $product->delete();
      return redirect(route('products.index'))
        ->withSuccess('Product Deleted successfully');
    }
}
