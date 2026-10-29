<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //El metodo __invoke es un metodo magico que se ejecuta cuando se llama a un controlador sin especificar un metodo, es decir, cuando se llama a un controlador como una funcion anonima 
    // se recomienda usar __invoke cuando el controlador solo tiene un metodo, ya que de esta manera se puede llamar al controlador como una funcion anonima y no es necesario especificar el metodo a ejecutar 
    public function __invoke(){
        return view('home');
    }
}
    