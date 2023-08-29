<!-- ! Header section  -->
<div class="header_topbar">
    <div class="container">
        <div class="topbar_info">
            <i class="fa-solid fa-phone"></i>
            <a href="tel:+9195842-90842">+91-9584290842</a>
            <a href="mailto:Book@hotel.com">info@welrm.com</a>
        </div>

        <div class="login_sign">
            <!-- <div class="user">
            <img src="{{asset('./images/User.png" alt="" />
          </div> -->

            <div class="login_sign_btn">
                @if(Auth::user())
                <?php
                $user = DB::table('users')->where('id', Auth::user()->id)->first(); ?>
                <div class="Ham_container">
                    <a href="#" class="ham_icon">
                        <img src="{{asset('./images/Hamburger.svg')}}" alt="" class="Hamburger_img">
                    </a>

                    <div class="Sign_in_box" id="initial_sign">
                        <div class="Person_info">
                            <div class="person_box">

                                <!-- <div class="User_img"><img src="{{asset('./images/UserProfile.png')}}" alt=""></div> -->
                                <div class="person_name_box">
                                    <p>{{$user->fullName}}</p>
                                    <!-- <span>Image Adress (Jpeg image)</span> -->
                                </div>
                            </div>
                            <ul class="Res_navlist">
                                <li><a href="{{route('index')}}">Home</a></li>
                                <li><a href="#" data-bs-toggle="modal" data-bs-target="#MyProfile" id="MyProfile_btn">My Profile</a></li>
                                <li><a href="{{route('about')}}">About Us</a></li>
                                <li><a href="{{route('hotel-details')}}">Hotels</a></li>
                                <li><a href="{{route('blog')}}">Our Blogs</a></li>
                                <li><a href="{{route('show_wishlist')}}">Wishlist</a></li>
                                <li><a href="{{route('usersrooms')}}">Booking</a></li>
                                <!-- <li> <a data-bs-toggle="modal" data-bs-target="#exampleModal">Logout</a></li> -->

                                <li><a href="#">Rating</a></li>
                                <li class="our_team_list"><a href="#">Our Terms <ion-icon name="chevron-down-circle-outline"></ion-icon></a>
                                    <div class="Our_list_dropdown">
                                        <ul>
                                            <li><a href="#">Terms and Conditions</a></li>
                                            <li><a href="#">Privacy Policy</a></li>
                                        </ul>
                                    </div>
                                </li>

                            </ul>

                            <div class="Logout">
                                <a href="{{route('logout')}}" class=" btn button logout_a">Logout</a>
                            </div>
                        </div>

                    </div>
                </div>





                @else
                <button data-bs-toggle="modal" data-bs-target="#Signup_modal">
                    Create Account
                </button>
                <a href="#" class="Login_pop_btn Log_sign" data-bs-toggle="modal" data-bs-target="#Sign_modal">Sign In</a>
                <div class="Ham_container">
                    <a href="#" class="ham_icon">
                        <img src="{{asset('./images/Hamburger.svg')}}" alt="" class="Hamburger_img">
                    </a>

                    <div class="Sign_in_box" id="initial_sign">
                        <p>Sign In</p>
                        <div class="list_property">
                            <a href="#" class="Login_pop_btn Log_sign" data-bs-toggle="modal" data-bs-target="#Sign_modal">Sign In</a>
                            <a href="#" class="Create_acc" data-bs-toggle="modal" data-bs-target="#Signup_modal">Create Account</a>
                            <button>List Your Property</button>
                        </div>
                    </div>
                </div>
                @endif
            </div>
        </div>
    </div>
</div>


