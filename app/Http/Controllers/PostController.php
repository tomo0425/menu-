<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index()//インポートしたPostをインスタンス化して$postとして使用。
        {
            return view('post');
            return $post->get();//$postの中身を戻り値にする。
        }
}
