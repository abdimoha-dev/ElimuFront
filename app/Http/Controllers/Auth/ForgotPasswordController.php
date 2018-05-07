<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\EmailResetRequest;
use App\Mail\PasswordReset;
use App\Models\Password_reset;
use Illuminate\Foundation\Auth\SendsPasswordResetEmails;
use Illuminate\Support\Facades\Mail;

class ForgotPasswordController extends Controller
{

    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset emails and
    | includes a trait which assists in sending these notifications from
    | your application to your users. Feel free to explore this trait.
    |
    */

    use SendsPasswordResetEmails;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    public function passWordReset(EmailResetRequest $request)
    {
        Password_reset::create([
            'email' => $request->email,
            'token' => str_random(16),
        ]);
        Mail::to($request->email)->send(new PasswordReset());
        return redirect('login');
    }

    public function resetform()
    {
        return view('auth/passwords/reset');
    }
}
