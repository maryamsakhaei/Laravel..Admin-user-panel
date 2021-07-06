@extends('master/layout')
@section('title')
    Shop
@endsection
@section('content')
<body>
<div class="container ">
  <div class="row bg-insert">
    <div class="col-md-2"></div>
    <div class="col-md-8">
      <br><br>
      <form class="form-horizontal" action="{{url('insert_product_store')}}" method="post" enctype="multipart/form-data">
        @csrf
          <fieldset>
            <!-- Form Name -->
            <legend>PRODUCTS</legend>
            
            <!-- Text input-->
            <div class="form-group">
              <label class="col-md-4 control-label" for="product_name">PRODUCT NAME</label>  
              <div class="col-md-4">
              <input id="product_name" name="name" placeholder="PRODUCT NAME" class="form-control input-md" required="" type="text">
              </div>
            </div>
            <!-- Text input-->
            <div class="form-group">
              <label class="col-md-4 control-label" for="product_name_fr">PRODUCT DESCRIPTION</label>  
              <div class="col-md-4">
              <textarea id="product_name_fr" name="description" placeholder="PRODUCT DESCRIPTION FR" class="form-control input-md" required="" type="text">
              </textarea>
              </div>
            </div>
            <!-- Select Basic -->
            <div class="form-group">
              <label class="col-md-4 control-label" for="product_categorie">PRODUCT PRICE</label>
              <div class="col-md-4">
              <input id="product_name_fr" name="price" placeholder="PRICE" class="form-control input-md" required="" type="number">
              </div>
            </div>
            <!-- Text input-->
            <div class="form-group">
              <label class="col-md-4 control-label" for="product_id">PRODUCT Tags</label>  
              <div class="col-md-4">
              <!-- <input id="product_id" name="tag" placeholder="PRODUCT Tags" class="form-control input-md" type="text" pattern="(#)([a-z])([A-Z]).{8,}"> -->
              <input id="product_id" name="tag" placeholder="PRODUCT Tags" class="form-control input-md currency"  data-symbol="#" type="text" value="">
              </div>
            </div>
            <!-- File Button --> 
            <div class="form-group">
              <label class="col-md-4 control-label" for="filebutton">main_image</label>
              <div class="col-md-4">
                <input id="filebutton" name="photo" class="input-file add-img" type="file">
              </div>
            </div>
            <!-- Category --> 
            <div class="form-group">
              <label class="col-md-4 control-label" for="filebutton">Select Category</label>
              <div class="col-md-4">
                  <select class="form-control" name="categories">
                      <option >Select Category</option>
                      <option value="1">Foods</option>
                      <option value="2">Clothes</option>
                      <option value="3">Home appleince</option>
                      <option value="4">Tools</option>
                  </select>
                  <input type="text" id="product_name_fr" name="categoriesname" placeholder="Category Name" class="form-control input-md category " required="" >
              </div>
                  <div class="form-group">
                  
                  </div>
              </div>
            </div>
            <!-- Button -->
            <div class="form-group">
              <div class="col-md-4">
                <button id="singlebutton" name="singlebutton" class="btn btn-primary">Send</button>
              </div>
              </div>
            </fieldset>
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
    <div class="col-md-2"></div>
  </div><!-- row  -->
</div><!-- container  -->
@endsection
