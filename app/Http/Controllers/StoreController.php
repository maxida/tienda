<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Product;

class StoreController extends Controller
{
    public function index()
    {
        $products = Product::all(); //obtengo todos mis productos y los guardo en la variable $products
        //dd($products);  //sirve para hacer debug(depurar)
        return view('store.index',compact('products') );

    }

    public function show($slug)
    {
        $product = Product::where('slug', $slug)->first();
        //dd($product);
        return view('store.show', compact('product'));
    }
    
}
