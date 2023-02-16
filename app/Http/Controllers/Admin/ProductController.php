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

        $request->validate(
            [
                'title' => 'required|string|min:2|max:120',
                'description' => 'required|string|min:10',
                'thumb' => 'required|min:2|url',
                'price' => 'required|numeric',
                'series' => 'required|string|min:2|max:120',
                'sale_date' => 'required',
                'type' => 'required|string|min:2|max:100',
            ],
            [
                'title.required' => 'Il titolo è obbligatorio!!!',
                'title.min' => 'Il titolo deve avere almeno 2 caratteri!!!',
                'title.max' => 'Il titolo non può avere più di 120 caratteri!!!',
                'title.string' => 'Il titolo non può essere di tipo numerico!!!',
                'description.required' => 'La descrizione è obbligatoria!!!',
                'description.min' => 'La descrizione deve avere almeno 2 caratteri!!!',
                'description.string' => 'La descrizione non può essere di tipo numerico!!!',
                'thumb.required' => 'URL è obbligatorio!!!',
                'thumb.min' => 'URL deve avere almeno 2 caratteri!!!',
                'thumb.url' => 'URL inserito non valido!!!',
                'price.required' => 'Il prezzo è obbligatorio!!!',
                'price.numeric' => 'Il prezzo non può essere di tipo alfanumerico!!!',
                'series.required' => 'La serie è obbligatoria!!!',
                'series.min' => 'La serie deve avere almeno 2 caratteri!!!',
                'series.max' => 'La serie non può avere più di 120 caratteri!!!',
                'series.string' => 'La serie non può essere di tipo numerico!!!',
                'sale_date.required' => 'La data è obbligatoria',
                'type.required' => 'Il tipo è obbligatorio!!!',
                'type.min' => 'Il tipo deve avere almeno 2 caratteri!!!',
                'type.max' => 'Il tipo non può avere più di 120 caratteri!!!',
                'type.string' => 'Il tipo non può essere di tipo numerico!!!',
            ]
        );

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