<div class="modal fade" id="Sign_modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog sign_modal_dialog">
        <div class="modal-content">
            <div class="modal-header">
                <div>
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Sign In</h1>
                    <p class="sign_para">
                        For security, please sign in to access your information
                    </p>
                </div>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="Sign_pop">
                    <div class="Sign_box">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="sign">
                                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link nav_Email active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home-tab-pane" type="button" role="tab" aria-controls="home-tab-pane" aria-selected="true">
                                                Email
                                            </button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile-tab-pane" type="button" role="tab" aria-controls="profile-tab-pane" aria-selected="false">
                                                Mobile
                                            </button>
                                        </li>
                                    </ul>
                                    <div class="tab-content" id="myTabContent">
                                        <div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab" tabindex="0">
                                            <div class="Forgetpassword_content setpassword sign_email">
                                                <form action="{{ route('login') }}" method="POST">
                                                    @csrf
                                                    <div class="Password_input_1">
                                                        @if ($errors->any())
                                                        <div class="alert alert-danger">
                                                            <ul>
                                                                @foreach ($errors->all() as $error)
                                                                <li>{{ $error }}</li>
                                                                @endforeach
                                                            </ul>
                                                        </div>
                                                        @endif
                                                        <label for="">Email Address</label>
                                                        <div class="Name_input">
                                                            <input name="email" type="email" placeholder="Enter Your Email Address" />
                                                        </div>
                                                    </div>
                                                    <div class="Password_input_1 pass_ipnut">
                                                        <label for="">Password</label>
                                                        <div class="Name_input">
                                                            <input name="password" type="password" placeholder="Enter Your Password" />
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <button type="submit" class="Sign_btn" id="Sign_in_btn">Sign In</button>
                                                        <div class="Sign_btn_labels">
                                                            <a href="#" data-bs-target="#Signup_modal" data-bs-toggle="modal">Create Account</a>
                                                            <a href="https://test.pearl-developer.com/welrm/public/forgetpassword.html">Forgot Password</a>
                                                        </div>
                                                    </div>
                                                </form>
                                                <div class="Log_with">
                                                    <div class="log">
                                                        <span>Or Log in with</span>
                                                    </div>
                                                    <div class="log_w_link">
                                                        <a href="{{route('redirectToGoogleDevs')}}">
                                                            <ion-icon name="logo-google" role="img" class="md hydrated"></ion-icon>
                                                        </a>
                                                        <a href="{{route('redirectTofacebook')}}">
                                                            <ion-icon name="logo-facebook" role="img" class="md hydrated"></ion-icon>
                                                        </a>
                                                        <a href="#">
                                                            <ion-icon name="logo-apple" role="img" class="md hydrated"></ion-icon>
                                                        </a>
                                                    </div>

                                                    <p class="Privacy_policy_para">
                                                        By logging in, I understand &amp; agree to
                                                        <span><a href="https://test.pearl-developer.com/welrm/public/terms-condition">Welrm Terms & Conditions</a></span> of use and
                                                        <span><a href="https://test.pearl-developer.com/welrm/public/privacy">Privacy Policy</a></span>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="profile-tab-pane" role="tabpanel" aria-labelledby="profile-tab" tabindex="0">
                                            <form action="{{ route('phone-login') }}" method="POST">
                                                @csrf
                                                <div class="Forgetpassword_content setpassword sign_email">
                                                    <div>
                                                        <label for="" class="Mobile_num">Mobile Number</label>
                                                        <div class="Flag_input">
                                                            <div>
                                                                <input type="text" id="mobile_code" />
                                                            </div>
                                                            <div class="Password_input_1">
                                                                <div class="Name_input">
                                                                    <input name="mobile" type="number" placeholder="Enter Your Mobile Number" />
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="Password_input_1">
                                                        <label for="">Password</label>
                                                        <div class="Name_input">
                                                            <input name="password" type="password" placeholder="Enter Your Password" />
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <button class="Sign_btn">Sign In</button>
                                                        <div class="Sign_btn_labels">
                                                            <a href="#">Create Account</a>
                                                            <a href="#">Forgot Password</a>
                                                        </div>
                                                    </div>
                                                    <div class="Log_with">
                                                        <div class="log">
                                                            <span>Or Log in with</span>
                                                        </div>
                                                        <div class="log_w_link">
                                                            <a href="{{route('redirectToGoogleDevs')}}">
                                                                <ion-icon name="logo-google" role="img" class="md hydrated"></ion-icon>
                                                            </a>
                                                            <a href="{{route('redirectTofacebook')}}">
                                                                <ion-icon name="logo-facebook" role="img" class="md hydrated"></ion-icon>
                                                            </a>
                                                            <a href="#">
                                                                <ion-icon name="logo-apple" role="img" class="md hydrated"></ion-icon>
                                                            </a>
                                                        </div>

                                                        <p class="Privacy_policy_para">
                                                            By logging in, I understand &amp; agree to
                                                            <span><a href="https://test.pearl-developer.com/welrm/public/terms-condition">Welrm Terms & Conditions</a></span> of use and
                                                            <span><a href="https://test.pearl-developer.com/welrm/public/privacy">Privacy Policy</a></span>
                                                        </p>
                                                    </div>
                                                </div>
                                        </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="sign_in_right_banner">
                                    <img src="{{asset('./images/SignBanner.png')}}" alt="" />
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Button trigger modal -->
<!-- Modal -->



