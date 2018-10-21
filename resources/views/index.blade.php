<!DOCTYPE html>
<html lang="en" ng-app="getSupplier">
<head>
    <meta charset="utf-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Laravel 5.3 angular crude application</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
     <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>

</head>
<body>
	<div class="container">
		<h2>PUST STUDENT INFORMATION</h2>
		<div ng-controller="SupplierController">
			 <table class="table table-striped">
    <thead>
      <tr>
      	<th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Department</th>
        <!--<th>Faculty</th>-->
        <th>
        	<button type="button" class="btn btn-primary" ng-click="toggle('add',0)">Add new student</button>
        </th>
      </tr>
    </thead>
    <tbody>
      <tr ng-repeat="supplier in suppliers">
        <td>@{{supplier.id}}</td>
        <td>@{{supplier.name}}</td>
        <td>@{{supplier.email}}</td>
        <td>@{{supplier.dept}}</td
        <!--<td>@{{supplier.faculty}}</td>-->
        <td>
        	<button class="btn btn-primary" ng-click="toggle('edit',supplier.id)">Edit</button>
        	<button class="btn btn-primary" ng-click="confirmDelete(supplier.id)">Delete</button>
        </td>
      </tr>
  
    </tbody>
    </table>

   <div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">@{{form_title}}</h4>
      </div>
      <div class="modal-body">
        
   <form class="form-horizontal" name="fromsupplier">
   <div class="form-group">
    <label class="col-sm-3" for="name">Name:</label>
    <div class="col-sm-9">
    <input type="text" class="form-control" name="name" ng-model="supplier.name" ng-required="true" id="name" value="@{{name}}">
    <span ng-show="fromsupplier.name.$invalid && fromsupplier.name.$touched">Name field is required</span>
    </div>
  </div>
  <div class="form-group">
    <label class="col-sm-3" for="email">Email:</label>
    <div class="col-sm-9">
     <input type="text" class="form-control" name="email" ng-model="supplier.email" ng-required="true" id="email" value="@{{email}}">
      <span ng-show="fromsupplier.email.$invalid && fromsupplier.email.$touched">Email field is required</span>
      </div>
  </div>









<!-- <div class="form-group">
    <label class="col-sm-3" for="faculty">Faculty:</label>
    <div class="col-sm-9">
     <input type="text" class="form-control" name="faculty" ng-model="supplier.faculty" ng-required="true" id="email" value="@{{faculty}}">
      <span ng-show="fromsupplier.faculty.$invalid && fromsupplier.faculty.$touched">faculty field is required</span>
      </div>
  </div>

  -->
















  <div class="form-group">
    <label class="col-sm-3" for="dept">Department:</label>
    <div class="col-sm-9">
     <input type="text" class="form-control" name="dept" ng-model="supplier.dept" ng-required="true" id="dept" value="@{{dept}}">
      <span ng-show="fromsupplier.dept.$invalid && fromsupplier.dept.$touched">Department field is required</span>
      </div>
  </div>
</form>


      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" ng-click="save(modalstate,id)" ng-disabled="fromsupplier.$invalid">Save</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>



		</div>
	</div>


    





    <script type="text/javascript" src="{{asset('angular/app.js')}}"></script>
     <script type="text/javascript" src="{{asset('angular/controllers/SupplierController.js')}}"></script>
</body>
</html>