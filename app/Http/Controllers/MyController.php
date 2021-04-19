<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{
    public function index() {
        $title = 'Головна сторінка';
        $get = request()->get('get_txt');
        $post = request()->post('post_txt');
        return view('index')
            ->with('title', $title)
            ->with('get', $get)
            ->with('post', $post);
    }

    public function another() {
        $title = 'Інша сторінка';
        $arr = ['a', 'b', 'c'];
        return view('another')
            ->with('title', $title)
            ->with('arr', $arr);
    }
}
