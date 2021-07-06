@extends('master/layout')
@section('Shopping')@endsection 
@section('content')
<body style="background-color:black;">   
    <div class="container-fluid adminlogin">
        <div class="row" >
            <div class="col-md-4"></div> 
            <div class="col-md-4"> <p class="word">Wellcome </p>  </div>
            <div class="col-md-4"></div>
        </div><!--row main-->
<!--======================================================== second part====================================-->
        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-10  bg-color">
                <div class="row">
                <div class="col-md-2">
                    <div class="uls">
                    <ul class="ul-propertise">
                        <li class="li-propertise"><a href= "{{url('')}}" class="admin-list-box">Visit the site</a></li>
                        <li class="li-propertise"><a href= "{{url('insertproduct')}}" class="admin-list-box">Insert_products</a></li>
                        <li class="li-propertise"><a href= "{{url('viewuser')}}" class="admin-list-box">View_User</a></li>
                        <li class="li-propertise"><a href= "{{url('viewproduct')}}" class="admin-list-box">View_product</a></li>
                        <li class="li-propertise"><a href="{{url('removeuser')}}" class="admin-list-box">Remove_user</a></li>
                        <li class="li-propertise"><a href="remove.php" class="admin-list-box"> Sign Out</a></li>
                    </ul>         
                    </div>
                </div>
                <div class="col-md-7"></div>
                <div class="col-md-3"></div>
                </div><!--internal-10-row-->
            </div><!--10-row-->
            <div class="col-md-1"></div>
        </div><!--row second part-->        
    </div><!--container-->
@endsection    
