<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Post;
class PostController extends Controller
{
    public function insert(){
        $post = new Post;
        $post->user_id = 1;
        $post->title = 'New Post';
        $post->body = 'The body of the post';
        $post->save();
        echo "A new post was inserted successfully!";
    }

    public function select(){
        $posts = Post::all();
        echo '<table border="1"><tr><th>id</th><th>user_id</th><th>title</th><th>body</th></tr>';
        foreach($posts as $post){
            echo '<tr><td>' . $post->id . '</td><td>' . $post->user_id . '</td><td>' . $post->title . '</td><td>' . $post->body . '</td></tr>';
        }
        echo '</table>';
    }
}
