<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Facades\Storage;

class TopController extends Controller
{
    public function index() {
        $posts = Post::all();
        return view('index', compact('posts'));
    }

    public function store(Request $request) {
        // バケットの`test`フォルダへアップロード
        $image = $request->file('image');
        $path = Storage::disk('s3')->putFile('test', $image);
        
        $post = new Post();
        $post->fill([
            'image_path' => $path,
        ])->save();
  
        return redirect()->route('index');
    }
}