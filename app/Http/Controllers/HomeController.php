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
        return view('home');
    }

    public function addNotifications()
    {
        User::find(1)->notify(new TaskNotification);

        return redirect()->back();
    }

    public function markRead()
    {
        auth()->user()->unreadNotifications->markAsRead();

        return redirect()->back();
    }
}
