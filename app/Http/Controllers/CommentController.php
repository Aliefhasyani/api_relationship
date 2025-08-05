<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Profile;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function index(){
        $comment = Comment::with('profile')->get();
    
        
        return response()->json([
            "data" => $comment,
          
        ]);
    }

    public function show($id){
        $comment = Comment::with('profile')->find($id);

        return response()->json([
            "comment" => $comment
        ]);
    }
}
