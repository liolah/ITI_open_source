<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Comment;
class CommentController extends Controller
{
    public function insert(){
        $comment = new Comment;
        $comment->user_id = 1;
        $comment->post_id = 1;
        $comment->content = 'The content of the comment';
        $comment->save();
        echo "A new comment was saved successfully!";
    }

    public function select(){
        $comments = DB::select('select * from comments');
        echo '<table border="1"><tr><th>id</th><th>user_id</th><th>post_id</th><th>content</th></tr>';
        foreach($comments as $comment){
            echo '<tr><td>' . $comment->id . '</td><td>' . $comment->user_id . '</td><td>' . $comment->post_id . '</td><td>' . $comment->content . '</td></tr>';
        }
        echo '</table>';
    }
}

