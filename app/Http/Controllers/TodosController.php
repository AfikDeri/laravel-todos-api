<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Todo;

class TodosController extends Controller
{
    public function index()
    {
        $todos = Todo::all();

        return response()->json([
            "todos" => $todos
        ], 200);
    }

    public function store(Request $request)
    {
        $todo = Todo::create([
            "content" => $request->content,
            "completed" => false
        ]);

        return response()->json([
            "todo" => $todo
        ], 200);
    }

    public function delete(Request $request)
    {
        $todo = Todo::whereId($request->id)->first();

        if(!is_null($todo)) {
            $todo->delete();
        }

        return response(200);
    }

    public function complete(Request $request)
    {
        $todo = Todo::whereId($request->id)->first();

        if(!is_null($todo)) {
            $todo->completed = !$todo->completed;
            $todo->save();
        }

        return response(200);
    }
}
