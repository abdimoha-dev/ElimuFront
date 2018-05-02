<?php

namespace App\Http\Controllers\Auth;

use App\Http\Requests\Auth\RegisterRequest;
use App\Models\Confirmation;
use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Mail;
use App\Mail\ConfirmMail;
use App\Http\Traits\SendSMS;
use phpDocumentor\Reflection\Types\Null_;
use PhpParser\Node\Stmt\Return_;


class RegisterController extends Controller
{
    Use SendSMS;

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
//create random tokens for confirmation
        $confirm = Confirmation::create([
            'user_id'     => $user->id,
            'email_token' => str_random(16),
            'phone_token' => str_random(16),
            'sms_code'    => str_random(4),
        ]);

        $this->confirmemail($user->email, $confirm->email_token);// pass pEmail address and token to confirmemail
        $this->index($user->phone, $confirm->sms_code,
            $confirm->phone_token);// pass phone number and token to method index

        return redirect('login');
    }

    /**
     * SendS confirmation mail
     *
     * @param $email
     * @param $token
     */
    public function confirmemail($email, $token)
    {
        Mail::to($email)->send(new ConfirmMail($token));
    }

//On clicking link on the sent email address
    public function testtoken($token)
    {
        if (Confirmation::where('email_token', $token)) {
            Confirmation::where('email_token', $token)->update(['email_token' => 'NULL']);//UPDATING EMAIL TOKEN TO NULL

            return redirect('login');
        }
    }

    public function index($phone, $sms_code, $phone_token)
    {
        $this->send($phone, $sms_code, $phone_token);
    }

    public function confirmPhone($phone_token)
    {
        if (Confirmation::where('phone_token')) {//FIND IN MODEL Confirmation WHERE PHONE TOKEN IS SAME AS LINKS TOKEN
            Confirmation::where('phone_token', $phone_token)
                ->update(['phone_token' => 'NULL']);//UPDATING PHONE TOKEN TO NULL
        }
    }

    public function phoneCode($sms_code)
    {
        if (Confirmation::where(Auth()->user()->users->sms_code !== NULL)) {
            Return view('smscode', [Confirmation::where()]);
        }
    }


}
