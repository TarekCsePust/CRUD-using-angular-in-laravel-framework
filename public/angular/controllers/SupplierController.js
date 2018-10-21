app.controller('SupplierController',function($scope,$http,API_URL){
	$http.get(API_URL + "supplier").
	success(function(response){
		$scope.suppliers = response;
	});

	$scope.toggle = function(modalstate,id)
	{
		$scope.modalstate = modalstate;
		switch(modalstate)
		{
			case 'add':
					$scope.form_title = "Add New Supplier";
					break;
		   case 'edit':
		   			$scope.form_title = "Supplier Detail";
		   			$scope.id = id;
		   			$http.get(API_URL+'supplier/' + id).success(
		   				function(response){
		   					$scope.supplier = response;
		   				});
		   			break;
		   default:
		   		break;

		} 
		$('#myModal').modal('show');
	}



	$scope.save = function(modalstate,id)
	{

		var url = API_URL + "supplier";
		if(modalstate === 'edit')
		{
			url+="/" + id;
		}

		$http({
			method:'POST',
			url:url,
			data:$.param($scope.supplier),
			headers: {'Content-Type': 'application/x-www-form-urlencoded'}	
			}

			).success(function(response){
				
				console.log(response);
				$('#myModal').modal('hide');
				$scope.display();
				//location.reload();
			}).error(function(response){
				console.log(response);
				location.reload();
			});
	    }

	$scope.confirmDelete = function(id)
	{
		var isConfirm = confirm('Are you sure?');
		if(isConfirm)
		{
			$http({
				method:'delete',
				url:API_URL + 'supplier/' + id

			}).success(function(data){
				console.log(data);
				$scope.display();
				//location.reload();
			}).error(function(data){
				console.log(data);
				location.reload();
			});
		}
		else
		{
			return false;
		}
	}

	$scope.display = function()
	{
		
		$http.get(API_URL + "supplier").
	success(function(response){
		$scope.suppliers = response;
	});

	}

});