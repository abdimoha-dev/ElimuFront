<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Models\User;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\Models\Confirmation;
use Illuminate\Http\Request;
use phpDocumentor\Reflection\Types\Null_;

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


    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function login(LoginRequest $request)
    {
        // If the class is using the ThrottlesLogins trait, we can automatically throttle
        // the login attempts for this application. We'll key this by the username and
        // the IP address of the client making these requests into this application.
        if ($this->hasTooManyLoginAttempts($request)) {
            $this->fireLockoutEvent($request);

            return $this->sendLockoutResponse($request);
        }

        if (auth()->attempt(['email' => $request->email, 'password' => $request->password])) {

            if (auth()->user()->confirmation->email_token && auth()->user()->confirmation->phone_token) {

                session()->flash('warning-message', ['Please confirm your email address and phone number!']);
            } else if (auth()->user()->confirmation->email_token) {

                session()->flash('warning-message', ['Please confirm your email address!']);
            } else if (auth()->user()->confirmation->phone_token) {

                session()->flash('warning-message', ['Please confirm your phone number!']);
            } else {
                session()->flash('success-message',
                    ['Welcome back ' . auth()->user()->first_name . ' ' . auth()->user()->second_name . '!']);
            }

            return redirect()->intended('/home');
        }


        // If the login attempt was unsuccessful we will increment the number of attempts
        // to login and redirect the user back to the login form. Of course, when this
        // user surpasses their maximum number of attempts they will get locked out.
        $this->incrementLoginAttempts($request);

        return $this->sendFailedLoginResponse($request);
    }

    /**
     * Log the user out of the application.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function logout(Request $request)
    {
        $this->guard()->logout();

        $request->session()->invalidate();

        return redirect('login');
    }
}
