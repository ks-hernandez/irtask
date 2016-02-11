<?php

use App\Task;
use Illuminate\Http\Request;

Route::group(['middleware' => 'web'], function () {

// Show Task Dashboard
    Route::get('/', function () {
    //$tasks = Task::all();
        $tasks = Task::orderBy('created_at', 'asc')->get();
        return view('tasks', ['tasks' => $tasks]);
    });

 Route::get('/demo', function () {
          return view('demo2');
    }); 


// Add New Task
    Route::post('/task', function (Request $request) {
        $validator = Validator::make($request->all(), [
            'name' => 'required|max:255',
            'location'=>'required|min:5',
            ]);

        if ($validator->fails()) {
            return redirect('/')
            ->withInput()
            ->withErrors($validator);
        }

        $task = new Task;
        $task->name = $request->name;
        $task->location = $request->location;
        $task->save();

        return redirect('/');
    });


// Delete Task
    Route::delete('/task/{task}', function (Task $task) {
        $task->delete();

        return redirect('/');      

    });

});