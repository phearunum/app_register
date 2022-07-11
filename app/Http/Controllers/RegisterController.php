<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\RegisterRequest;
<<<<<<< HEAD
=======
use Hash;
use Session;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash as FacadesHash;
>>>>>>> 9273082822040b9d0e8e3e3b60b734c1d7162ecf

class RegisterController extends Controller
{
    /**
     * Display register page.
<<<<<<< HEAD
     * 
=======
     *
>>>>>>> 9273082822040b9d0e8e3e3b60b734c1d7162ecf
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        return view('auth.register');
    }

    /**
     * Handle account registration request
<<<<<<< HEAD
     * 
     * @param RegisterRequest $request
     * 
     * @return \Illuminate\Http\Response
     */
    public function register(RegisterRequest $request) 
    {
        $user = User::create($request->validated());

        auth()->login($user);

        return redirect('/')->with('success', "Account successfully registered.");
    }
}
=======
     *
     * @param RegisterRequest $request
     *
     * @return \Illuminate\Http\Response
     */
    public function register(RegisterRequest $request)
    {
        $user = User::create($request->validated());
        auth()->login($user);
        return redirect('/')->with('success', "Account successfully registered.");
    }



}
>>>>>>> 9273082822040b9d0e8e3e3b60b734c1d7162ecf
