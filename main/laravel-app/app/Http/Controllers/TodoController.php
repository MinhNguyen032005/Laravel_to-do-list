<?php

namespace App\Http\Controllers;

use App\Http\Resources\TodoResource;
use Illuminate\Http\Request;
use App\Models\Task;
use App\Http\Requests\TodoRequest;

class TodoController extends Controller
{
    public function index()
    {
        $tasks = Task::latest()->get();
        return response([
            'tasks' => "message",
            'todo' => TodoResource::collection($tasks),
        ], 200);
    }
    public function store(TodoRequest $request)
    {
        $validated = $request->validated();

        $saveData = Task::create($validated);

        if ($saveData) {
            return response([
                'message' => 'Task created successfully',
                'todo' => $saveData,
            ], 201);
        } else {
            return response([
                'message' => 'Task not created',
            ], 500);
        }
    }
    public function update(TodoRequest $request, Task $task)
    {
        $validated = $request->validated();

        $updateData = $task->update($validated);
        if ($updateData) {
            return response([
                'message' => 'Task created successfully',
                'todo' => $updateData,
            ], 200);
        } else {
            return response([
                'message' => 'Task not created',
            ], 500);
        }
    }
    public function destroy(Task $task)
    {
        if (Task::find($task->id)) {
            $deleteData = $task::where('id', $task->id)->delete();
            if ($deleteData) {
                return response([
                    'message' => 'Task deleted successfully',
                ], 200);
            } else {
                return response([
                    'message' => 'Task not deleted',
                ], 500);
            }
        } else {
            return response([
                'message' => 'ERROR',
            ], 500);
        }
    }
}
