<?php

namespace App\Http\Controllers;
<<<<<<< HEAD

=======
>>>>>>> 9273082822040b9d0e8e3e3b60b734c1d7162ecf
use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /**
     * Display login page.
<<<<<<< HEAD
     * 
=======
     *
>>>>>>> 9273082822040b9d0e8e3e3b60b734c1d7162ecf
     * @return Renderable
     */
    public function show()
    {
        return view('auth.login');
    }
<<<<<<< HEAD

    /**
     * Handle account login request
     * 
     * @param LoginRequest $request
     * 
     * @return \Illuminate\Http\Response
     */
=======
   /**
     * Handle account login request
     *
     * @param LoginRequest $request
     *
     * @return \Illuminate\Http\Response
     */

>>>>>>> 9273082822040b9d0e8e3e3b60b734c1d7162ecf
    public function login(LoginRequest $request)
    {
        $credentials = $request->getCredentials();

<<<<<<< HEAD
        if(!Auth::validate($credentials)):
            return redirect()->to('login')
                ->withErrors(trans('auth.failed'));
        endif;
=======
        if(!Auth::validate($credentials)){
            dd($credentials);
            return redirect()->to('login')
                ->withErrors(trans('auth.failed'));
        }
>>>>>>> 9273082822040b9d0e8e3e3b60b734c1d7162ecf

        $user = Auth::getProvider()->retrieveByCredentials($credentials);

        Auth::login($user);

        return $this->authenticated($request, $user);
    }

    /**
     * Handle response after user authenticated
<<<<<<< HEAD
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
=======
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
>>>>>>> 9273082822040b9d0e8e3e3b60b734c1d7162ecf
