angular.module('adminVilladon').factory('homeAPI', ['$http', function($http){

	var _getNome = function(){
		return $http.get("home/getNome");
	}

	return {
		getNome : _getNome
	};

}])