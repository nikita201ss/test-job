<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Task;
use Illuminate\Http\Request;

class BasicController extends Controller
{
    public function index() {
        return view('static.home');
    }

    public function login() {
        return view('static.login');
    }

    public function registration() {
        return view('static.reg');
    }

    public function create() {
        return view('static.create');
    }

    public function submit(Request $request) {

        $task = new Task();
        $task->name = $request->input('name');
        $task->message = $request->input('message');
        $task->user_id = auth()->id();
        $task->save();

        return redirect()->route('home');
    }

    public function publication () {
        $tasks = Task::all();
        return view('static.home')->with('tasks', $tasks);
    }



    
}
