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

    public function create() {
        return view('posts.create');
    }

    public function store(Request $request){
        // バリデーションを設定する
        $request->validate([
            'title' => 'required|max:20',
            'content' => 'required|max:200',
        ]);

        // フォーム入力内容をもとに、テーブルにデータを追加する
        $post = new Post();
        $post->title = $request->input('title');
        $post->content = $request->input('content');
        $post->save();

        // レダイレクトさせる
        return redirect('/posts');
    }
}