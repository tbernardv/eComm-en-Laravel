<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//Importamos los modelos asociados al controlador producto
use App\Models\Product;
use App\Models\Cart;
use App\Models\Order;
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
        $userId = Session::get('user')['id'];

        $products_list = DB::table('cart')
        ->join('products','cart.product_id','=', 'products.id')
        ->where('cart.user_id', $userId)
        ->select('products.*', 'cart.id as cart_id')
        ->get();

        return view('carlist', ['products' => $products_list]);
    }

    //Eliminar elementos del carrito
    function removeCartItem($id){
        Cart::destroy($id);
        return redirect('/carlist');
    }

    //Ordenar ahora
    function orderNow(){
        $userId = Session::get('user')['id'];

        $total = $products_list = DB::table('cart')
        ->join('products','cart.product_id','=', 'products.id')
        ->where('cart.user_id', $userId)
        ->sum('products.price');

        return view('ordernow', ['total' => $total]);
    }

    //Order Place
    function orderPlace(Request $req){
        $userId = Session::get('user')['id'];

        $allCart = Cart::where('user_id', $userId)->get();
        foreach ($allCart as $cart) {
            //Registrando la orden de venta en la tabla ordenes
            $order = new Order;
            $order->product_id = $cart['product_id'];
            $order->user_id = $cart['user_id'];
            $order->status = "pending";
            $order->payment_method = $req->paymentmethod;
            $order->payment_status = "pending";
            $order->address = $req->txtareaaddress;
            $order->save();

            //Eliminando los datos del carrito después de registrar la orden de venta
            Cart::where('user_id', $userId)->delete();
        }
        //return $req->input();
        return redirect("/");
    }
}
