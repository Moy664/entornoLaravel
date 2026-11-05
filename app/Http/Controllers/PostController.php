<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
        $posts = Post::orderBy('id','desc')->get();
        
        return view("posts/index", [
            'posts' => $posts
        ]);
    }

    public function create(){
        return view("posts/create");
        
    }
    public function store(Request $request){

        // return $request->all(); //devuelve todos los datos que se enviaron en el formulario
        $post = new Post();
        $post->title = $request->title;
        $post->content = $request->content;
        $post->category = $request->category;
        $post->save();
        return redirect('/posts');
    }

    #si una funcion tiene parametros, estos se deben de pasar en la ruta, y se deben de usar dentro de la funcion
    public function show(string $post){
        
        // return view("posts.show", ['post' => $post]); //de esta manera se le pasan variables a las vistas blade

        $post = Post::find($post); //busca un registro en la tabla posts con el id 1 y lo devuelve como un objeto de la clase Post

        return view("posts.show", compact('post')); //de esta manera se le pasan variables a las vistas blade

    }

    public function edit(string $post){
        $post = Post::find($post); //busca un registro en la tabla posts con el id correspondiente y lo devuelve como un objeto de la clase Post
        return view("posts.edit", compact('post')); //de esta manera se le pasan variables a las vistas blade
    }

    public function update(Request $request, string $post){
        $post = Post::find($post); //busca un registro en la tabla posts con el id correspondiente y lo devuelve como un objeto de la clase Post
        $post->title = $request->title;
        $post->content = $request->content;
        $post->category = $request->category;
        $post->save();
        return redirect('/posts/{{ $post->id }}');
    }

    public function destroy(string $post){
        $post = Post::find($post); //busca un registro en la tabla posts con el id correspondiente y lo devuelve como un objeto de la clase Post
        $post->delete();
        return redirect('/posts');
    }
}
