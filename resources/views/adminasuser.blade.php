@extends('master/layout')
@section('Shopping')@endsection
@section('content')
<body style="background-color:black;">
<div class="container-fluid">
<!--===================================photo===================-->
    <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-4">
            @foreach($userlist as $userlist)
                <img  src= "{{url('public/images')}}/{{ $userlist -> photo}} " class= "profile-photo" >
                <div class="dropdown">
                    <button class=" btn-secondary dropdown-toggle  Moreinformation" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        More information
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item " href="{{'edit'}}">Edit your profile</a>
                        <a class="dropdown-item " href="#">Another action</a>
                        <a class="dropdown-item " href="#">Something else here</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                    <input type="text" value="{{ $userlist->name }}" name="name"  class="inputs-show" disabled><br>
                    <input type="text" value= "{{ $userlist->email }}" name="email" class="inputs-show" disabled><br>
                    <input type="number" value="{{ $userlist->password }}" name="password"class="inputs-show" disabled>
                    <br>
                    <input type="number" value="{{ $userlist->mobile }}" name="mobile" class="inputs-show" disabled>
                    <a href= "{{url('')}}" class="back-show">Home</a>
            </div>
            @endforeach
            <div class="col-md-2"></div>
    </div><!--row -->
</div>  <!--container -->
@endsection
