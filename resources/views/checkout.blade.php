@extends('master/layout')
@section('Shopping')@endsection
@section('content')
<body style="background-color:black;"> 
<div class="container">
    <div class="row">
        <div class="col-md-2"></div>
            <div class="col-md-8">
            <h4>Cart <span class="price" style="color:black"><i class="fa fa-shopping-cart"></i> <b></b></span></h4>
            @foreach($product  as $key=>$value)
            <?php
           $product=product::find($key)
           ?>
            <p class="orders"> Name:&nbsp;&nbsp;{{$value}}</p>
            <p class="orders">price:&nbsp;&nbsp;{{$value}}</p>
			<p class="orders">========================</p>
            @endforeach
			<hr>
            <p class="orders">Total</p>
            
        </div><!--8-->
        <div class="col-md-2"></div>
    </div><!--row-->
</div><!--container-->
<!--============================================================part 2====================================-->  
<div class="container">
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <div class="creditCardForm">    
            <div class="heading">
            <h1>Confirm Purchase</h1>
            </div>
            <div class="payment">
                <form action="track" method="POST">
                    @csrf
                    <div class="form-group owner">
                        <label for="owner" class="lable-l">Owner</label>
                        <input type="text" class="form-control" id="owner" name="owner">
                    </div>
                    <div class="form-group CVV">
                        <label for="cvv" class="lable-l">CVV</label>
                        <input type="number" class="form-control" id="cvv" name="cvv">
                    </div>
                    <div class="form-group" id="card-number-field">
                        <label for="cardNumber" class="lable-l">Card Number</label>
                        <input type="number" class="form-control" id="cardNumber" name="cart_number">
                    </div>
                    <div class="form-group" id="expiration-date">
                        <label class="lable-l">Expiration Date</label>
                        <select name="expaire_month" class="exp-tbl">
                            <option value="01">January</option>
                            <option value="02">February </option>
                            <option value="03">March</option>
                            <option value="04">April</option>
                            <option value="05">May</option>
                            <option value="06">June</option>
                            <option value="07">July</option>
                            <option value="08">August</option>
                            <option value="09">September</option>
                            <option value="10">October</option>
                            <option value="11">November</option>
                            <option value="12">December</option>
                        </select>
                        <select name="expaire_year" class="exp-tbl">
                            <option value="2016"> 2016</option>
                            <option value="2017"> 2017</option>
                            <option value="2018"> 2018</option>
                            <option value="2019"> 2019</option>
                            <option value="2020"> 2020</option>
                            <option value="2021"> 2021</option>
                        </select>
                    </div>
                    <div class="form-group" id="credit_cards">
                        <img src="{{url('resources/assets/image/visa.png')}}"  id="visa" class="payment-img">
                        <img src="{{url('resources/assets/image/master.png')}}"id="mastercard" class="payment-img">
                        <img src="{{url('resources/assets/image/amex.png')}}" id="amex" class="payment-img">
                    </div>
                    <div class="form-group" id="pay-now">
                        <button type="submit" class="btn btn-default btn-payment" id="confirm-purchase">Confirm</button>
                    </div>
                </form>
        </div><!--8-->
        <div class="col-md-2"></div>
    </div><!--row-->
</div><!--container-->
@endsection