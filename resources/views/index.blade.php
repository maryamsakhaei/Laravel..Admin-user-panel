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
                        </button> <a href="#" class="navbar-brand"><img class="icon-apple" src="{{url('resources/assets/image/logo.PNG')}}"></a>
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
        <!-- end- navigation-->
        <!--  start-Slideshow container -->
        <div class="carousel slide mg20 " id="carousel-example-generic" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carousel-example-generic" data-slide-to="0" class=""></li>
                <li data-target="#carousel-example-generic" data-slide-to="1" class=""></li>
                <li data-target="#carousel-example-generic" data-slide-to="2" class="active"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
                <div class="item">
                    <img alt="First slide [900x500]" data-src="holder.js/900x500/auto/#777:#555/text:First slide" src="{{url('resources/assets/image/holiday-2018-header.jpg')}}" data-holder-rendered="true">
                </div>
                <div class="item">
                    <img alt="Second slide [900x500]" data-src="holder.js/900x500/auto/#666:#444/text:Second slide" src="{{url('resources/assets/image/shutterstock_575822173-640x427.jpg')}}" data-holder-rendered="true">
                </div>
                <div class="item active">
                    <img alt="Third slide [900x500]" data-src="holder.js/900x500/auto/#555:#333/text:Third slide" src="{{url('resources/assets/image/waystosavemoneywhenshopping.jpg')}}" data-holder-rendered="true">
                </div>
            </div>
            <a href="#carousel-example-generic" class="left carousel-control" role="button" data-slide="prev"> <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>  <span class="sr-only">Previous</span>
            </a>
            <a href="#carousel-example-generic" class="right carousel-control" role="button" data-slide="next"> <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>  <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
    <!--===========================================================products============================================-->
    <br><br>
    <div class="container main-gray-box">
        <div class="row">
            <div class="col-md-12 ">
                <div class="col-md-1"></div>
                <div class="col-md-5">
                    <div class="writing">
                        <p class="fi-line">Foods</p>
                    </div>
                    <a href= "{{url('food')}}">
                        <img class="ipad-pic" src="{{url('resources/assets/image/Good_Food_Display_-_NCI_Visuals_Online.jpg')}}">
                    </a>
                </div>
        
                <div class="col-md-1"></div>
                <div  class="col-md-5">
                    <div class="writing">
                        <p class="fi-line">Clothes</p>
                    </div>
                    <a href= "{{url('clothes')}}">
                        <img class="ipad-pic" src="{{url('resources/assets/image/Womens-Clothing.jpg')}}">
                    </a>
                </div>
        </div><!--row product-->
    </div><!--container product-->
    <!--=========================second row product==========================================-->
    <br><br>
    <div class="container main-gray-box">
        <div class="row">
            <div class="col-md-12 ">
                <div class="col-md-1"></div>
                <div class="col-md-5">
                    <div class="writing">
                        <p class="fi-line">Home Applience</p>
                    </div>
                    <a href= "{{url('applience')}}">
                        <img class="ipad-pic" src="{{url('resources/assets/image/depositphotos_378168228-stock-photo-set-home-kitchen-appliances-wall.jpg')}}">
                    </a>
                </div>
        
                <div class="col-md-1"></div>
                <div  class="col-md-5">
                    <div class="writing">
                        <p class="fi-line">Tools</p>
                    </div>
                    <a href= "{{url('tools')}}">
                        <img class="ipad-pic" src="{{url('resources/assets/image/91PNhD2VynL._AC_SL1500_.jpg')}}">
                    </a>
                </div>
        </div><!--row product-->
    </div><!--container product-->
    <br><br>
    <!--======================================footer=============================-->
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
@endsection

