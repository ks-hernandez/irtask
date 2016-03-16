<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Task;
use App\owner;
use App\statu;


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
     * @return Response
     */
    public function index()
    {

        $status = statu::orderBy('status','asc')->get();

        $owners = owner::orderBy('owner_name','asc')->get();
        
        $tasks = Task::orderBy('created_at', 'asc')->get();
        
        return view('home', compact('tasks'), compact('owners'));
        

    }

    public function qanew() {

        return view ('qa_new');
    }
}
