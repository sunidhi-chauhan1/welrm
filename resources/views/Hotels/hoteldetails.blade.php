@extends('front.layouts.app')
@section('content')

@include('front.layouts.updateCalender')

<div class="Treebo_Trend_Edge_container">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="Price_main_container">
                    <div class="Price_nyt">
                        <h4>
                            PRICE (PER NIGHT)
                        </h4>
                        <div class="Priceing_container">

                            <div class="check_price">
                                <input type="checkbox">
                                <span>Below ₹1000</span>

                            </div>
                            <div class="check_price">
                                <input type="checkbox">
                                <span>Below ₹1000</span>

                            </div>
                            <div class="check_price">
                                <input type="checkbox">
                                <span>Below ₹1000</span>

                            </div>
                            <div class="check_price">
                                <input type="checkbox">
                                <span>Below ₹1000</span>

                            </div>
                            <div class="check_price">
                                <input type="checkbox">
                                <span>Below ₹1000</span>

                            </div>
                            <div class="check_price">
                                <input type="checkbox">
                                <span>Below ₹1000</span>

                            </div>
                        </div>

                        <div class="budget">
                            <h4>Your Budget</h4><button>GO</button>
                        </div>


                        <div class="min_max"><button>TO</button>TO<button>MAX</button></div>
                    </div>
                    <div class="Price_nyt Price_nyt_1">
                        <h4>
                            AREA ATTRACTION
                        </h4>
                        <div class="Priceing_container">

                            <div class="check_price">
                                <input type="checkbox">
                                <span>Free Cancellation</span>

                            </div>
                            <div class="check_price">
                                <input type="checkbox">
                                <span>24 Hour Front Desk</span>

                            </div>
                            <div class="check_price">
                                <input type="checkbox">
                                <span>AC</span>

                            </div>
                            <div class="check_price">
                                <input type="checkbox">
                                <span>Bar</span>

                            </div>
                            <div class="check_price">
                                <input type="checkbox">
                                <span>Wi-Fi</span>

                            </div>
                            <div class="check_price">
                                <input type="checkbox">
                                <span>Breakfast
                                </span>

                            </div>
                        </div>


                    </div>

                    <div class="Price_nyt Price_nyt_1">
                        <h4>
                            PROPERTY TYPE
                        </h4>
                        <div class="Priceing_container">

                            <div class="check_price property">
                                <div>
                                    <input type="checkbox">
                                    <span>Homes</span>
                                </div>
                                <small>[20]</small>

                            </div>
                            <div class="check_price property">
                                <div>
                                    <input type="checkbox">
                                    <span>Homes</span>
                                </div>
                                <small>[20]</small>

                            </div>
                            <div class="check_price property">
                                <div>
                                    <input type="checkbox">
                                    <span>Homes</span>
                                </div>
                                <small>[20]</small>

                            </div>
                            <div class="check_price property">
                                <div>
                                    <input type="checkbox">
                                    <span>Homes</span>
                                </div>
                                <small>[20]</small>

                            </div>
                            <div class="check_price property">
                                <div>
                                    <input type="checkbox">
                                    <span>Homes</span>
                                </div>
                                <small>[20]</small>

                            </div>
                            <div class="check_price property">
                                <div>
                                    <input type="checkbox">
                                    <span>Homes</span>
                                </div>
                                <small>[20]</small>

                            </div>
                            <div class="check_price property">
                                <div>
                                    <input type="checkbox">
                                    <span>Homes</span>
                                </div>
                                <small>[20]</small>

                            </div>
                            <div class="check_price property">
                                <div>
                                    <input type="checkbox">
                                    <span>Homes</span>
                                </div>
                                <small>[20]</small>

                            </div>
                            <div class="check_price property">
                                <div>
                                    <input type="checkbox">
                                    <span>Homes</span>
                                </div>
                                <small>[20]</small>

                            </div>


                        </div>


                    </div>

                </div>
            </div>
            <div class="col-md-9">
                <div class="swiper Trends_cards" id="Trend_unique">
                    <div class="swiper-wrapper" id="Trendy_slider">
                        <div class="swiper-slide">

                            @foreach($hotels as $hotel)   
                                                 

                            <div class="Trend_cards_1">
                                <div class="Trend_card_1">
                                    <div class="multi_slider">
                                        <div style="--swiper-navigation-color: #fff; --swiper-pagination-color: #fff" class="swiper Trend_slider_img_1">
                                            <div class="swiper-wrapper trend_swiper_1">
                                                <div class="swiper-slide">
                                                    <img src="{{$hotel->fileName}}" data-enlargable width="100" />
                                                </div>
                                                <div class="swiper-slide">
                                                    <img src="{{$hotel->fileName}}" data-enlargable />
                                                </div>
                                                <div class="swiper-slide">
                                                    <img src="{{$hotel->fileName}}" data-enlargable />
                                                </div>
                                                <div class="swiper-slide">
                                                    <img src="{{$hotel->fileName}}" data-enlargable />
                                                </div>
                                                <div class="swiper-slide">
                                                    <img src="{{$hotel->fileName}}" data-enlargable />
                                                </div>
                                                <div class="swiper-slide">
                                                    <img src="{{$hotel->fileName}}" data-enlargable />
                                                </div>
                                                <div class="swiper-slide">
                                                    <img src="{{$hotel->fileName}}" data-enlargable />
                                                </div>
                                                <div class="swiper-slide">
                                                    <img src="{{$hotel->fileName}}" data-enlargable />
                                                </div>
                                                <div class="swiper-slide">
                                                    <img src="{{$hotel->fileName}}" data-enlargable />
                                                </div>
                                                <div class="swiper-slide">
                                                    <img src="{{$hotel->fileName}}" />
                                                </div>
                                            </div>

                                        </div>
                                        <div thumbsSlider="" class="swiper Trend_slider_img_2">
                                            <div class="swiper-wrapper trend_swiper_2">
                                                <div class="swiper-slide">
                                                    <img src="{{$hotel->fileName}}" />
                                                </div>
                                                <div class="swiper-slide">
                                                    <img src="{{$hotel->fileName}}" />
                                                </div>
                                                <div class="swiper-slide">
                                                    <img src="{{$hotel->fileName}}" />
                                                </div>
                                                <div class="swiper-slide">
                                                    <img src="{{$hotel->fileName}}" />
                                                </div>
                                                <div class="swiper-slide">
                                                    <img src="{{$hotel->fileName}}" />
                                                </div>
                                                <div class="swiper-slide">
                                                    <img src="{{$hotel->fileName}}" />
                                                </div>
                                                <div class="swiper-slide">
                                                    <img src="{{$hotel->fileName}}" />
                                                </div>
                                                <div class="swiper-slide">
                                                    <img src="{{$hotel->fileName}}" />
                                                </div>
                                                <div class="swiper-slide">
                                                    <img src="{{$hotel->fileName}}" />
                                                </div>
                                                <div class="swiper-slide">
                                                    <img src="{{$hotel->fileName}}" />
                                                </div>
                                            </div>

                                        </div>
                                    </div>


                                    <div class="Hotel_listing_slider_content">


                                        <div class="view_room_content">
                                            <div class="Start_content">
                                                @php $rating = DB::table('Ratings')->where('hotelId', $hotel->hotelId)->get(['rating']);
                                               
                                                @endphp
                                                <div>
                                                    @if($rating != '')
                                                    <ion-icon name="star">{{$rating}}</ion-icon>
                                                    @else
                                                    <ion-icon name="star"></ion-icon>
                                                    @endif                                                    
                                                </div>
                                                <p>Hotel</p>
                                            </div>
                                            <div class="View_content_child">
                                                <div class="view_room_content_card">



                                                    <div class="view_room_priceing">


                                                    </div>
                                                    <div class="L_btn">
                                                        <div class="exclude_tax">
                                                            <p>Exclude Tax <span>Per Night</span></p>
                                                        </div>
                                                        <button>Free Breakfast</button>
                                                    </div>
                                                </div>
                                                <div class="view_room_content_card_2">
                                                    <h4>{{$hotel->hotelName}}</h4>
                                                    <div class="location_icon">
                                                        <ion-icon name="location-outline"></ion-icon>
                                                        <span>{{$hotel->address}}</span>
                                                    </div>
                                                    <a href="{{route('hotelsrooms', $hotel->hotelId)}}">View Rooms</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            @endforeach
                        </div>
                        <div class="swiper-slide">Slide 2</div>
                        <div class="swiper-slide">Slide 3</div>

                    </div>
                    <div class="Swiper_btns">
                        {{$datas->appends($_GET)->links()}}
                        <div class="swiper-button-next">Next</div>
                        <div class="swiper-button-prev">Previous</div>
                    </div>
                    <!-- <div class="swiper-pagination"></div> -->
                </div>
            </div>
        </div>
    </div>
</div>



<script src="
https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>


<script>
    $('img[data-enlargable]').addClass('img-enlargable').click(function() {
        var src = $(this).attr('src');
        $('<div>').css({
            background: 'RGBA(0,0,0,.5) url(' + src + ') no-repeat center',
            backgroundSize: 'contain',
            width: '100%',
            height: '100%',
            margin: 'auto',
            position: 'fixed',
            zIndex: '10000',
            top: '0',
            left: '0',
            cursor: 'zoom-out'
        }).click(function() {
            $(this).remove();
        }).appendTo('body');
    });
</script>



<script>
    $(function() {
        $("#datepickerB-0").datepicker();
        $("#datepickerB-1").datepicker();
    });

    const Room_drop_card = document.querySelector('.Room_drop_card');

    const Room_drop_Booking = document.querySelector('#Room_drop_Booking');
    Room_drop_card.addEventListener('click', () => {
        Room_drop_Booking.classList.toggle('BookingActive')
    })
    Room_drop_Booking.addEventListener('click', (e) => {
        e.stopPropagation();
    })
</script>


<script src="./js/script.js"></script>

@endsection