<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use DB;
class Dashborad extends Controller
{
    public function index()
    {
        return view('dashboard.page.index');
    }
}