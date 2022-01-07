<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//Importamos modelo User (Aun no se como se creo, creo que fue en la migracion)
use App\Models\User;
//Importamos
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    //
    //Creamos funciones y/o metodos
    function login(Request $req){
        $user = User::where(['email' => $req->txtemail])->first();
        //Verificando que el usuario y contraseña esten en la base de datos
        if(!$user || !Hash::check($req->txtpassword, $user->password)){
            return "Username or password is not matched";
        } else{
            //Creando e inicializando una session basica
            $req->session()->put('user', $user);
            //Redirercciona a la pagina inicial home
            return redirect('/');
        }
    }
}
