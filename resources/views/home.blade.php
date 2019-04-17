<!DOCTYPE html>
<html>
<head>
	<title>Registration</title>
	<link rel="stylesheet" type="text/css" href="{{url('css/bootstrap.css')}}">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<div class="container">
		<!-- below lines display errors if entered data doesn't satisfies condition	-->
	@if($errors->any())
		<div class="alert alert-danger">
			@foreach($errors->all() as $error)
				<li>{{$error}}</li>
			@endforeach	
		</div>
	@endif
	<form  action="/submit" method="post">
		<input type="hidden" name="_token" value="{{{ csrf_token() }}}"/>
	<div class="form-group col-lg-2">
		<label>Enter Name:</label>
		<input type="text" name="name" maxlength="50" required="">
	</div>
	<div class="form-group col-lg-2">
		<label>Enter Pin Code:</label>
		<input type="text" name="pincode" maxlength="6" required="">
	</div>
	<div class="form-group col-lg-10">
		<input type="submit"class="btn btn-primary" >
	</div>
	</form>
</div>
</body>
</html>