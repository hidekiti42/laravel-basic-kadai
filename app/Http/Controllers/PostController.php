<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PostController extends Controller
{
    // indexアクションを作成
    public function index() {
        // Step 2で作成したビューを返す
        return view('posts.index');
    }
}