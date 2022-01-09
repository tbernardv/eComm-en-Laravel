<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//Importamos los modelos asociados al controlador producto
use App\Models\Product;
use App\Models\Cart;

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

    //Agregando al carrito de compras
    function addToCart(Request $req){
        //Validando que el usuario haya iniciado sesion
        if($req->session()->has('user')){
            //return $req->input();
            $cart = new Cart;
            $cart->user_id = $req->session()->get('user')['id'];
            $cart->product_id = $req->hproduct_id;
            $cart->save();
            return redirect('/');
        } else{
            return redirect("/login");
        }
    }
}
