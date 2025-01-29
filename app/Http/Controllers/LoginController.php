<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{


    public function __construct(){
        $this->middleware('guest');
    }

    public function index() {
        $data = [
            'title'=>'Connexion',
            'description'=>'Formulaire Connexion'
        ];
        return view('auth.login',$data);    }

    public function login(){
        request()->validate([
            'email'=>['required','email'],
            'password' =>['required'],
        ]);

        $remember = request()->has('remember');

        if(Auth::attempt([
            'email' => request('email'),
            'password' => request('password')],$remember)) {
                //dd(Auth::user->name)
               // Auth::guest();
                // Auth::check();
                // Auth::logout();
                return redirect('/summaries');
            }
            return back()->withErrors('Invalide')->withInput();

    }
}
