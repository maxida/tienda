<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\Controller;

class CartController extends Controller
{
    public function __construct()
    {
    if(!Session::has('cart')) Session::put('cart', array()); //si no tengo la variable carrito, la creo y en el array se guadara un array vacio
    }

    //Show cart
        public function show()
        {
            $cart = Session::get('cart');
        }


    //Add item

    //Delete item

    //Update item

    //Trash cart

    //Total
}
