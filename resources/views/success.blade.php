<!DOCTYPE html>
<html>
<head>
	<title>Success</title>
	<link rel="stylesheet" type="text/css" href="{{url('css/bootstrap.css')}}">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<!-- if data is succesfully inserted in database this page is shown	-->
	<div class="alert alert-success container">
		<strong>submitted succesfuly</strong>
		<!-- use <?php if(strpos( $_SERVER['REQUEST_URI'],'/api/') !== false) echo "/api/form" ?> in action to differentiate api and non api urls--> 
		<form method="get" action="redirecttohome">
			<input type="submit" value="Enter Another data" class="col-xs-10 btn btn-primary">
		</form>
	</div>
</body>
</html>