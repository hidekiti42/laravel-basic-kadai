<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Models\Post;



class PostController extends Controller
{
    // indexアクションを作成
    public function index() {
        // postsテーブルからすべてのデータを取得
        $posts = DB::table('posts')->get();

        // 変数$postsを'posts/index.blade.php'ビューに渡す
        return view('posts.index',compact('posts'));
    }

    public function show($id) {

        $posts = Post::find($id);

        return view('posts.show', compact('posts'));
    }
}