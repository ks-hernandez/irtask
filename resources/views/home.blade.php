@extends('layouts.app')

@section('content')
<div class="container spark-screen">
    <div class="row">
        <!--div class="col-md-10 col-md-offset-1"-->

        <div class="col-xs-12 col-sm-12 col-md-10 col-sm-offset-2 col-md-offset-1">
              

        <!-- Current Tasks -->
        @if (count($tasks) > 0)
        <h2> Keystone Alliance </h2>
        <div class="panel panel-default">
            
            <div class="panel-heading">
                <center> Here are your Current Tasks! </center>
            </div>

            <div class="panel-body">
                <table class="table table-striped task-table">
                    <thead>
                        <th>Task Description</th>

                        <th>Location</th>
                        <th>Actons</th>
                        <th>&nbsp;</th>
                    </thead>
                    <tbody>
                        @foreach ($tasks as $task)
                        <tr>
                            <td class="table-text"><div>{{ $task->name }} </div></td>
                            <td> {{ $task->Location }} </td>

                            <!-- Task Edit Button-->
                            <td>
                                <form action="/task/{{ $task->id }}" method="POST">
                                    {{ csrf_field() }}
                                    {{ method_field('EDIT') }}

                                    <button type="submit" class="btn btn-info">
                                        <i class="fa glyphicon-edit"></i>  Edit....
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
            <div class="panel-heading">
                New Task
            </div>

            <div class="panel-body">
                <!-- Display Validation Errors -->
                @include('common.errors')

                <!-- New Task Form -->
                <form action="/task" method="POST" class="form-horizontal">
                    {{ csrf_field() }}

                    <!-- Task Name -->
                    <div class="form-group">
                        <label for="task-name" class="col-sm-3 control-label">Task</label>

                        <div class="col-sm-8">
                            <input type="text" name="name" id="task-name" class="form-control" value="{{ old('task') }}">
                        </div>

                    </div>

                    <div class="form-group">
                        <label for="task-name" class="col-sm-3 control-label">Location</label>

                        <div class="col-sm-8">
                            <input type="text" name="location" id="task-location" class="form-control" value="{{ old('task') }}">
                        </div>
                        
                    </div>

                      <div class="form-group">
                        <label for="task-name" class="col-sm-3 control-label">Assign To</label>

                        <div class="col-sm-8">
                            <input type="text" name="Site_ID" id="task-location" class="form-control" value="{{ old('task') }}">
                        </div>
                        
                    </div>

                    <!-- Add Task Button -->
                    <div class="form-group">
                        <div class="col-sm-offset-3 col-sm-8">
                            <button type="submit" class="btn btn-primary">
                                <i class="fa fa-plus"></i>Add Task
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
