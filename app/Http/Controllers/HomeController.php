<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use DB;
class HomeController extends Controller
{
    public function index()
    {

        if (Auth::check()) {
            return view('website.page.index');
        }
        return view('website.page.login');
    }
     public function profile()
    {
        if (Auth::check()) {
            return view('website.page.profile');
        }
      //  return redirect('/');
        return view('website.page.login');
    }
     public function signup()
    {
        $AccountType =DB::table('account_types')->get();
        return view('website.page.signup')->with('AccountType',$AccountType);
    }

}
