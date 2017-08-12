<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
<<<<<<< HEAD
=======
use App\User;

use Nahid\Talk\Live\Broadcast;
>>>>>>> 08ed55357d1124fbf16f3a0a8a1d11baa1561e93

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
    public function index()
    {
<<<<<<< HEAD
        return view('home');
=======
        $users = User::all();
        return view('home', compact('users'));
    }

    public function tests()
    {

        $b = new Broadcast(\Illuminate\Contracts\Config\Repository::class, \Vinkla\Pusher\PusherFactory::class);
        dd($b->tests());
>>>>>>> 08ed55357d1124fbf16f3a0a8a1d11baa1561e93
    }
}
