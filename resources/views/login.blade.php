@extends('master/layout')
@section('Shopping')@endsection
@section('content')
<body style="background-color:black;">
    <div class="container">
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4 register-form ">
                <br><br><br><br>
                <form action="checklogin" method="get" class="reg-form"> 
                    @csrf
                        <label for="uname" class="reg-lable"><b>Email</b></label><br>
                        <input type="text" placeholder="Enter Email" name="email" class="inputss" required><br><br>
                        <label for="psw" class="reg-lable"><b>Password</b></label>
                        <input type="password" placeholder="Enter Password" name="password" class="inputss"required>
                        <br><br><br>
                        <button type="submit" class="buttons">Login</button>
                        <label class="reg-lable">
                        <input type="checkbox" checked="checked" name="remember"> Remember me
                        </label>
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
            </div>
            <div class="col-md-4"></div>
        </div>
    
@endsection
