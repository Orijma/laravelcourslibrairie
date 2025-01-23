<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;

class RegisterController extends Controller
{


    public function __construct(){
        $this->middleware('guest');
    }

    public function index() {
        $data = [
            'title'=>'Inscription',
            'description'=>'Formulaire Inscription'
        ];
        return view('auth.register',$data);
    }

    public function register(){
        //Traitement de l'inscription
        request()->validate([
            'name'=>'required',
            'email'=>'required',
            'password'=>'required',
        ]);

        $user = new User();
        $user->name = request('name');
        $user->email = request('email');
        $user->password = bcrypt(request('password'));
        $user->save();
        $info = "Votre inscription a bien été pris en compte";
        return back()->withInfo($info);


    }

}
