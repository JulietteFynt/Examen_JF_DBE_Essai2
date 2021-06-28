<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TasksOrderController extends Controller
{
    public function order()
    {
        $tasks = Task::orderBy('title','asc')->get();
        return view('tasksorder',[
            'tasks' => $tasks,
        ]);
    }

}