<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class PostController extends Controller
{
    public function allPosts(){
        $response=Http::get('https://jsonplaceholder.typicode.com/posts');
        return view('allpost',['data'=>$response->collect()]);
    }
    public function singlePost($id){
        $response=Http::get('https://jsonplaceholder.typicode.com/posts/'.$id);
        return view('singlepost',['data'=>$response->collect()]);
    }
    public function addPost(){
        $response=Http::post('https://reqres.in/api/users',[
            'name'=> 'masdasdasdasd',
            'job'=> 'leaderadsaasdasdada'
        ]);
    dd($response->json());
    }

    public function updatePost($id){
        $response=Http::post('https://reqres.in/api/users'.$id,[
            'name'=> 'ahmed',
            'job'=> 'ali'
        ]);
    dd($response->json());
    }
}