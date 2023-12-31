<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Welrm</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />

    <link rel="stylesheet" href="https://www.jqueryscript.net/css/jquerysctipttop.css" />
    <link rel="stylesheet" href="css/jquery.ccpicker.css" />

    <!--! Date Picker  -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.13/css/intlTelInput.css" />
    <!-- Date Picker  -->

    <!-- !CSS  -->
    <link rel="stylesheet" href="{{asset('style.css')}}" />
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"
        integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- CSS  -->
</head>

<body>

    @include('front.layouts.header')

    @yield('content')

    @include('front.layouts.footer')
    @yield('js')

    <!-- ! CDNS  -->
    <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <script
     type="module"
     src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"
   ></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
    <script src="js/jquery.ccpicker.js" type="text/javascript"></script>
    {{-- <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css" rel="stylesheet"> --}}

    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    <script>
        $('#phoneField3').CcPicker({
            countryCode: 'in'
        });
    </script>
   


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
@if (session()->has('signup') || session()->has('login-error'))
    <script>
        $(function() {

            // $('#Sign_modal').modal('show');
        });
    </script>
@endif

<script src="https://kit.fontawesome.com/72aeadbf11.js" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- ! Data Picker Cdns -->
    <script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.13/js/intlTelInput-jquery.min.js"></script>
    <!-- ! Data Picker Cdns -->

    <script>
        $('#mobile_code').intlTelInput({
            initialCountry: 'in',
            separateDialCode: true,
        });
        $('#mobile_code_1').intlTelInput({
            initialCountry: 'in',
            separateDialCode: true,
        });
    </script>
    <!-- ! CDNS  -->

    <script>
        @if (Session::has('success'))
            toastr.options = {
                "closeButton": true,
                "progressBar": true
            }
            toastr.success("{{ session('success') }}");
        @endif
        @if (Session::has('error'))
            toastr.options = {
                "closeButton": true,
                "progressBar": true
            }
            toastr.error("{{ session('error') }}");
        @endif
        @if ($errors->any())
            @foreach ($errors->all() as $error)
                toastr.options = {
                    "closeButton": true,
                    "progressBar": true
                }
                toastr.warning("{{ $error }}");
            @endforeach
        @endif
    </script>
    <script src="./js/script.js"></script>

    
    
</body>

</html>
