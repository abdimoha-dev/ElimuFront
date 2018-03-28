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
     * @return \Illuminate\Http\Response
     */
    public function showUserDashboard()
    {
        if (auth()->user()->role == 'USER') {
            return view('dashboard.user.home');
        } else if (auth()->user()->role == 'ADMIN') {
            return view('dashboard.admin.home');
        } else if (auth()->user()->role == 'ROOT') {
            return view('dashboard.root.home');
        }
    }
}
