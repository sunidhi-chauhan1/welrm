@extends('admin.layouts.app')

@section('content')
<style>
  .marginde{
    margin-top: -27px;
  }
</style>
<!-- main sidebar end -->
<!-- main content start -->
<div class="main-content">
  <div class="row">
    <div class="col-12">
      <div class="panel">
        <div class="panel-header">
          <h5>Add Hotels</h5>

        </div>
        <div class="panel-body">
          <div class="table-filter-option">

          </div>
          @if (session('success'))
          <div class="alert alert-success">
            {{ session('success') }}
          </div>
          @endif

          @if (session('error'))
          <div class="alert alert-danger">
            {{ session('error') }}
          </div>
          @endif
          <form class="forms-sample" method= "POST" action="{{route('admin.addhotel')}}" enctype="multipart/form-data">
            @csrf
            <div class="container">
              <div class="row">
                <div class="col">

                  <div class="form-group row">
                    <label for="exampleInputEmail2">Hotel's Name</label>
                    <div class="form-group row Hotel_owner_content">
                      <input type="text" class="form-control marginde" id="exampleInputMobile" name="hotelName" placeholder="hotelName"></input>
                    </div>                  
                    <label for="exampleInputEmail2">Hotel's Address</label>
                    <div class="form-group row Hotel_owner_content">
                      <input type="text" class="form-control marginde" id="exampleInputMobile" name="hotelAddresss" placeholder="Hotel Addresss"></input>
                    </div>                  
                    <label for="exampleInputEmail2">Owner's Name</label>
                    <div class="form-group row Hotel_owner_content">
                      <input type="text" class="form-control marginde" id="exampleInputMobile" name="OwnerName" placeholder="Owner Name"></input>
                    </div>                  
                    <label for="exampleInputEmail2">Owner's Email</label>
                    <div class="form-group row Hotel_owner_content">
                      <input type="text" class="form-control marginde" id="exampleInputMobile" name="OwnerEmail" placeholder="Owner Email"></input>
                    </div>                  
                    <label for="exampleInputEmail2">Hotel's Contact</label>
                    <div class="form-group row Hotel_owner_content">
                      <input type="text" class="form-control marginde" id="exampleInputMobile" name="telephone" placeholder="hotel telephone"></input>
                    </div>                  
                    <label for="exampleInputEmail2">Hotel's Email</label>
                    <div class="form-group row Hotel_owner_content">
                      <input type="text" class="form-control marginde" id="exampleInputMobile" name="hotelEmail" placeholder="hotelName"></input>
                    </div>                  
                    <label for="exampleInputEmail2">Hotel's latitude(if available)</label>
                    <div class="form-group row Hotel_owner_content">
                      <input type="text" class="form-control marginde" id="exampleInputMobile" name="lat" placeholder="hotelName"></input>
                    </div>                  
                    <label for="exampleInputEmail2">Hotel's longitude(if available)</label>
                    <div class="form-group row Hotel_owner_content">
                      <input type="text" class="form-control marginde" id="exampleInputMobile" name="lon" placeholder="hotelName"></input>
                    </div>                  
                    <label for="exampleInputEmail2">Number of rooms</label>
                    <div class="form-group row Hotel_owner_content">
                        <input type="text" class="form-control marginde" id="exampleInputMobile" name="rooms" placeholder="numbers of rooms"></input>
                      </div>                  
                    </div>
                    <label for="exampleInputEmail2">Price Starting</label>
                    <div class="form-group row Hotel_owner_content">
                        <input type="text" class="form-control marginde" id="exampleInputMobile" name="price" placeholder="price starting at"></input>
                      </div>                  
                    </div>
                  </div>
               
                </div>
              </div><br>


              <div class="row">
                <div class="col-md-6">
                  <div class="file-wrapper">
                    <input type="file" name="upload-img" accept="image/*" />
                    <div class="close-btn">×</div>
                  </div>
                </div>
                <div class="col-md-6">

                  <div class="file-wrapper1">
                    <input type="file" name="upload-img1" accept="image/*" />
                    <div class="close-btn">×</div>
                  </div>
                </div>
              </div>
              <div class="d-flex gap-4 a_btn">
                <button type="submit" class="btn btn-primary mr-2"> Submit </button>
                <button class="btn btn-light close-btn">Cancel</button>
              </div>
          </form>


        </div>
      </div>
    </div>
  </div>




  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>


  <script>
    $('input[name="upload-img"]').on('change', function() {
      readURL(this, $('.file-wrapper')); //Change the image
    });

    $('.close-btn').on('click', function() { //Unset the image
      let file = $('input[name="upload-img"]');
      $('.file-wrapper').css('background-image', 'unset');
      $('.file-wrapper').removeClass('file-set');
      file.replaceWith(file = file.clone(true));
    });

    //FILE
    function readURL(input, obj) {
      if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function(e) {
          obj.css('background-image', 'url(' + e.target.result + ')');
          obj.addClass('file-set');
        }
        reader.readAsDataURL(input.files[0]);
      }
    };


    $('input[name="upload-img1"]').on('change', function() {
      readURL(this, $('.file-wrapper1')); //Change the image
    });

    $('.close-btn').on('click', function() { //Unset the image
      let file = $('input[name="upload-img1"]');
      $('.file-wrapper1').css('background-image', 'unset');
      $('.file-wrapper1').removeClass('file-set');
      file.replaceWith(file = file.clone(true));
    });

    //FILE
    function readURL(input, obj) {
      if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function(e) {
          obj.css('background-image', 'url(' + e.target.result + ')');
          obj.addClass('file-set');
        }
        reader.readAsDataURL(input.files[0]);
      }
    };
  </script>
  @endsection