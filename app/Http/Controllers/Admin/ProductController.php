<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
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
        return view('products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $dati = $request->all();

        $request->validate([
            'title' => 'required|string|min:2|max:120',
            'description' => 'required|string|min:10',
            'thumb' => 'required|min:2|url',
            'price' => 'required|min:2|max:120',
            'series' => 'required|string|min:2|max:120',
            'sale_date' => 'required|min:2|max:120',
            'type' => 'required|string|min:2|max:100',
        ]);

        $newProduct = new Product();
        $newProduct->title = $dati['title'];
        $newProduct->description = $dati['description'];
        $newProduct->thumb = $dati['thumb'];
        $newProduct->price = $dati['price'];
        $newProduct->series = $dati['series'];
        $newProduct->sale_date = $dati['sale_date'];
        $newProduct->type = $dati['type'];
        $newProduct->save();

        return redirect()->route('products.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = Product::findOrFail($id);
        return view('products.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::findOrFail($id);
        return view('products.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $dati = $request->all();
        $product = Product::findOrFail($id); //Dato prima di essere aggiornato
        $product->title = $dati['title'];
        $product->description = $dati['description'];
        $product->thumb = $dati['thumb'];
        $product->price = $dati['price'];
        $product->series = $dati['series'];
        $product->sale_date = $dati['sale_date'];
        $product->type = $dati['type'];
        $product->save();

        return redirect()->route('products.show', $product->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();
        return redirect()->route('products.index');
    }
}
