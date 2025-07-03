<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IntroController extends Controller
{
    public function show()
    {
        $todos = [
            'Learn Laravel',
            'Learn vue',
            'Learn React',
        ];
        $title = 'Hello Laravek, This is Show UI';
        return view('showui',compact('todos'));
    }

    public function testfun()
    {
        return view('test.testui');
    }


   
}
