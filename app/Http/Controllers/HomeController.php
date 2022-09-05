<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('Home.home');
    }

    public function setName(Request $request)
    {
        session(['user_name' => $request->user_name]);
        return redirect('/');
    }

    public function viewText()
    {
        return view('Home.text', ['text' => file_get_contents('/var/www/html/data.txt')]);
    }
}
