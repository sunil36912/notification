<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Notifications\InvoicePaid;
use App\User;
use Illuminate\Support\Facades\Notification;

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
    public function notify()
    {
        $users = User::all();
        $user = User::find(2);
        Notification::send($users, new InvoicePaid($user));
        return view('home');
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
