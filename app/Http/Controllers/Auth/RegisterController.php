<?php

namespace App\Http\Controllers\Auth;

use App\Http\Requests\Auth\RegisterRequest;
use App\Models\Confirmation;
use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Mail;
use App\Mail\ConfirmMail;
use phpDocumentor\Reflection\Types\Null_;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Handle a registration request for the application.
     *
     * @param  \Illuminate\Http\Request $registerRequest
     * @return \Illuminate\Http\Response
     */
    public function register(RegisterRequest $registerRequest)
    {

        $user = User::create([
            'first_name'  => $registerRequest->first_name,
            'second_name' => $registerRequest->second_name,
            'email'       => $registerRequest->email,
            'phone'       => $registerRequest->phone,
            'password'    => $registerRequest->password,
            'role'        => $registerRequest->role,

        ]);

        $confirm = Confirmation::create([
            'user_id'     => $user->id,
            'email_token' => str_random(16),
            'phone_token' => str_random(16),
        ]);

        $this->confirmemail($user->email, $confirm->email_token);

        return redirect('login');
    }

//sending confirmation mails
    public function confirmemail($email, $token)
    {
        Mail::to($email)->send(new ConfirmMail($token));

    }

    public function testtoken($token)
    {

        if (Confirmation::where('email_token', $token)) {
            Confirmation::where('email_token', $token)->update(['email_token' => 'NULL']);//UPDATING EMAIL TOKEN TO NULL

            return redirect('login');
        } else {

//to Do
        }
    }

    public function confimMessage()
    {
        if (Confirmation::where('email_token', 'NULL'))

        $request->session()->flash('status', 'Task was successful!');

    }


}