<div class="modal fade" id="Signup_modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Sign up</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="Sign_pop">
                    <form action="{{ route('signup') }}" method="POST">
                        @csrf
                        <div class="Sign_box">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="Forgetpassword_content setpassword sign_email sign">
                                        <div class="Password_input_1">
                                            <label for="">Full Name</label>
                                            <div class="Name_input">
                                                <input name="fullName" type="text" placeholder="Full Name" />
                                            </div>
                                        </div>
                                        <div>
                                            <label for="" class="Mobile_num">Mobile Number</label>
                                            <div class="Flag_input">
                                                <div>
                                                    <input name="countryCode" type="text" id="mobile_code_1" />
                                                </div>
                                                <div class="Password_input_1">
                                                    <div class="Name_input">
                                                        <input name="mobile" id="phone" type="number" placeholder="Enter Your Mobile Number" />
                                                        <input name="otp" class="d-none" id="phone" type="number" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="Password_input_1">
                                            <label for="">Email </label>
                                            <div class="Name_input">
                                                <input name="email" type="email " placeholder="Email" />
                                            </div>
                                        </div>
                                        <div class="Password_input_1">
                                            <label for="">Password</label>
                                            <div class="Name_input">
                                                <input name="password" type="password" placeholder="Password" />
                                            </div>
                                        </div>
                                        <div class="Password_input_1">
                                            <label for="">Confirm Password</label>
                                            <div class="Name_input">
                                                <input name="password_confirmation" type="password" placeholder="Confirm Password" />
                                            </div>
                                        </div>
                                        <div>
                                            <button type="submit" class="Sign_btn">Sign up</button>
                                            <div class="Sign_btn_labels_sign_up">
                                                <span>Already a member? <a href="#" class="Login_pop_btn Log_sign" data-bs-toggle="modal" data-bs-target="#Sign_modal">Sign in</a></span>
                                            </div>
                                        </div>
                                        <div class="Log_with">
                                            <div class="log">
                                                <span>Or Signup with</span>
                                            </div>
                                            <div class="log_w_link">
                                                <a href="{{route('redirectToGoogleDevs')}}">
                                                    <ion-icon name="logo-google" role="img" class="md hydrated"></ion-icon>
                                                </a>
                                                <a href="{{route('redirectTofacebook')}}">
                                                    <ion-icon name="logo-facebook" role="img" class="md hydrated"></ion-icon>
                                                </a>
                                                <a href="#">
                                                    <ion-icon name="logo-apple" role="img" class="md hydrated"></ion-icon>
                                                </a>
                                            </div>

                                            <p class="Privacy_policy_para">
                                                By logging in, I understand &amp; agree to
                                                <span><a href="https://test.pearl-developer.com/welrm/public/terms-condition">Welrm Terms & Conditions</a></span> of use and
                                                <span><a href="https://test.pearl-developer.com/welrm/public/privacy">Privacy Policy</a></span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="sign_in_right_banner">
                                        <img src="{{asset('./images/SignBanner.png')}}" alt="" />
                                    </div>

                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="main_header">
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light text-white">
            <div class="container-fluid Nav_inside_container">
                <a class="navbar-brand" href="https://test.pearl-developer.com/welrm/public/"><img src="{{asset('./images/Logo.png')}}" alt="" /></a>
                <!-- <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> -->
                <!-- <span class="navbar-toggler-icon"></span> -->
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="{{ route('index') }}">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('about') }}">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('hotel-details') }}">Hotels</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Our Terms
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li>
                                    <a class="dropdown-item" href="{{ route('privacy') }}">
                                        Privacy policy</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="{{ route('terms-condition') }}">Terms and
                                        Conditions</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('blog') }}">Blog</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('contact-us') }}" class="nav-link">Contact Us</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</div>

<!-- Modal -->

@if(Auth::user())
<?php
$user = DB::table('users')->where('id', Auth::user()->id)->first(); ?>

