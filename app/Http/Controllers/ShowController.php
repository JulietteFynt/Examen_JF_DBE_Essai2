<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class ShowController extends Controller
{
    public function show($id)
    {
        $task = Task::find($id);

        return view('showtask', [
            'tasks' => $task,
        ]);
    }

    public function delete($task_id)
    {
        $task = \App\Models\Task::find($task_id);
        $task->delete();
        return view('delete',[
            'id' => $task_id
        ]);
    }
}



