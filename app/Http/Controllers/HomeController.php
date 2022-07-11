<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
<<<<<<< HEAD

class HomeController extends Controller
{
    public function index() 
    {
        return view('home.index');
    }
}
=======
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {

        if (Auth::check()) {
            return view('home.index');
        }
        return view('auth.login');
    }
}
>>>>>>> 9273082822040b9d0e8e3e3b60b734c1d7162ecf
