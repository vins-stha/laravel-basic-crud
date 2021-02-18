<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class user extends Controller
{
    function index()
    {
        echo "<h1> Hello from user controller index</h1>";
        return view('user.header').view('user.index');
    }

    function add()
    {
        echo "<h1> Hello from user controller index</h1>";
        return view('user.header').view('user.add');
    }

    function delete()
    {
        echo "<h1> Hello from user controller index</h1>";
        return view('user.header').view('user.delete');
    }

    function register(Request $request)
    {
        return $request->post();
    }
}
