<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Todo;

class TodoController extends Controller
{
    public function index()
    {
    	$todos = Todo::all();
    	return view('todos.index')->with(['todos' => $todos]);
    }

    public function create()
    {
    	return view('todos.create');
    }
    public function store(Request $request)
    {
    	Todo::create($request->all());
    	return redirect()->back();
    }
    public function edit()
    {
    	return view('todos.edit');
    }
}
