<?php

namespace Organizer\Http\Controllers;

use Illuminate\Http\Request;

use Organizer\Todo;

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
		$todos = \Organizer\Todo::all();
        return view('welcome')->with('todos',$todos);
    }
}
