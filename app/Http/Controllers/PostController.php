<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
        $posts = Post::orderBy('id','desc')->paginate(10);
        
        return view("posts/index", [
            'posts' => $posts
        ]);
    }

    public function create(){
        return view("posts/create");
        
    }
    public function store(Request $request){

        // return $request->all(); //devuelve todos los datos que se enviaron en el formulario
        // $post = new Post();
        // $post->title = $request->title;
        // $post->slug = $request->slug;
        // $post->content = $request->content;
        // $post->category = $request->category;
        // $post->save();
        // return redirect()->route('posts.index');
        
        //otra forma de crear posts
        // Post::create([
        //     'title'=>$request->title,
        //     'slug'=>$request->slug,
        //     'content'=>$request->content,
        //     'category'=>$request->category,
        // ]);

        //Utilizar esto es algo inseguro, ya que se pueden colar ciertos parametros que no leemos y ademas ocupamos crear un parametro fillable que lee cada uno en el modelo 
        Post::create($request->all());
    }

    #si una funcion tiene parametros, estos se deben de pasar en la ruta, y se deben de usar dentro de la funcion
    public function show(Post $post){
        
        // return view("posts.show", ['post' => $post]); //de esta manera se le pasan variables a las vistas blade

        // $post = Post::find($post); //busca un registro en la tabla posts con el id 1 y lo devuelve como un objeto de la clase Post
        return view("posts.show", compact('post')); //de esta manera se le pasan variables a las vistas blade

    }

    #Si el parametro lo instanciamos del tipo del modelo este se buscara automaticamente en la base de datos y se le pasara a la funcion, si no se encuentra el registro se lanzara un error 404
    public function edit(Post $post){
        // $post = Post::find($post); //busca un registro en la tabla posts con el id correspondiente y lo devuelve como un objeto de la clase Post
        return view("posts.edit", compact('post')); //de esta manera se le pasan variables a las vistas blade
    }

    public function update(Request $request, Post $post){
        // $post = Post::find($post); //busca un registro en la tabla posts con el id correspondiente y lo devuelve como un objeto de la clase Post
        // $post->title = $request->title;
        // $post->slug = $request->slug;
        // $post->content = $request->content;
        // $post->category = $request->category;
        // $post->save();
        $post->update($request->all());
        return redirect()->route('posts.show', $post);
    }

    public function destroy(Post $post){
        // $post = Post::find($post); //busca un registro en la tabla posts con el id correspondiente y lo devuelve como un objeto de la clase Post
        $post->delete();
        return redirect()->route('posts.index');
    }
}
