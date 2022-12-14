<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Show the application's login form.
     *
     * @return \Illuminate\View\View
     */
    protected $redirectTo;

    public function redirectTo()
    {
        switch(auth()->user()->roles_id){
            case 1:
                $this->redirectTo = '/super';
                return $this->redirectTo;
                break;
            case 2:
                $this->redirectTo = '/admin';
                return $this->redirectTo;
                break;
            case 3:
                $this->redirectTo = '/himpunans';
                return $this->redirectTo;
                break;
            case 4:
                $this->redirectTo = '/ukms';
                return $this->redirectTo;
                break;
            case 5:
                $this->redirectTo = '/kedis';
                return $this->redirectTo;
                break;
            case 6:
                $this->redirectTo = '/dapmen';
                return $this->redirectTo;
                break;
            case 7:
                $this->redirectTo = '/beranda';
                return $this->redirectTo;
                break;
            case 8:
                $this->redirectTo = '/beranda';
                return $this->redirectTo;
                break;
            default:
                $this->redirectTo = '/beranda';
                return $this->redirectTo;
        }
    }


    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}
