angular.module('adminVilladon').controller('home', function($scope, $http, homeAPI){

	$scope.msg = '';

	var pegaNomes = function(){
		homeAPI.getNome().then(function(response){
			console.log(response);
		})
	};

	pegaNomes();

});