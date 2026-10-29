<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
        return view("posts/index");
    }

    public function create(){
        return view("posts/create");
    }

    #si una funcion tiene parametros, estos se deben de pasar en la ruta, y se deben de usar dentro de la funcion
    public function show(string $post){
        
        // return view("posts.show", ['post' => $post]); //de esta manera se le pasan variables a las vistas blade
        return view("posts.show", compact('post')); //de esta manera se le pasan variables a las vistas blade

    }
}
