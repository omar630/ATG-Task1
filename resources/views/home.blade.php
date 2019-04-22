<!DOCTYPE html>
<html>
	<head>
		<title>Registration</title>
		<meta name="csrf-token" content="{{ csrf_token() }}">
		<link rel="stylesheet" type="text/css" href="{{url('css/bootstrap.css')}}">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		 <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
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
			<form  action="javascript:void(0)" method="post" class="forms">
				<input id="token" type="hidden" name="_token" value="{{{ csrf_token() }}}"/>
				<div class="form-group row">
					<label>Enter Name:</label>
					<input class="form-control" type="text" name="name" maxlength="50" required=""  id="name">
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
					<input type="submit" class="btn btn-primary btn-submit" id="submit">
				</div>
			</form>
		</div>
	</div>
	<div id="ajax-content"></div>
</body>
<script type="text/javascript">
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $("form").submit(function(e){
        e.preventDefault();
        $(".btn-submit").prop('disabled', true);
        $(".btn-submit").val('sending...');
        var name = $("input[name=name]").val();
        var email = $("input[name=email]").val();
        var pincode = $("input[name=pincode]").val();
        $.ajax({
           type:"POST",
           url:'/api/submit',
           data:{name:name, pincode:pincode, email:email},
           success:function(data){
           	 // alert(data.html);
              $('#ajax-content').html(data.html);
              $(".btn-submit").prop('disabled', false);
              $(".btn-submit").val('submit');
              $(".forms")[0].reset();
           }
        });
	});
</script>
</html>
