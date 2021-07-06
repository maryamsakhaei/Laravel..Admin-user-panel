@extends('master/layout')
@section('Shopping')@endsection
@section('content')
<body style="background-color:black;">   
    <!-- start- navigation-->
    <div class="main-gray-box">
        <div class="bs-example" data-example-id="inverted-navbar">
            <nav class="navbar navbar-inverse ">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <button type="button" class="collapsed navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-9" aria-expanded="false"> <span class="sr-only">Toggle navigation</span>  <span class="icon-bar"></span>  <span class="icon-bar"></span>  <span class="icon-bar"></span>
                        </button> 
                            <div class="photo-container">
                                <a href="{{url('checkout')}}">
                                <img src="{{url('resources/assets/image/logo.PNG')}}"alt="Monarch" class="icon-apple "/>
                                <span> Checkout
                                </span>
                                </a>
                            </div>
                    </div>
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-9">
                        <ul class="nav navbar-nav space">
                            <li><a href="# " class="li-mg">&nbsp;&nbsp;&nbsp;&nbsp; </a>
                            </li>
                            <li><a href="# " class="li-mg">&nbsp;&nbsp;&nbsp;&nbsp; </a>
                            </li>
                            <li><a href="# " class="li-mg">&nbsp;&nbsp;&nbsp;&nbsp; </a>
                            </li>
                            <li class="li-mg"><a href="#">Home</a>
                            </li>
                            <li class="li-mg"><a href="#">shop</a>
                            </li>
                            <li><a href="# " class="li-mg">about us</a>
                            </li>
                            <li><a href="# " class="li-mg">&nbsp;&nbsp;&nbsp;&nbsp;</a>
                            </li>
                            <li><a href="# " class="li-mg">&nbsp;&nbsp;&nbsp;&nbsp; </a>
                            </li>
                        </ul>
                        <!--logo-->
                        <!-- <i class="fas fa-user"></i> 
                        <i class="far fa-user"></i> 
                        <i class="fas fa-car"></i> 
                        <i class="fab fa-instagram"></i> -->
                         <!--logo-->
                        <div class="search">
                            <img class="search " src="{{url('resources/assets/image/search1.png')}}">
                        </div>
                    </div>
                </div>
            </nav>
        </div>
        <br><br>
    <!--=================== pasta images=====================================================-->

    <div class="container">
    <div class="row">
    @foreach($name as $model)
        <div class="col-md-4">
        @csrf
            <div class="card">
                  <input type="hidden" value="{{$model ->id}}" name="id" >
                   <input type="hidden" value="{{$model -> name}}" name="name" >
                    <input type="hidden" value="{{$model -> price}}" name="price" >
                    <a href="{{url('detail/'.$model->id)}}">
                     <!--tasvir ke dakhele folder public hast ro farakhani mikone-->
                     <img  src= "{{url('public/image')}}/{{ $model -> photo}} " class="nuts" >
                    </a><br>
                <!-- <img src="/w3images/jeans3.jpg" alt="Denim Jeans" style="width:100%"> -->
                <!-- <h1>{{$model -> name}}</h1> -->
                <br><br>
                <p class="moreinfo"> click for more information .</p>
                <button class="carts" onclick="addcart('{{$model->id}}')">Add to cart <i class="fa fa-cart-plus"></i></button><br><br>
              </div>
        </div>
        @endforeach
        <div class="col-md-4"></div>
        <div class="col-md-4"></div>
    </div><!--row-->
</div><!--container-->
<!--===================footer=====================================================-->
<div class="container">
        <section class="wow fadeIn bg-gray animated" style="visibility: visible; animation-name: fadeIn;">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 center-col text-center"> 
                        <a href="#" class="btns social-icon button" data-abc="true"><i class="fa fa-facebook btn-round"></i></a> 
                        <a href="#" class="btns social-icon button" data-abc="true"><i class="fa fa-instagram"></i></a>
                        <a href="#" class="btns social-icon button" data-abc="true"><i class="fa fa-telegram"></i></a>  
                </div>
            </div>
        </section>
    </div><!--container footer-->
    <br><br><br>
    <img src="{{url('resources/assets/image/icon.PNG')}}" class="icon-l">
    <p class="goodlife">Good Life With Us</p>
    <img src="{{url('resources/assets/image/icon.PNG')}}" class="icon-r">
    <br><br><br>
<script>
function addcart(id){
        $.ajaxSetup({
            headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
        });
        jQuery.ajax({
            url: '{{ url('') }}/addtocart',
            type: 'post',
            data: 'id='+id,
            success: function(response)
            {
              //alert(response);
              alert('محصول با موفقیت به سبد خرید شما اضافه شد');
                //alert(response);

                // if(response==1){

                // }
                // else{
                //     alert( 'کد وارد شد صحیح نمی باشد');
                // }
            },
            error: function(){
                alert('خطایی رخ داده است. لطفا مجدد تلاش کنید');
            }

        });
    }

</script>
    @endsection
