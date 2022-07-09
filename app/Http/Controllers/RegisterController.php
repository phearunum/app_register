<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\RegisterRequest;
use Hash;
use Session;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash as FacadesHash;

class RegisterController extends Controller
{
    /**
     * Display register page.
     *
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        return view('auth.register');
    }

    /**
     * Handle account registration request
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
