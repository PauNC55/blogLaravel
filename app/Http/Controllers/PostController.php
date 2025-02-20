<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;


class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function __construct()
    {
        $this->middleware(
            'auth',
            ['only' => ['create', 'store', 'edit', 'update', 'destroy']]
        );
    }
    public function index()
    {   
            
        $datos = Post::orderBy('titulo', 'asc')->paginate(5);
        return view('posts.index', compact('datos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $post = new Post();
        $post->titulo = request()->get('titulo');
        $post->contenido = request()->get('contenido');
        $post->user_id = Auth::id();
        $post->save(); 
        return redirect()->route('posts.index');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        // $datos = Post::findOrFail($id);
        $datos = Post::with('user')->findOrFail($id);
        
        return view('posts.show', compact('datos'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {   
        $datos = Post::findOrFail($id);
        
        if(Auth::id()!==$datos->user_id){
            return redirect()->route('posts.show', $id)
                ->with('error', 'No tienes permiso para editar este post.');;
        } else{
            return view('posts.edit', compact('datos'));
        }
        
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        Post::findOrFail($id)->update($request->all());
        return redirect()->route('posts.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        
        $datos = Post::findOrFail($id);
        if(Auth::id()!==$datos->user_id){
            return redirect()->route('posts.show', $id)
                ->with('error', 'No tienes permiso para borrar este post.');
        } else{
            Post::findOrFail($id)->delete();
            return redirect()->route('posts.index', $id);
        }

    }

    public function nuevoPrueba(){
        $post = new Post();
        $post->titulo = 'titulo'.rand(1,100);
        $post->contenido = 'contenido'.rand(1,100);
        $post->user_id = Auth::id();
        $post->save();
        return redirect()->route('posts.index');
    }

    public function editaPrueba($id){
        $post=Post::findOrFail($id);
        $post->titulo = 'titulo'.rand(1,100);
        $post->contenido = 'contenido'.rand(1,100);
        $post->save();
        return redirect()->route('posts.index');

    }
}
