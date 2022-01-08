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

    //Detalle producto
    function detail($id){
        $data = Product::find($id);
        return view("detail", ['product' => $data]);
    }

    //Busqueda de un producto
    function search(Request $req){
        //return $req->input();
        $data = Product::where('name', 'like', '%'.$req->input('txtsearch').'%')
        ->get();
        return view("search", ['products' => $data]);

    }
}
