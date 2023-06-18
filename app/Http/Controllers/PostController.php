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

        // one way to add variable to view
        // return view('articles', compact('title'));
/*         return view('articles', compact('title', 'title1'));
 */
        // another way to add variable to view

/*         return view('articles')->with('title', $title);
 */    }
}
