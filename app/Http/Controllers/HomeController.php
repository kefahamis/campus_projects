<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    // public function worker(Request $req){
    //     return view('middleware')->withMessage("Worker");
    // }
    // public function employee(Request $req){
    //     return view('middleware')->withMessage("Employee");
    // }
    public function role(){

        
    }
}
