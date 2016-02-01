angular.module('adminVilladon').factory('homeAPI', ['$http', function($http){

	var _getNome = function(){
		return $http.get("home/get");
	}

	return {
		getNome : _getNome
	};

}])