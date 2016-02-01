<!DOCTYPE html>
<html ng-app="adminVilladon">
<head>
	<title>Home</title>
	<script type="text/javascript" src="assets/js/libs/angular.min.js"></script>
	<script type="text/javascript" src="assets/js/libs/angular-cookies.js"></script>
	<script type="text/javascript" src="assets/js/libs/angular-route.js"></script>
	<script type="text/javascript" src="assets/js/libs/jquery-2.2.0.min.js"></script>
	<script type="text/javascript" src="assets/js/libs/bootstrap.min.js"></script>
	
	<!-- Angular Things -->
	<script type="text/javascript" src="assets/js/app.js"></script>
	
	<script type="text/javascript" src="assets/js/controllers/home.js"></script>
	<script type="text/javascript" src="assets/js/services/home.js"></script>

	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>
<body>


	<div class="container" ng-controller="home">
		
	 	<h1>
			{{msg}}
	 	</h1>

	</div>


</body>
</html>