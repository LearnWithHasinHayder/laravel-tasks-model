<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;

class TasksController extends Controller {
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request) {
        // $status = $request->get('status');
        // if (!$status) {
        //     $tasks = Task::all();
        // }else if($status=='completed'){
        //     $tasks = Task::where('status','completed')->get();
        // }else{
        //     $tasks = Task::where('status','pending')->get();
        // }

        $tasks = Task::when($request->status, function ($query, $status) {
            $query->where('status', $status);
        })->orderBy('due_date')->get();

        // return $tasks;

        return view('tasks.index',['tasks'=>$tasks,'showToolbar'=>true]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create() {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request) {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Task $task) {
        return view('tasks.index', ['tasks' => [$task], 'showToolbar'=>false]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id) {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Task $task) {
        $task->update($request->all());
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id) {
        //
    }
}
