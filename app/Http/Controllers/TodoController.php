<?php

namespace App\Http\Controllers;


use App\Models\TODO;
use App\Models\TODOSub;
use Illuminate\Http\Request;
use Carbon\Carbon;

class TodoController extends Controller
{
    public function addTask(Request $req)
    {
        TODO::create([
            'task' => $req->task,
            'dueDate' => $req->dueDate,
        ]);
        return 'saved';
    }

    public function addSubTask(Request $req)
    {

        TODOSub::create([
            'taskID' => $req->taskID,
            'subTask' => $req->subTask,
        ]);
        return 'sub task created';
    }

    public function completeTask($id)
    {
        $completed = TODO::find($id);

        $completed->update(['completed' => 1]);

        TODOSub::where('taskID', $completed->id)->update(['completed' => 1]);

        return 'task completed';
    }

    public function pendingTasks()
    {
        return TODO::with('subTasks')->orderBy('dueDate', 'ASC')
            ->where('completed', 0)
            ->get();
    }

    public function searchTasks($keyword)
    {
        return TODO::with('subTasks')
            ->where('task', 'like', '%' . $keyword . '%')
            ->get();
    }
    // for filtering the task by today, this week, next week,overdue
    public function filterTasks($by)
    {
        if ($by === 'today') {
            return TODO::with('subTasks')
                ->where('dueDate', Date('Y-m-d'))
                ->get();
        } else if ($by === 'thisWeek') {

            return TODO::with('subTasks')
            ->whereBetween('dueDate', [Carbon::now()->startOfWeek(), Carbon::now()->endOfWeek()])
            ->get();
        }else if ($by === 'nextWeek'){
            $startDate = Carbon::now()->endOfWeek()->addDays(1);
            $endDate = Carbon::now()->endOfWeek()->addDays(7);
            return TODO::with('subTasks')
            ->whereBetween('dueDate', [$startDate->format('Y-m-d'), $endDate->format('Y-m-d')])
            ->get();
        }else if($by === 'overDue'){
            return TODO::with('subTasks')
            ->where('dueDate','<',Date('Y-m-d'))
            ->get();
        }
    }

    public function deleteTask($id)
    {
        $del =  TODO::find($id);
        $del->delete();
        return 'deleted';
    }
}
