<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Post;
class PostController extends Controller
{
    public function index(){
        $p = Post::all();
        return view('posts',['posts' => $p]);
            
        }
    }
