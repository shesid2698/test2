<?php

namespace App\Http\Controllers;

class Sitecontroller extends Controller
{
    public function hi()
    {
        return 'hi';
    }
    public function bug()
    {
        return 'debug';
    }
    public function index()
    {
        $name = '何韋賢';
        return view('index.index', compact('name'));
    }
}