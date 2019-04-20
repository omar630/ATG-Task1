<!DOCTYPE html>
<html>
	<head>
		<title>Registration</title>
		<meta name="csrf-token" content="{{ csrf_token() }}">
		<link rel="stylesheet" type="text/css" href="{{url('css/bootstrap.css')}}">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	</head>
<body>
	<div class="container" style="padding-top: 50px;">

		<!-- below lines display errors if entered data doesn't satisfies condition	-->
		@if($errors->any())
			<div class="alert alert-danger">
				@foreach($errors->all() as $error)
					<li>{{$error}}</li>
				@endforeach	
			</div>
		@endif

		<div class="col-sm-10 form-group-lg">
			<!-- use <?php if(strpos( $_SERVER['REQUEST_URI'],'/api/') !== false) echo "/api/form" ?> in action to differentiate api and non api urls--> 
			<form  action=<?php if(strpos( $_SERVER['REQUEST_URI'],'/api/') !== false) echo "/api" ?>/submit method="post">
				<input type="hidden" name="_token" value="{{{ csrf_token() }}}"/>
				<div class="form-group row">
					<label>Enter Name:</label>
					<input class="form-control" type="text" name="name" maxlength="50" required="">
					<small class="form-text text-muted">Name should contain only characters and max size 50</small>
				</div>
				<div class="form-group row">
					<label>Enter Email:</label>
					<input class="form-control" type="text" name="email" maxlength="50" required="" placeholder="example@domain.com">
				</div>
				<div class="form-group row ">
					<label>Enter Pin Code:</label>
					<input type="text" class="form-control" name="pincode" maxlength="6" required="">
					<small class="form-text text-muted">Pincode must contain 6 digits of only numbers</small>
				</div>
				<div class="form-group col-lg-10">
					<input type="submit" class="btn btn-primary">
				</div>
			</form>
		</div>
	</div>
</body>
</html>

