<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
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
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    protected $npm;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
        $this->npm = $this->findNpm();
    }
    public function findNpm()
    {
        $login = request()->input('npm');
        $fieldType = filter_var($login, FILTER_VALIDATE_EMAIL) ? 'email' : 'npm';
        request()->merge([$fieldType => $login]);
        return $fieldType;
    }
    public function username()
    {
        return $this->npm;
    }
}
