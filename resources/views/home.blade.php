@extends('layouts.app')

@section('content')

<div class="container spark-screen">
    <div class="row">
        <!--div class="col-md-10 col-md-offset-1"-->

        <div class="col-xs-12 col-sm-12 col-md-10 col-sm-offset-2 col-md-offset-1">

        <!-- Current Tasks -->
        @if (count($tasks) > 0)
        <h4> Keystone Alliance </h4>
        <div class="panel panel-default">
            
            <div class="panel-heading panel-heading-custom">
                 Here are your Current Tasks :  {{ Auth::user()->name }} 
            </div>

            <div class="panel-body">
                <table class="table table-striped task-table">
                    <thead>
                        <th>Task Description</th>

                        <th>Location</th>
                        <th>Assigned to</th>
                        <th>Status</th>
                        
                        <th>Actons</th>
                        <th>&nbsp;</th>
                    </thead>
                    <tbody>
                        @foreach ($tasks as $task)
                        <tr>
                            <td class="table-text"><div>{{ $task->name }} </div></td>
                            <td> {{ $task->location }} </td>
                            <td> {{ $task->owner }} </td>
                            <td> {{ $task->status }} </td>

                            <!-- Task Edit Button-->
                            <td>
                                <form action="/task/{{ $task->id }}" method="POST">
                                    {{ csrf_field() }}
                                    {{ method_field('EDIT') }}

                                    <button type="submit" class="btn btn-info">
                                        <i class="fa fa-pencil-square-o"></i>  Edit....
                                    </button>
                                </form>
                            </td>       

                            <!-- Task Delete Button -->
                            <td>
                                <form action="/task/{{ $task->id }}" method="POST">
                                    {{ csrf_field() }}
                                    {{ method_field('DELETE') }}

                                    <button type="submit" class="btn btn-danger">
                                        <i class="fa fa-trash"></i>  Delete
                                    </button>
                                </form>
                            </td>


                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        @endif

        <div class="panel panel-default">
            <div class="panel-heading panel-heading-custom">
                New Task Details
            </div>

            <div class="panel-body">
                <!-- Display Validation Errors -->
                @include('common.errors')

                <!-- New Task Form -->
                <form action="/task" method="POST" class="form-horizontal">
                    {{ csrf_field() }}

                    <!-- Task Name -->
                    <div class="form-group">
                        <label for="task-name" class="col-sm-3 control-label">Task Name</label>
                        <div class="col-sm-8">
                            <input type="text" name="name" id="task-name" class="form-control" placeholder="Enter a short description to identify this task" >
                        </div>

                    </div>

                    <div class="form-group">
                        <label for="notes" class="control-label col-sm-3 "><strong> Description</strong> </label>
                        <div class="col-sm-8">
                            <textarea rows="5" class="form-control" name="notes"  placeholder="Describe in detail the task HERE! "></textarea>
                        </div>
                    </div>
             

                    <div class="form-group">
                        <label for="location" class="col-sm-3 control-label">Location</label>
                        <div class="col-sm-8">
                            <input type="text" name="location" id="task-location" class="form-control" >
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="owner" class="col-sm-3 control-label"><b>Assign Task to</b> </label>       
                        <div class="col-sm-8">
                            <select name ="owner" class="form-control"  >
                                    <option>Choose One...</option>
                                    @foreach ($owners as $owner)
                                            <option> {{ $owner->owner_name }} </option>
                                    @endforeach
                             </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="status" class="col-sm-3 control-label"><b>Status</b> </label>   
                        <div class="col-sm-8">
                            <select name ="status" class="form-control"  >
                              <option>Choose One...</option>
                              <option>Active</option>
                              <option>Completed</option>
                              <option>Deferred</option>
                              <option>Cancelled</option>
                             </select>
                        </div>
                    </div>
                        

                    <!-- Add Task Button -->
                    <div class="form-group">
                        <div class="col-sm-offset-3 col-sm-8">
                            <button type="submit" class="btn btn-primary">
                                <i class="fa fa-plus"></i> Add Task
                            </button>
                        </div>
                    </div>

                   
                </form>

                 


            </div>
  
            </div>
        </div>
    </div>
</div>


@endsection

@section ('scripts')

  <script type="text/javascript">

  $('#myButton').on('click', function () {
    var $btn = $(this).button('loading')
    // business logic...
    $btn.button('reset')
  })
</script>

@endsection







