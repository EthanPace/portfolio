<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TaskController extends Controller
{
    public function index()
    {
        return view('tasks.index', [
            'tasks' => Task::where('user_id', Auth::id())->get(),
        ]);
    }

    public function create()
    {
        return view('tasks.create');
    }

    public function store(Request $request)
    {
        $user = Auth::user();

        $valid = $request->validate([
            'title' => 'string|max:255',
            'description' => 'nullable|string',
        ]);

        $valid['user_id'] = $user->id;

        if (empty($valid['title'])) { $valid['title'] = 'New Task'; }

        Task::create($valid);

        return redirect()->route('tasks.index');
    }

    public function update(Request $request, Task $task) {
        $user = Auth::user();

        $valid = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);

        $task->update($valid);

        return redirect()->route('tasks.index');
    }

    public function destroy(Task $task)
    {
        $task->delete();

        return redirect('/tasks');
    }
}
