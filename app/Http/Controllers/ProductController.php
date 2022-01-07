<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//Importamos el modelo asociado al controlador producto
use App\Models\Product;

class ProductController extends Controller
{
    //
    function index(){
        //return Product::all();
        //return view('product');

        $data = Product::all();
        return view('product', ['products' => $data]);
    }
}
