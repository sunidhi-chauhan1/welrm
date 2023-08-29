<style>
    .Wishlist_icon {
        font-size: 36px;
        align-self: end;
        margin-right: 10px;
        color: #c80000;
    }

    .Wishlist_icon ion-icon {
        color: #c80000;
    }

    .MultinewSlider {
        height: 70px !important;
    }

    @media (max-width: 500px) {
        .Wishlist_icon {
            font-size: 30px;
            align-self: center;

        }
    }
</style>


@extends('front.layouts.app')
@section('content')
@include('front.layouts.updateCalender')

<div class="Filter_hotel_section">
    <div class="container">
        <div class="fiter_sec">
            <div class="filter_heading">
                @if(isset($hotels->hotelName) && !empty($hotels->hotelName))
                <p><span>Home</span><ion-icon name="chevron-forward-outline" role="img" class="md hydrated"></ion-icon>{{$hotels->hotelName}}</p>
                @else
                <p><span>Home</span><ion-icon name="heart" role="img" class="md hydrated"></ion-icon>Name Not Aviable</p>
                @endif
            </div>


        </div>
    </div>
</div>


<div class="Hotel_listing_slider_new">
    <div class="container">

        @foreach($roomData as $dat)
        <div class="Hotel_new_slider_parent">
            <div class="Hotel_new_slider">
                <div style="--swiper-navigation-color: #fff; --swiper-pagination-color: #fff" class="swiper Hotelnew2">
                    <div class="swiper-wrapper hotel_new_swiper_1" style="height: 225px;">
                        <div class="swiper-slide">
                            <img src="{{$dat->roomImage}}" Hello="Hello" />
                        </div>
                        <div class="swiper-slide">
                            <img src="{{$dat->roomImage}}" />
                        </div>
                        <div class="swiper-slide">
                            <img src="{{$dat->roomImage}}" />
                        </div>
                        <div class="swiper-slide">
                            <img src="{{$dat->roomImage}}" />
                        </div>
                        <div class="swiper-slide">
                            <img src="{{$dat->roomImage}}" />
                        </div>
                        <div class="swiper-slide">
                            <img src="{{$dat->roomImage}}" />
                        </div>
                        <div class="swiper-slide">
                            <img src="{{$dat->roomImage}}" />
                        </div>
                        <div class="swiper-slide">
                            <img src="{{$dat->roomImage}}" />
                        </div>
                        <div class="swiper-slide">
                            <img src="{{$dat->roomImage}}" />
                        </div>
                        <div class="swiper-slide">
                            <img src="{{$dat->roomImage}}" />
                        </div>
                    </div>
                    <!-- <div class="swiper-button-next"></div>
                                        <div class="swiper-button-prev"></div> -->
                </div>
                <div thumbsSlider="" class="swiper Hotelnew1">
                    <div class="swiper-wrapper MultinewSlider">
                        <div class="swiper-slide">
                            <img src="{{$dat->roomImage}}" />
                        </div>
                        <div class="swiper-slide">
                            <img src="{{$dat->roomImage}}" />
                        </div>
                        <div class="swiper-slide">
                            <img src="{{$dat->roomImage}}" />
                        </div>
                        <div class="swiper-slide">
                            <img src="{{$dat->roomImage}}" />
                        </div>
                        <div class="swiper-slide">
                            <img src="{{$dat->roomImage}}" />
                        </div>
                        <div class="swiper-slide">
                            <img src="{{$dat->roomImage}}" />
                        </div>
                        <div class="swiper-slide">
                            <img src="{{$dat->roomImage}}" />
                        </div>
                        <div class="swiper-slide">
                            <img src="{{$dat->roomImage}}" />
                        </div>
                        <div class="swiper-slide">
                            <img src="{{$dat->roomImage}}" />
                        </div>
                        <div class="swiper-slide">
                            <img src="{{$dat->roomImage}}" />
                        </div>
                    </div>
                </div>

            </div>
            <div class="Hotel_new_slider_content">
                <div class="hotel_title_container">
                    <h2>{{$dat->hotelName}}</h2>
                    <div class="Start_content">
                        <div>
                            <img src="./images/Star.png" alt="">
                            <img src="./images/Star.png" alt="">
                            <img src="./images/Star.png" alt="">
                            <img src="./images/Star.png" alt="">
                        </div>
                        <p>HOTEL</p>
                    </div>
                </div>

                <div class="Hotel_new_price_box">
                    <!-- <div class="wrap-icon-section wishlist">
                        <a href="{{route('wishlist',$dat->id)}}" class="link-direction">
                            <i class="fa fa-heart" aria-hidden="true"></i>
                        </a>
                    </div> -->
                    <div class="Hotel_price_box_1">
                        <div class="view_room_priceing">
                            @if($dat->discount)
                            <div>

                                <span>₹ {{$dat->hour24Price}}</span>

                                @php $discountedprice = $dat->hour24Price - ($dat->hour24Price * $dat->discount / 100) @endphp
                                <p>₹ {{$discountedprice}}</p>
                            </div>

                            <div class="Discount_label">
                                <span class="vc">{{$dat->discount }}%</span>
                            </div>
                            @else
                            <p>₹ {{$dat->hour24Price}}</p>
                            @endif
                        </div>




                        <div class="exclude_tax">
                            <p>Exclude Tax <span>Per Night</span></p>
                        </div>

                        <div class="Wifi_btn">
                            @php $amenitiesChunked = array_chunk($amenities->toArray(), 3); @endphp
                            @foreach ($amenitiesChunked as $amenitiesPair)
                            <span>
                                @foreach ($amenitiesPair as $facility)
                                {{$facility->name}}
                                @if (!$loop->last), @endif
                                @endforeach
                            </span>
                            @endforeach
                        </div>


                    </div>
                    <div class="Hotel_price_box_1 Hotel_price_box_mini">

                        <p>{{$dat->roomTypeName}}</p>
                        <p> <br> {{$dat->guestCapacity}} Guest <br>
                            1 x Room</p>

                    </div>

                    <div class="Hotel_price_box_1 last">
                        @if(Auth::user())
                        @php $wishlisted = DB::table('WishLists')->where('userId', Auth::user()->id)->where('roomId', $dat->room_id)->first(); @endphp


                        @if(( $wishlisted) != '')
                        <div class="Wishlist_icon">
                            <a href="{{route('wishlist', $dat->room_id)}}"><ion-icon name="heart"></ion-icon></a>
                        </div>
                        @else
                        <div class="Wishlist_icon">
                            <a href="{{route('wishlist', $dat->room_id)}}"><ion-icon name="heart-outline"></ion-icon></a>
                        </div>
                        @endif
                        @endif

                        <div class="check_in_bnx">
                            <span>Check-in {{$dat->checkIn}} PM</span>
                            <span>Check-out {{$dat->checkOut}} AM</span>
                        </div>


                        <div class="Hotel_new_btn">
                            @if(Auth::user())
                            <a href="{{route('bookhotel',$dat->room_id)}}">Book Now</a>
                            @else
                            <a href="javascript:void(0)" data-toggle="modal" data-target="#Sign_modal">Book Now</a>
                            @endif
                        </div>

                    </div>

                </div>
            </div>




        </div>
    @endforeach
