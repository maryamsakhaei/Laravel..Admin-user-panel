@extends('master/layout')
@section('Shopping')@endsection
@section('content')
<body style="background-color:black;">   
    <div class="container-fulide  adminlogin">
         <div class="row adminlogin" >
                <div class="col-md-12">
                    <p class="word">خوش آمدید</p>
                    <br><br><br><br>
                </div> <!--wellcome -->
                <br><br><br><br>
                <div class= >
                    <div class="col-md-1"></div>
                    <div class="col-md-5">

                        <a href= "{{url('viewuser')}}" class="viewproduct">برای نمایش کاربران کلیک کنید</a>
                    </div>
                    <div class="col-md-5 ">
                        <a href= "{{url('viewproduct')}}" class="viewproduct">برای مشاهده محصولات کلیک کنید</p>
                    </div>
                    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
                    <div class="col-md-1"></div>
                </div>
        </div><!--row main-->
    </div><!--container-->
@endsection    