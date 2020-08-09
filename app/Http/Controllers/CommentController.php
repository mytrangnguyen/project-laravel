<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;
use App\Product;
use App\User;

class CommentController extends Controller
{

  // show list Comment
    public function getListComment() {
        $product = Product::select('id','prod_name')->get()->toArray();
        $user = User::select('id','username')->get()->toArray();
        // $comment = Comment::all();

        $comment = new Comment();
        $comment = comment::select('id_user', 'id_prod', 'comment', 'comments.created_at as created_at', 'users.username as username', 'products.prod_name as prod_name')
        ->join('users', 'comments.id_user', 'users.id')
        ->join('products', 'comments.id_prod', 'products.id')
        ->get()->toArray();
        $size=count($comment);
        // dd($comment);
        return view('admin.comment.list',compact('comment','size'));
    }

    // delete Comment
    public function getDeleteComment($id) {
      $comment = Comment::find($id);
      $comment->delete($id);
      return back();
    }
}