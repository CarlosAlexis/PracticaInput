<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Controlador extends Controller
{
    public function verificacion(Request $request){
        $user = $request -> input('user');
        $pass = $request -> input('pass');

        if ( $user == 'Gonzalez.Carlos' && $pass == '0000'){
            $url = 'bien';
        } else {
           $url= 'mal';
        }
        return view ($url, [
            'user' => $request -> input('user')
        ]);
    }


    public function login(){
        return view('formulario');
    }

}
