<?php

namespace App\Http\Controllers;
use App\Models\Task; 
use Illuminate\Http\Request;
class TaskController extends Controller
{
    public function index()
    {
        $tasks = Task::all();
    
        if ($tasks->isEmpty()) {
            return response()->json(['message' => 'No tasks found.'], 404);
        }
    
        return response()->json($tasks, 200);
    }
    

    public function show($id)
    {
        $task = Task::find($id);

        if (!$task) {
            return response()->json(['error' => 'Tâche non trouvée'], 404);
        }

        return response()->json($task);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'status' => 'required|string',
            'priority' => 'required|string',
            'due_date' => 'nullable|date',
            'user_id' => 'required|exists:users,id',
        ]);

        $task = Task::create($validated);

        return response()->json(['message' => 'Tâche créée avec succès', 'task' => $task], 201);
    }
    public function update(Request $request, $id)
    {
        $task = Task::find($id);

        if (!$task) {
            return response()->json(['error' => 'Tâche non trouvée'], 404);
        }

        $validated = $request->validate([
            'title' => 'sometimes|required|string|max:255',
            'description' => 'nullable|string',
            'status' => 'sometimes|required|string',
            'priority' => 'sometimes|required|string',
            'due_date' => 'nullable|date',
        ]);

        $task->update($validated);

        return response()->json(['message' => 'Tâche mise à jour avec succès', 'task' => $task]);
    }

    public function destroy($id)
    {
        $task = Task::find($id);

        if (!$task) {
            return response()->json(['error' => 'Tâche non trouvée'], 404);
        }

        $task->delete();

        return response()->json(['message' => 'Tâche supprimée avec succès']);
    }

}
