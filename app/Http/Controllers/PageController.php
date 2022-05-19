<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        $name = 'Sandra';
        return view('hello', [
            'name' => $name,
        ]);
    }
}
