@extends('admin.layouts.app')

@section('content')
<style>
  .a_btn {
    margin-top: 30px;
  }

  .file-wrapper,
  .file-wrapper1 {
    width: 200px;
    height: 200px;
    border: 10px solid #c80000;
    position: relative;
    margin: auto;
    margin-top: 25px;
    border-radius: 35px;
  }

  .file-wrapper:after,
  .file-wrapper1:after {
    content: '+';
    position: absolute;
    top: 0;
    bottom: 0;
    left: 0;
    right: 0;
    margin: auto;
    width: max-content;
    height: max-content;
    display: block;
    max-height: 120px;
    font-size: 70px;
    font-weight: bolder;
    color: #c80000;
  }

  .file-wrapper:before,
  .file-wrapper1:before {
    content: 'UPLOAD IMAGE RATIO 5:5';
    display: block;
    position: absolute;
    left: 0;
    right: 0;
    margin: auto;
    bottom: 35px;
    width: max-content;
    height: max-content;
    font-size: 0.75em;
    color: gray;
  }

  .file-wrapper:hover:after,
  .file-wrapper1:hover:after {
    font-size: 73px;
  }

  .file-wrapper .close-btn,
  .file-wrapper1 .close-btn {
    display: none;
  }

  input[type="file"] {
    position: absolute;
    width: 100%;
    height: 100%;
    opacity: 0;
    z-index: 99999;
    cursor: pointer;
  }

  .file-set {
    background-size: cover;
    background-repeat: no-repeat;
    color: transparent;
    padding: 10px;
    border-width: 0px;
  }

  .file-set:hover {
    transition: all 0.5s ease-out;
    filter: brightness(110%);
  }

  .file-set:before {
    color: transparent;
  }

  .file-set:after {
    color: transparent;
  }

  .file-set .close-btn {
    position: absolute;
    width: 35px;
    height: 35px;
    display: block;
    background: #000;
    color: #fff;
    top: 0;
    right: 0;
    font-size: 25px;
    text-align: center;
    line-height: 1.5;
    cursor: pointer;
    opacity: 0.8;
  }

  .file-set>input {
    pointer-events: none;
  }


  .A_input {
    display: initial !important;
    padding-inline: 14px;
  }

  .A_input input {
    height: 51px;
  }

  .panel-header h5 {
    margin-bottom: 0;
    font-weight: 600;
  }

  .Hotel_owner_content textarea {
    min-height: 200px;
  }
</style>
<!-- main sidebar end -->
<!-- main content start -->
<div class="main-content">
  <div class="row">
    <div class="col-12">
      <div class="panel">
        <div class="panel-header">
          <h5>Contact Us</h5>

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
          <form class="forms-sample">
            <div class="container">
              <div class="row">
                <div class="col">
                  1 of 2
                  <div class="form-group row">
                    <label for="exampleInputEmail2">Intro Content</label>
                    <div class="form-group row Hotel_owner_content">
                      <textarea type="text" class="form-control" id="exampleInputMobile" name="content" placeholder="intro content"></textarea>
                    </div>
                    <label for="exampleInputEmail2">HOTEL OWNER</label>
                    <div class="form-group row Hotel_owner_content">
                      <textarea type="text" class="form-control" id="exampleInputMobile" name="hotelowner" placeholder="intro content"></textarea>
                    </div>
                    <div class="form-group row Hotel_owner_content">
                      <label for="exampleInputMobile" class="col-sm-3 col-form-label">ONBOARD CUSTOMER</label>
                      <textarea type="text" class="form-control" id="exampleInputMobile" name="customer" placeholder="intro content"></textarea>
                    </div>

                  </div>
                  <div class="row">

                    <div class="form-group col-md-6 A_input">
                      <label for="exampleInputEmail2" class=" col-form-label">Email</label>
                      <input type="email" class="form-control" id="exampleInputEmail2" placeholder="Email" />
                    </div>
                    <div class="form-group col-md-6 A_input">
                      <label for="exampleInputMobile" class=" col-form-label">Mobile</label>

                      <input type="text" class="form-control" id="exampleInputMobile" placeholder="Mobile number" />

                    </div>
                    <div class="form-group col-md-6 A_input">
                      <label for="exampleInputPassword2" class="col-form-label">Password</label>

                      <input type="password" class="form-control" id="exampleInputPassword2" placeholder="Password" />

                    </div>
                    <div class="form-group col-md-6 A_input">
                      <label for="exampleInputConfirmPassword2" class="col-form-label">Re Password</label>

                      <input type="password" class="form-control" id="exampleInputConfirmPassword2" placeholder="Password" />

                    </div>
                    <div class="form-check form-check-flat form-check-primary mt-3">
                      <label class="form-check-label d-flex gap-3">
                        <input type="checkbox" class="form-check-input" /> Remember me </label>
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
                <button class="btn btn-light">Cancel</button>
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