<?php

namespace App\Http\Controllers\Auth;

use 
class HomeController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {
        return view('home',[
            'twitch'=> Twitch::all()
        ]);
    }
}
