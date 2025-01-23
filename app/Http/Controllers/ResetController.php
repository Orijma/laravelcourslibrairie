<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use Illuminate\Support\Facades\DB;


use App\Models\User;

class ResetController extends Controller
{


    public function __construct(){
        $this->middleware('guest');
    }
    public function index(string $token){
        $password_reset = DB::table('password_reset_tokens')->where('token',$token)->first();
        abort_if(!$password_reset,403);

        $data = [
            'title' => $description = 'Reinitialisation MDP' ,
            'description' => $description,
            'password_reset' => $password_reset
        ];

        return view('auth.reset',$data);
    }

    public function reset() {
        request()->validate([
            'email'=> 'required|email',
            'token'=>'required',
            'password'=>'required|between:6,20|confirmed'
        ]);

        $nb = DB::table('password_reset_tokens')->where('email',request('email'))->where('token',request('token'))->count();
        if($nb == 0){
            $error ="Verifier votre saisie";
            return back()->withErrors($error)->withInput();
        }
        $user = User::whereEmail(request('email'))->firstOrFail();
        $user->password = bcrypt('password');

        DB::table('password_reset_tokens')->where('email',request('email'))->delete();

        $info = "MAJ effectué";
        return redirect()->route('login.index')->withInfo($info);



    }
}
