<?php

use App\Task;
use Illuminate\Http\Request;

Route::group(['middleware' => 'web'], function () {

Route::auth();

Route::get('/', 'HomeController@index');
Route::get('/home', 'HomeController@index');


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

