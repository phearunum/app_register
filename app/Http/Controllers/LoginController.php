<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /**
     * Display login page.
     *
     * @return Renderable
     */
    public function show()
    {
        return view('auth.login');
    }
   /**
     * Handle account login request
     *
     * @param LoginRequest $request
     *
     * @return \Illuminate\Http\Response
     */

    public function login(LoginRequest $request)
    {
        $credentials = $request->getCredentials();

        if(!Auth::validate($credentials)){
           // dd($credentials);
          //  return redirect()->to('login')
           //     ->withErrors(trans('auth.failed'));
           return response()->json(['status'=>302,
           'data'=>[],
           'smg'=>"username or password inconnect"]
            );
        }

        $user = Auth::getProvider()->retrieveByCredentials($credentials);
        $logged=Auth::login($user);
       
            return response()->json(['status'=>200,'data'=>$user,'smg'=>'success']);
       // return $this->authenticated($request, $user);
    }

    /**
     * Handle response after user authenticated
     *
     * @param Request $request
     * @param Auth $user
     *
     * @return \Illuminate\Http\Response
     */
    protected function authenticated(Request $request, $user)
    {
        return redirect()->intended();
    }
}
