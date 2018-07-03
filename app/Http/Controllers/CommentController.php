<?php

namespace App\Http\Controllers;

use App\Comment;

use Illuminate\Http\Request;

class CommentController extends Controller
{

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $comment = new Comment();
        $comment->name =\Auth::guard('employee')->user()->name;
        $comment->content = $request->content;
        $comment->data_id = $request->id;
        $comment->save();

        return redirect()->route('employee.data.show', $comment->data_id)->withFlash('Se ha agregado tu comentario "'. $comment->name . '" .');
    }

}