<div class="modal fade" id="MyProfile" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header" style="    display: flex;
    justify-content: end;">

                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="popup_main">
                    <div class="Login_popup">
                        <div class="container">
                            <div class="Popup_profile">
                                <div class="popup_header">
                                    <div class="Profile_name_img">
                                        <div class="login_img_box">
                                            <img src="{{asset('./images/UserProfile.png')}}" alt="">
                                        </div>

                                        <div class="Profile_name">
                                            <span>{{$user->fullName}}</span>
                                        </div>
                                    </div>

                                    <div class="upload_img">
                                        <span>Upload</span>
                                        <input type="file" id="file-input" name="file-input" />

                                        <label id="file-input-label" for="file-input">Upload</label </div>
                                    </div>



                                </div>


                                <div class="User_login_heading">
                                    <span>Change User Information here</span>

                                </div>
                                <div class="User_info_here">
                                    <div class="User_1_card">

                                        <div class="User_name_box">
                                            <div>
                                                <label for="name">Full Name</label>
                                                <div class="Name_box_input">
                                                    <input type="text" placeholder="Person Name" value="{{$user->fullName}}">
                                                </div>
                                            </div>
                                        </div>


                                        <div class="User_name_box">
                                            <div>
                                                <label for="name">Phone Number</label>
                                                <div class="Name_box_input">
                                                    <input type="text" placeholder="91+ 888666XXXX" value="{{$user->mobile}}">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="User_2_card">
                                        <div class="User_name_box">
                                            <div>
                                                <label for="name">Email Address</label>
                                                <div class="Name_box_input">
                                                    <input type="text" placeholder="PersonName123@gmail.com" value="{{$user->email}}">
                                                </div>
                                            </div>

                                            <div class="Update_here_btn">
                                                <button>Update</button>
                                            </div>
                                        </div>
                                    </div>


                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>






<!-- Logout Modal  -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Logout</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>Are you sure you want to log?</p>
            </div>
            <div class="modal-footer ">
                <button type="button" class="btn text-white" data-bs-dismiss="modal" style="background-color: #c80000;">Logout</button>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>



<!-- Logout Modal  -->

@endif










{{-- <div class="header_banner scroll-area">
    <div class="container heading">
        <h1 class="">
            Find Your Best Stay <br />
            WITH THE HOTEL CHAIN
        </h1>
    </div>

    .
</div> --}}


<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    function phoneInput() {
        var phoneInput = document.getElementById("phone");
        var errorMessage = document.getElementById("phone-error");

        if (phoneInput.value.length < 10) {
            errorMessage.style.display = "block";
            errorMessage.innerText = "Number should be minimum 10";

        } else if (phoneInput.value.length > 10) {
            errorMessage.style.display = "block";
            errorMessage.innerText = "Number shouldnot be exceed by 10"
            phoneInput.setCustomValidity('Number shouldnot be exceed by 10');
        } else {
            errorMessage.style.display = "none";
            phoneInput.setCustomValidity("");

        }

        function validateForm(event) {
            var phoneInput = document.getElementById("phone");

            if (phoneInput.value.length) {
                event.preventDefault();
                alert("Enter a valid number");
            }
        }
    }
</script>






<script>
    const initial_sign = document.querySelector('#initial_sign');
    const HamIcon = document.querySelector('.ham_icon');
    HamIcon.addEventListener('click', (e) => {
        e.stopPropagation();
        initial_sign.classList.toggle('openSing');
    });


    //    document.onclick = function(e){
    //     e.stopPropagation();
    //       if(e.target.id !== initial_sign){
    //         console.log('Hello');
    //         initial_sign.classList.remove('openSing');
    //       }
    //    }





    const our_team_list = document.querySelector('.our_team_list');
    const Our_list_dropdown = document.querySelector('.Our_list_dropdown');
    our_team_list.addEventListener('click', () => {
        Our_list_dropdown.classList.toggle('open')
    })


    // const MyProfile = document.querySelector('#MyProfile')
    // const MyProfile_btn = document.querySelector('#MyProfile_btn')

    // MyProfile_btn.addEventListener('click', () => {
    //     console.log('Hello');
    //     if (MyProfile.classList.contains('show')) {
    //         alert('if')
    //     } else {
    //         alert('Hello')
    //     }
    // })
</script>
<!-- ! Header section  -->