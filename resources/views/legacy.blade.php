// Show Task Dashboard
    Route::get('/', function () {
    //$tasks = Task::all();
        $tasks = Task::orderBy('created_at', 'asc')->get();
        return view('tasks', ['tasks' => $tasks]);
    });

 Route::get('/demo', function () {
          return view('demo2');
    }); 
