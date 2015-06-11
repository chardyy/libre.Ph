var product = angular.module('ProductCtrl', []);

product.controller('ProductsController', function($scope, CRUD){

	var getProducts = CRUD.all();
	
		getProducts.success(function(data){
			$scope.products = data;
		});

});//end controller