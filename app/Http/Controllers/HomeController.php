<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Middleware\VerifiedUser;

use App\User;

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
        $this->middleware('verifiedUser');
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
}
