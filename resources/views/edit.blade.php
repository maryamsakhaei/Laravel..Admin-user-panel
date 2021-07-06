@extends('master/layout')
@section('Shopping')@endsection
@section('content')
<body style="background-color:black;">
<div class="container-fluid">
    <div class="row">   
            <div class="col-md-2"></div>
            <div class="col-md-4">
            @foreach($userlist as $userlist)
            </div>
            <div class="col-md-4">
                <form action="update" method="POST" enctype="multipart/form-data" class="form-edit">
                            @csrf
                            <input type="text" value="{{ $userlist->name }}" name="name"  class="inputs-show"><br>
                            <input type="text" value= "{{ $userlist->email }}" name="email" class="inputs-show" ><br>
                            <input type="number" value="{{ $userlist->password }}" name="password"class="inputs-show">
                            <br>
                            <input type="number" value="{{ $userlist->mobile }}" name="mobile" class="inputs-show">
                            <input type="file" value="" name="photo" class="inputs-show">
                            <input type="submit" name="btn" class="sub-edit">Send
                            <a href= "{{url('show')}}" class="back-edit"> Back </a>
                </form>
            </div>
            @endforeach
            <div class="col-md-2"></div>
    </div><!--row -->
</div>  <!--container -->
@endsection
