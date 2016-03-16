// Show Task Dashboard
    Route::get('/', function () {
    //$tasks = Task::all();
        $tasks = Task::orderBy('created_at', 'asc')->get();
        return view('tasks', ['tasks' => $tasks]);
    });

 Route::get('/demo', function () {
          return view('demo2');
    }); 


    <script type="text/javascript">

  $('#myButton').on('click', function () {
    var $btn = $(this).button('loading')
    // business logic...
    $btn.button('reset')
  })
</script>


