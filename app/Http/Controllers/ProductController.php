<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//Importamos los modelos asociados al controlador producto
use App\Models\Product;
use App\Models\Cart;
//Importando Session
use Session;
//Importando libreria DB
use Illuminate\Support\Facades\DB;

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

    //Cart number of items
    static function cartItem(){
        if(Session::get('user')['id']){
            $user_id = Session::get('user')['id'];
            return Cart::where('user_id', $user_id)->count();
        } else{
            return redirect('/login');
        }
    }

    //Cart listing
    function carList(){
        //echo "Hello! GOD BLESS!!!";
        $userId = Session::get('user')['id'];
        
        $products_list = DB::table('cart')
        ->join('products','cart.product_id','=', 'products.id')
        ->where('cart.user_id', $userId)
        ->select('products.*')
        ->get();

        return view('carlist', ['products' => $products_list]);
    }
}
