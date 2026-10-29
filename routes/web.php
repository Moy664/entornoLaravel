<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;

Route::get('/', HomeController::class); #esta es la forma de llamar a un controlador desde una ruta, se le pasa el nombre del controlador y el metodo que se quiere ejecutar, en este caso el metodo __invoke      

#Es importante que las rutas se declaren de manera ordenada, ya que si una ruta es mas generica que otra, esta se ejecutara primero y no se ejecutara la ruta mas especifica
Route::get('/posts', [PostController::class, 'index']);//esta es la forma de llamar a un controlador desde una ruta, se le pasa el nombre del controlador y el metodo que se quiere ejecutar  

Route::get("/posts/create", [PostController::class,'create']);

Route::get("/posts/{post}", [PostController::class,'show']); #si una funcion tiene parametros, estos se deben de pasar en la ruta, y se deben de usar dentro de la funcion

#Varias rutas con parametros
Route::get('/posts/{post}/{categoria?}', function ($post, $categoria = null) { # si hacemos una ruta con un parametro, este se debe de usar dentro de la funcion anonima
    return "Aqui se mostrara el post {$post} de categoria {$categoria}";
});

#Varias rutas con parametros opcionales -> ?
Route::get('/posts/{post}/{categoria}/{type?}', function ($post, $categoria, $type = null) { # al ser opcional, se le debe de asignar un valor por defecto
    if($type){
        return "Aqui se mostrara el post {$post} de categoria {$categoria} con tipo {$type}";
    }
    return "Aqui se mostrara el post {$post} de categoria {$categoria}";
});



