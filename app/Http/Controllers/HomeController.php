<?php

namespace App\Http\Controllers;

use App\User;
use App\Notifications\TaskNotification;

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
        User::find(1)->notify(new TaskNotification);

        return view('home');
    }
}
