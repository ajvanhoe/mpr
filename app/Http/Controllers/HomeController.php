<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Middleware\VerifiedUser;
use Illuminate\Support\Facades\DB;
use App\User;
use Illuminate\Support\Facades\Mail;


use App\Mail\NewUserWelcome;
use App\Mail\UserCreated;
use Auth;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('verifiedUser',['except' => ['verificatedUser', 'sendMail']]);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    { 


        
        return view('index');
    }


    public function sendMail()
    {

        $user =  Auth::user();

           Mail::to('marko.novakovic81@gmail.com')->send(new NewUserWelcome($user));

      

        return redirect('/home');
    }

    public function verificatedUser($verify)
    {
        $user  = DB::table('users')
                  ->where('verification_token', $verify)
                  ->update(['verified'=>1, 'verification_token'=>'']);
        return redirect('/login');
     }
}
