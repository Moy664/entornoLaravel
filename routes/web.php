<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Models\Post;

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

Route::get('prueba',function(){
    #crear un nuevo post
    // $post = new Post; //crea un nuevo objeto de la clase Post
    // $post->title = 'Titulo de prueba 1'; //accede al campo title y le asigna un valor
    // $post->content = 'Contenido de prueba 1'; //accede al campo content y le asigna un valor
    // $post->categoria  = 'Categoria de prueba 1'; //accede al campo categoria y le asigna un valor
    // $post ->save(); //guarda el objeto en la base de datos
    // return $post;

    #buscar un post por el ID
    // $post = Post::find(1); //busca un registro en la tabla posts con el id 1 y lo devuelve como un objeto de la clase Post
    // return $post;

    #buscar un post por el title
    // $post = Post::where('title', 'Titulo de prueba 1')
    //  ->first();  
    // //implementa un filtro con web con where y first solo trae el primer dato que cumpla con la condicion
    // $post -> categoria = "Desarrollo con laravel";
    // $post -> save(); //guarda el objeto en la base de datos
    // return $post;

    #Recuperar varios registros
    
    // $post = Post::all(); //trae todos los registros de la tabla posts y los devuelve como un array de objetos de la clase Post
    // return $post;

    #recuperar todos los registros que cumplan con una condicion
    // $post = Post::where('id', '>=', '2')
    //  ->get(); 
    //trae todos los registros de la tabla posts que cumplan con la condicion y los devuelve como un array de objetos de la clase Post
    // return $post;

    // $post = Post::orderBy('id','desc')->get(); //trae todos los valores de la tabla posts y los ordena de manera descendente por el campo id
    // return $post;

    #recuperamos los registros de manera ascendente y seleccionamos solo la informacion que necesitamos
    // $post = Post::orderBy('categoria','asc')
    // ->select('id','title','categoria')
    // ->take(2)
    // ->get();
    // return $post;

    #eliminar un registro
    $post = Post::find(4); //primero ocupamos saber que registro ocupamos eliminar
    if ($post) {
        $post->delete(); //lo eliminamos
        return 'Se elimino el post con id 1';
    }else{
        return 'No se encontro ningun registro';
    }

});
