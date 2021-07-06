@extends('master/layout')
@section('Shopping')@endsection
@section('content')
<body style="background-color:black;">
<div class="container h-100">
		<div class="d-flex justify-content-center h-100">
			<div class="user_card">
				<div class="d-flex justify-content-center">
					<div class="brand_logo_container">
						<img src="https://cdn.freebiesupply.com/logos/large/2x/pinterest-circle-logo-png-transparent.png" class="brand_logo" alt="Logo">
					</div>
				</div>
				<div class="d-flex justify-content-center form_container">
					<form action="check" method="post">
						@csrf
						<div class="input-group mb-3">
							<div class="input-group-append">
								<a href="#" class="btns social-icon button" data-abc="true"><i class="fa fa-user"></i></a> 
							</div>
							<input type="email" name="email" class="form-control input_user" value="" placeholder="Email">
						</div>
						<div class="input-group mb-2">
							<div class="input-group-append">
								<a href="#" class="btns social-icon button" data-abc="true"><i class="fa fa-key"></i></a> 
							</div>
							<input type="password" name="password" class="form-control input_pass" value="" placeholder="password">
						</div>
						<div class="form-group">
							<div class="custom-control custom-checkbox">
								<input type="checkbox" class="custom-control-input" id="customControlInline">
								<label class="custom-control-label" for="customControlInline">Remember me</label>
							</div>
						</div>
							<div class="d-flex justify-content-center mt-3 login_container">
							<button type="submit" class="btn login_btn ">Login</button>
				   </div>
					</form>
					@if ($errors->any())
						<div class="alert alert-danger">
							<ul>
								@foreach ($errors->all() as $error)
								<li>{{ $error }}</li>
								@endforeach
							</ul>
						</div>
                	@endif
				<div class="mt-4"></div>
			</div>
		</div>
	</div>
@endsection