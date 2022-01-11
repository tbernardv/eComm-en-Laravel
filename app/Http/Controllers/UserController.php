<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//Importamos modelo User (Aun no se como se creo, creo que fue en la migracion)
use App\Models\User;
//Importamos
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    # Creamos funciones y/o metodos
    //Login de usuario
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

    //Registro de usuario
    function register(Request $req){
        //return $req->input();
        $user = new User;
        $user->name = $req->txtusername;
        $user->email = $req->txtemail;
        $user->password = Hash::make($req->txtpassword);
        $user->save();

        return redirect('/login');
    }
}
