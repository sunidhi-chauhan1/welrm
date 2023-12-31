<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from revel-html.codebasket.xyz/dashboard-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 13 Jul 2023 07:30:40 GMT -->

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welrm Login | Admin</title>

    <link rel="shortcut icon" href="{{ asset('images/Logo.png') }}">
    <link rel="stylesheet" href="{{ asset('admin/dashboad/assets/vendor/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/dashboad/assets/vendor/css/OverlayScrollbars.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/dashboad/assets/vendor/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/dashboad/assets/css/style.css') }}">
    <link rel="stylesheet" id="primaryColor" href="{{ asset('admin/dashboad/assets/css/orange-color.css') }}">
    <link rel="stylesheet" id="rtlStyle" href="#">
</head>

<body class="light-theme">

    <!-- main content start -->
    <div class="main-content login-panel">
        <div class="login-body">
            <div class="top d-flex justify-content-between align-items-center">
                <div class="logo">
                    <img src="{{ asset('images/Logo.png') }}" alt="Logo">
                </div>
                <a href="dashboard-index.html"><i class="fa-duotone fa-house-chimney"></i></a>
            </div>
            <div class="bottom">
                <h3 class="panel-title">Login</h3>
                <div class="login-status">
                    @if ($errors->any())
                        @foreach ($errors->all() as $error)
                            <div class="msg-error alert alert-danger py-2 px-3 rounded mb-20 fs-14"><i
                                    class="fa-regular fa-circle-exclamation me-2"></i> {{ $error }}</div>
                        @endforeach
                    @endif
                    @if (Session::has('error'))
                        <div class="msg-error alert alert-danger py-2 px-3 rounded mb-20 fs-14"><i
                                class="fa-regular fa-circle-exclamation me-2"></i> {{ Session::get('error') }}</div>
                    @endif
                </div>
                <form action="{{ route('admin.login') }}" method="Post">
                    @csrf
                    <div class="input-group mb-30">
                        <span class="input-group-text"><i class="fa-regular fa-user"></i></span>
                        <input type="text" class="form-control" placeholder="Username or email address"
                            name="email">
                    </div>
                    <div class="input-group mb-20">
                        <span class="input-group-text"><i class="fa-regular fa-lock"></i></span>
                        <input type="password" class="form-control rounded-end" placeholder="Password" name="password">
                        <a role="button" class="password-show"><i class="fa-duotone fa-eye"></i></a>
                    </div>
                    <div class="d-flex justify-content-between mb-30">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="loginCheckbox">
                            <label class="form-check-label text-white" for="loginCheckbox">
                                Remember Me
                            </label>
                        </div>
                        {{-- <a href="dashboard-reset-password.html" class="text-white fs-14">Forgot Password?</a> --}}
                    </div>
                    <button type="submit" class="btn btn-primary w-100 login-btn">Sign in</button>
                </form>
                {{-- <div class="other-option">
                    <p>Or continue with</p>
                    <div class="social-box d-flex justify-content-center gap-20">
                        <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                        <a href="#"><i class="fa-brands fa-twitter"></i></a>
                        <a href="#"><i class="fa-brands fa-google"></i></a>
                        <a href="#"><i class="fa-brands fa-instagram"></i></a>
                    </div>
                </div> --}}
            </div>
        </div>

        <!-- footer start -->
        <div class="footer">
            <p>Copyright©
                <script>
                    document.write(new Date().getFullYear())
                </script> All Rights Reserved By <span class="text-primary">Pearl Organisation</span>
            </p>
        </div>
        <!-- footer end -->
    </div>
    <!-- main content end -->

    <script src="dashboad/assets/vendor/js/jquery-3.6.0.min.js"></script>
    <script src="dashboad/assets/vendor/js/jquery.overlayScrollbars.min.js"></script>
    <script src="dashboad/assets/vendor/js/bootstrap.bundle.min.js"></script>
    <script src="dashboad/assets/js/main.js"></script>
</body>

<!-- Mirrored from revel-html.codebasket.xyz/dashboard-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 13 Jul 2023 07:30:40 GMT -->

</html>
