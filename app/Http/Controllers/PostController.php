<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostController extends Controller
{
   public  function index(){
      $posts=Post::all();

   	return view('post.index',compact('posts'));

   }
   public function create(){
   	return view('post.create');

   }
   public function show($id){
      $post=Post::find($id);
      return view('post.show', compact('post'));


   }
   public function store(){
   	$post= new \App\Post;

   	$post->title=request('title');
   	$post->body=request('body');
   	$post->save();
   	return redirect('/');

   }
} 
