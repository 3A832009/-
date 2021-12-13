<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\models\Task;

class TaskController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(Request $request)
    {
        return view('tasks.index');
    }
}
