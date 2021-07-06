@extends('master/layout')
@section('Shopping')@endsection
@section('content')
<body style="background-color:black;">   
   <div class="container">
    <div class="row">
    <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-4">
                <p class="detail-text">Description</p>
                <br>
                <p class="detail">{{$name -> name }} </p>
                <p class="detail">{{$name -> description }} </p>
                <p class="details"> price: &nbsp;{{$name -> price }} Euro </p>
                <p class="detail">{{$name -> tag }} </p>
                <br>
                <br>
                <a href= "{{url('food')}}" class="back">Back</a>
            </div>
            <div class="col-md-2"></div>
            <div class="col-md-4">
            <img  class="detail-img"  src="{{url('public/image')}}/{{ $name -> photo}}">
            </div>
            <div class="col-md-1"></div>
        </div>
    </div><!--row-->
</div><!--container-->
@endsection

