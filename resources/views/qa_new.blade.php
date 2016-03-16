@extends('layouts.app')

@section('content')



<div class="container">

  <h3>Keystone Alliance - CILA Site Q&A Review </h3>

  


  <div class="panel panel-default">

    <div class="panel-heading panel-heading-custom">
      This Review is being edited by :  {{ Auth::user()->name }} 
    </div>

  <br>
    <div class="row" >

      <div class= "col-lg-6">

   <form action="/task" method="POST" class="form-horizontal">
                   

                    <!-- Task Name -->
                    <div class="form-group">
                        <label for="task-name" class="col-sm-3 control-label">Review Date</label>
                        <div class="col-sm-4">
                            <input type="text" name="name" id="task-name" class="form-control"  >
                        </div>

                    </div>

                      <div class="form-group">
                        <label for="location" class="col-sm-3 control-label">Reviewers</label>
                        <div class="col-sm-8">
                            <input type="text" name="location" id="task-location" class="form-control" >
                        </div>
                    </div>
                      <div class="form-group">
                        <label for="location" class="col-sm-3 control-label">Notifications</label>
                        <div class="col-sm-8">
                            <input type="text" name="location" id="task-location" class="form-control" >
                        </div>
                    </div>


                    

                    <div class="form-group">
                        <label for="notes" class="control-label col-sm-3 "><strong> Strengths</strong> </label>
                        <div class="col-sm-8">
                            <textarea rows="5" class="form-control" name="notes"  placeholder="Describe Strengths HERE! "></textarea>
                        </div>
                    </div>
             




</form>

   </div>


         <div class= "col-lg-6">

   <form action="/task" method="POST" class="form-horizontal">
                   

                    <!-- Task Name -->
                    <div class="form-group">
                        <label for="task-name" class="col-sm-3 control-label">Correction Date</label>
                        <div class="col-sm-4">
                            <input type="text" name="name" id="task-name" class="form-control"  >
                        </div>

                    </div>

                      <div class="form-group">
                        <label for="location" class="col-sm-3 control-label">Site Coordinator</label>
                        <div class="col-sm-8">
                            <input type="text" name="location" id="task-location" class="form-control" >
                        </div>
                    </div>
                      <div class="form-group">
                        <label for="location" class="col-sm-3 control-label">Correction Signature Date</label>
                        <div class="col-sm-8">
                            <input type="text" name="location" id="task-location" class="form-control" >
                        </div>
                    </div>

                 

                        <div class="form-group">
                        <label for="status" class="col-sm-3 control-label"><b>Status</b> </label>   
                        <div class="col-sm-8">
                            <select name ="status" class="form-control"  >
                              <option>Choose One...</option>
                              <option>Scheduled</option>
                              <option>Completed</option>
                              <option>Pending</option>
                             
                             </select>
                        </div>
                    </div>


                    

                    <div class="form-group">
                        <label for="notes" class="control-label col-sm-3 "><strong> Challenges</strong> </label>
                        <div class="col-sm-8">
                            <textarea rows="5" class="form-control" name="notes"  placeholder="Enter Challenges HERE! "></textarea>
                        </div>
                    </div>
             




</form>

   </div>


  </div>


    <div class="panel-group" id="accordion">
      <div class="panel panel-default">
        <div class="panel-heading">
          <h4 class="panel-title">
            <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">Safety and Licensure</a>
          </h4>
        </div>
        <div id="collapse1" class="panel-collapse collapse in">
          <div class="panel-body">

            <div class="row">
              <div class="panel-body">

                <ul class="nav nav-tabs">
                  <li role="presentation" class="active"><a href="#">Client Documentation</a></li>
                  <li role="presentation"><a href="#">Medication</a></li>
                  <li role="presentation"><a href="#">Manuals</a></li>
                  <li role="presentation"><a href="#">Emergency Supplies</a></li>
                  <li role="presentation"><a href="#">Water</a></li>

                  <li role="presentation"><a href="#">Lincensure</a></li>
                  <li role="presentation"><a href="#">Other</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="panel panel-default">
            <div class="panel-heading">
              <h4 class="panel-title">
                <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">Cleanliness and Order</a>
              </h4>
            </div>
            <div id="collapse2" class="panel-collapse collapse">
              <div class="panel-body">
                <div class="row">
                  <div class="panel-body">

                    <ul class="nav nav-tabs">
                      <li role="presentation" class="active"><a href="#">General Cleanliness and Order</a></li>
                      <li role="presentation"><a href="#">Kitchen</a></li>
                      <li role="presentation"><a href="#">Bedrooms</a></li>
                      <li role="presentation"><a href="#">Bathrooms</a></li>
                      <li role="presentation"><a href="#">Laundry and Storage</a></li>

                      <li role="presentation"><a href="#">Exterior and Garage</a></li>
                      <li role="presentation"><a href="#">Other</a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div> 
      </div>

    </div>
  </div>

</div>



@endsection









