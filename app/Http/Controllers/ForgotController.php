<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

Use Str;
use Illuminate\Support\Facades\DB;
Use Auth;

Use app\Notifications\PasswordResetNotification;

Use app\Models\User;

class ForgotController extends Controller
{

    public function __construct(){
        $this->middleware('guest');
    }
    public function index(){
        return view(('auth.forgot'));
    }

    public function forgot() {

        $token = Str::uuid();

        DB::table('password_reset_tokens')->insert([
        'email' => 'required','email','exists:users',
        'token' => $token,
        'created_at'=> now()]);


        $user = User::whereEmail(request('email'))->first();
        $user->notify(new PasswordResetNotification($token));
        $info = "Verifier votre boite mail et suivre les instructions";
        return back()->withInfo($info);
    }
}
