<?php

namespace App\Http\Controllers;
use Config;
use Illuminate\Support\Collection;
use Illuminate\Http\Request;
use DB;
class HomeController extends Controller
{
        protected $connection = 'ohm_v2'; 
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {

        if(Config::get('app.login'))
            $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }
}

