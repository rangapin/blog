<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index() {

        $posts = [
            'this is the first post',
            'this is the second post'
        ];

        $title = 'My first title';
        $title1 = 'My one title';
        return view('articles', compact('posts'));

/*         one way to add variable to view
        return view('articles', compact('title'));
        return view('articles', compact('title', 'title1'));

        another way to add variable to view

        return view('articles')->with('title', $title); */

        return view('article', [
            'posts' => $posts
        ]);
    }

    public function show($id) {


        $posts = [
            1 => 'mon titre n1',
            2 => 'mon titre n2'
        ];

        $post = $posts($id) ?? 'Pas de titre';

        return view('article', [
            'post' => $post
        ]);
    }
}
