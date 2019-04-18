<!DOCTYPE html>
<html>
<head>
	<title>Error</title>
	<link rel="stylesheet" type="text/css" href="{{url('css/bootstrap.css')}}">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<!-- if data already exists in database this page is shown	-->
	<div class="alert alert-danger container">
		<strong>Data already Exists!.please Try again with different data</strong>
		<form action="/redirecttohome">
			<input type="submit" value="Try Again" class="col-xs-10 btn btn-primary">
		</form>
	</div>
</body>
</html>