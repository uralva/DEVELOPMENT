<!DOCTYPE html>
<html lang="es_MX" ng-app>
	<head>
		<meta charset="utf-8">
		<title>Angular Tutoriales</title>
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
		</style>
	</head>
	<body>
    <div class="container-fluid">
      <h1>Filtros</h1>
      <h4>Angular JS</h4>
      <p>
      	Filtro de texto : {{"Jorge"}}
      	<br>
      	Filtro de texto : {{"Jorge" | uppercase}}
      	<br>
      	Filtro de texto : {{"Jorge" | lowercase}}
      </p>
      <p>
      	Filtro de texto : {{1350}}
      	<br>
      	Filtro de texto : {{ 1350 | currency}}
      	<br>
      	Filtro de texto : {{ 1350 | currency:'Pesos'}}
      </p>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.9/angular.min.js"></script>
		<script src="https://code.jquery.com/jquery-1.12.3.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>	
	</body>
</html>