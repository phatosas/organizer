<?php

namespace Organizer\Http\Controllers;

use Illuminate\Http\Request;

class TodoController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
		$todos = \Organizer\Todo::all();
        return view('todo.todo')->with('todos',$todos);
    }
}