</div>
</div>



<script src="https://kit.fontawesome.com/72aeadbf11.js" crossorigin="anonymous"></script>
<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>





<!-- <script src="./js/script.js"></script>

<script>
    $(function () {
    $("#datepickerbookingcan").datepicker();
    $("#datepickerbookingcan-1").datepicker();
  });
</script> -->



<!-- <script>
  

    const Room_drop_card = document.querySelector('.Room_drop_card');
    
    const Booking_can_drop = document.querySelector('#Booking_can_drop');
    Room_drop_card.addEventListener('click', ()=>{
        Booking_can_drop.classList.toggle('BookingActive')
    })
    Booking_can_drop.addEventListener('click', (e)=>{
        e.stopPropagation();
    })
</script> -->

<!-- <script src="./js/script.js"></script> -->


<!-- <script>
    
    const Room_drop_card = document.querySelector('.Room_drop_card');
      
      const Room_drop_Booking_Book = document.querySelector('#Room_drop_Booking_Book');
      Room_drop_card.addEventListener('click', ()=>{
          Room_drop_Booking_Book.classList.toggle('BookingActive')
      })
      Room_drop_Booking_Book.addEventListener('click', (e)=>{
          e.stopPropagation();
      })
    
    
    
  </script> -->


<!-- <script defer src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script> -->
<!-- 
<script>
    $(function () {
      $("#datepicker").datepicker();
      $("#datepicker-2").datepicker();
    });

    const Room_drop_card = document.querySelector('.Room_drop_card');
    
    const Room_drop_Booking = document.querySelector('#Room_drop_Booking');
    Room_drop_card.addEventListener('click', ()=>{
        Room_drop_Booking.classList.toggle('BookingActive')
    })
    Room_drop_Booking.addEventListener('click', (e)=>{
        e.stopPropagation();
    })
</script> -->

<script>
    var swiper = new Swiper(".Hotelnew1", {
        spaceBetween: 10,
        slidesPerView: 4,
        freeMode: true,
        watchSlidesProgress: true,
    });
    var swiper2 = new Swiper(".Hotelnew2", {
        spaceBetween: 10,
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
        thumbs: {
            swiper: swiper,
        },
    });
</script>
@endsection