<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Project;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function postcomment(Request $request){
        $request->validate([
            'message'=>'required',
            
        ]);

        
        $comment=new Comment();
        $comment->project_id=$request->project_id;
        $comment->message=$request->message;
        $comment->save();
        return redirect()->back()->with('success','Commented on this!');
    }
    public function commentdelete($id){
        $cdel=Comment::find($id);
        $cdel->delete();

        return redirect()->back()->with('warning','Deleted Comment');
    }
}