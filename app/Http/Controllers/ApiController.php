<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;


class ApiController extends Controller
{
    //
   

    public function consulta(Request $request)
    {
       if(!empty($request->id)){
            $lista = Post::where('id',$request->id)->get();
       }else{
            $lista = Post::all();
       } 
       
        return response()->json($lista);
   

    }


     public function inserta()
    {
      $api = 'https://jsonplaceholder.typicode.com/posts';
      $lista = HTTP::get($api);
      $lista_api = $lista->json();
      foreach ($lista_api as $item) {
        $post = new Post;
        $post->userId = $item['userId'];
        $post->id = $item['id'];
        $post->title = $item['title'];
        $post->body = $item['body'];
        $post->save();
      }

    }





}
