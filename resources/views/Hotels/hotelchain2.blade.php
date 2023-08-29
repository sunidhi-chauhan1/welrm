@extends('front.layouts.app')
@section('content')


<body>
    <!-- ! Header section  -->


    <!-- ! Header section  -->

    <!--! Contact  -->
    <div class="Contact_banner">
        <div class="contact_content">
            <h2>Hotel Chain</h2>
            <p>Lorem Ipsum is simply dummy text of the <br> printing and typesetting industry. </p>
            <button>Home - <span>About Us</span></button>
           
        </div>
    </div>

<div class="cities_slider">
    <div class="container">
    <h2 class="cities_title">Popular Cities</h2>
    <div class="swiper cities">
        <div class="swiper-wrapper">
          <div class="swiper-slide">Delhi</div>
          <div class="swiper-slide">Mumbai</div>
          <div class="swiper-slide">Kolkata</div>
          <div class="swiper-slide">Chennai</div>
          <div class="swiper-slide">Dehradun</div>
          <div class="swiper-slide">Chandhighar</div>
          <div class="swiper-slide">Chandhighar</div>
          <div class="swiper-slide">Chandhighar</div>
          <div class="swiper-slide">Slide 9</div>
          <div class="swiper-slide">Slide 9</div>
          <div class="swiper-slide">Slide 9</div>
          <div class="swiper-slide">Slide 9</div>
          <div class="swiper-slide">Slide 9</div>
          <div class="swiper-slide">Slide 9</div>
        </div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
    </div>            

     
    </div>
</div>

<div class="hotel_chain_cards">
    <div class="container">
        <div class="row">
            <div class="chain_cards_container">
                @foreach( $data as $NewData)                  
                           
                <div class="chain_card">
                    <div class="chain_card_img">
                    <img src="./images/WelcomeDeal1.png" alt="">
                    </div>
                    <div class="chain_card_content">
                        <a href="#">{{$NewData->hotelName}}</a>
                    <span>{{$NewData->telephone}}</span>
                    <span>{{$NewData->avgRating}}</span>
                    <span>book just @ {{$NewData->hour12Price}}</span>
                   
                    <p>{{$NewData->address}}</p>
                    </div>
                </div>
                @endforeach                
            </div>
        </div>
    </div>
</div>




</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
    crossorigin="anonymous"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

<script src="./js/script.js"></script>

</html>