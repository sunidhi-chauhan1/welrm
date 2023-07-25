@extends('front.layouts.app')
@section('content')
    <div class="city_details_container">
        <div class="container">
            <div class="details_cards_container">
                <div class="location_card">
                    <span>City name, Location or Specific hotel Bangalore, India</span>
                    <p>Treebo Trend Edge</p>
                </div>
                <div class="location_card">
                    <span>Check-In </span>
                    <div class="date_section">
                        <p>21-06-2023</p>
                        <img src="./images/date-icon2.png" alt="">
                    </div>
                </div>
                <div class="location_card">
                    <span>Check-In </span>
                    <div class="date_section">
                        <p>21-06-2023</p>
                        <img src="./images/date-icon2.png" alt="">
                    </div>
                </div>
                <div class="location_card">
                    <span>Rooms/Guests </span>
                    <p>1 Room, 2 Guests</p>
                </div>
            </div>
        </div>
    </div>

    <div class="Filter_hotel_section">
        <div class="container">
            <div class="fiter_sec">
                <div class="filter_heading">
                    <p><span>Home</span>
                        <ion-icon name="chevron-forward-outline" role="img" class="md hydrated"></ion-icon>Bangalore,
                        India Hotels
                        (1993)
                    </p>
                </div>

                <div class="Main_filter">
                    <div class="Search_filter">
                        <ion-icon name="search-outline" role="img" class="md hydrated"></ion-icon>
                        <input type="text" placeholder="Enter hotel location or Name">
                    </div>

                    <div class="Sort_section">
                        <span>Sort By: </span>

                        <select name="" id="">
                            <option value="Popularity">Popularity</option>
                            <option value="Price - High to Low">price- Low to High</option>
                            <option value="Price - High to Low">Price - High to Low</option>

                        </select>
                    </div>


                    <div class="Menu_bar">
                        <div class="grid_img">
                            <a href="#"><img src="./images/hotelGrid1.png" alt=""></a>
                        </div>
                        <div class="menu1">
                            <a href="#"><img src="./images/Hotelmenu1.png" alt=""></a>
                        </div>
                    </div>

                    <div class="show_result">
                        <p><span>Showing</span> 1-20 of 100 results</p>
                    </div>

                </div>
            </div>
        </div>
    </div>

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
                    <div class="swiper Trends_cards">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="Trend_cards_1">
                                    <div class="Trend_card_1">
                                        <div class="multi_slider">
                                            <div style="--swiper-navigation-color: #fff; --swiper-pagination-color: #fff"
                                                class="swiper Trend_slider_img_1">
                                                <div class="swiper-wrapper trend_swiper_1">
                                                    <div class="swiper-slide">
                                                        <img src="https://swiperjs.com/demos/images/nature-1.jpg" />
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <img src="https://swiperjs.com/demos/images/nature-2.jpg" />
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <img src="https://swiperjs.com/demos/images/nature-3.jpg" />
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <img src="https://swiperjs.com/demos/images/nature-4.jpg" />
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <img src="https://swiperjs.com/demos/images/nature-5.jpg" />
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <img src="https://swiperjs.com/demos/images/nature-6.jpg" />
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <img src="https://swiperjs.com/demos/images/nature-7.jpg" />
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <img src="https://swiperjs.com/demos/images/nature-8.jpg" />
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <img src="https://swiperjs.com/demos/images/nature-9.jpg" />
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <img src="https://swiperjs.com/demos/images/nature-10.jpg" />
                                                    </div>
                                                </div>

                                            </div>
                                            <div thumbsSlider="" class="swiper Trend_slider_img_2">
                                                <div class="swiper-wrapper trend_swiper_2">
                                                    <div class="swiper-slide">
                                                        <img src="https://swiperjs.com/demos/images/nature-1.jpg" />
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <img src="https://swiperjs.com/demos/images/nature-2.jpg" />
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <img src="https://swiperjs.com/demos/images/nature-3.jpg" />
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <img src="https://swiperjs.com/demos/images/nature-4.jpg" />
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <img src="https://swiperjs.com/demos/images/nature-5.jpg" />
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <img src="https://swiperjs.com/demos/images/nature-6.jpg" />
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <img src="https://swiperjs.com/demos/images/nature-7.jpg" />
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <img src="https://swiperjs.com/demos/images/nature-8.jpg" />
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <img src="https://swiperjs.com/demos/images/nature-9.jpg" />
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <img src="https://swiperjs.com/demos/images/nature-10.jpg" />
                                                    </div>
                                                </div>

                                            </div>
                                        </div>


                                        <div class="Hotel_listing_slider_content">


                                            <div class="view_room_content">
                                                <div class="Start_content">
                                                    <div>
                                                        <img src="./images/Star.png" alt="">
                                                        <img src="./images/Star.png" alt="">
                                                        <img src="./images/Star.png" alt="">
                                                        <img src="./images/Star.png" alt="">
                                                    </div>
                                                    <p>HOTEL</p>
                                                </div>
                                                <div class="View_content_child">
                                                    <div class="view_room_content_card">
                                                        <div class="view_room_priceing">
                                                            <span>₹ 2000</span>
                                                            <p>₹ 1000</p>
                                                        </div>
                                                        <div class="L_btn">
                                                            <div class="exclude_tax">
                                                                <p>Exclude Tax <span>Per Night</span></p>
                                                            </div>
                                                            <button>Free Breakfast</button>
                                                        </div>
                                                    </div>
                                                    <div class="view_room_content_card_2">
                                                        <h4>Treebo Trend Edge</h4>
                                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting
                                                            industry.</p>
                                                        <div class="location_icon">
                                                            <ion-icon name="location-outline"></ion-icon>
                                                            <span>Location</span>
                                                        </div>
                                                        <a href="#">View Room</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="Trend_cards_1">
                                    <div class="Trend_card_1">
                                        <div class="multi_slider">
                                            <div style="--swiper-navigation-color: #fff; --swiper-pagination-color: #fff"
                                                class="swiper Trend_slider_img_6">
                                                <div class="swiper-wrapper trend_swiper_">
                                                    <div class="swiper-slide">
                                                        <img src="https://swiperjs.com/demos/images/nature-1.jpg" />
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <img src="https://swiperjs.com/demos/images/nature-2.jpg" />
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <img src="https://swiperjs.com/demos/images/nature-3.jpg" />
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <img src="https://swiperjs.com/demos/images/nature-4.jpg" />
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <img src="https://swiperjs.com/demos/images/nature-5.jpg" />
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <img src="https://swiperjs.com/demos/images/nature-6.jpg" />
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <img src="https://swiperjs.com/demos/images/nature-7.jpg" />
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <img src="https://swiperjs.com/demos/images/nature-8.jpg" />
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <img src="https://swiperjs.com/demos/images/nature-9.jpg" />
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <img src="https://swiperjs.com/demos/images/nature-10.jpg" />
                                                    </div>
                                                </div>

                                            </div>
                                            <div thumbsSlider="" class="swiper Trend_slider_img_5">
                                                <div class="swiper-wrapper trend_swiper_2">
                                                    <div class="swiper-slide">
                                                        <img src="https://swiperjs.com/demos/images/nature-1.jpg" />
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <img src="https://swiperjs.com/demos/images/nature-2.jpg" />
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <img src="https://swiperjs.com/demos/images/nature-3.jpg" />
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <img src="https://swiperjs.com/demos/images/nature-4.jpg" />
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <img src="https://swiperjs.com/demos/images/nature-5.jpg" />
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <img src="https://swiperjs.com/demos/images/nature-6.jpg" />
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <img src="https://swiperjs.com/demos/images/nature-7.jpg" />
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <img src="https://swiperjs.com/demos/images/nature-8.jpg" />
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <img src="https://swiperjs.com/demos/images/nature-9.jpg" />
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <img src="https://swiperjs.com/demos/images/nature-10.jpg" />
                                                    </div>
                                                </div>

                                            </div>
                                        </div>


                                        <div class="Hotel_listing_slider_content">


                                            <div class="view_room_content">
                                                <div class="Start_content">
                                                    <div>
                                                        <img src="./images/Star.png" alt="">
                                                        <img src="./images/Star.png" alt="">
                                                        <img src="./images/Star.png" alt="">
                                                        <img src="./images/Star.png" alt="">
                                                    </div>
                                                    <p>HOTEL</p>
                                                </div>
                                                <div class="View_content_child">
                                                    <div class="view_room_content_card">
                                                        <div class="view_room_priceing">
                                                            <span>₹ 2000</span>
                                                            <p>₹ 1000</p>
                                                        </div>
                                                        <div class="L_btn">
                                                            <div class="exclude_tax">
                                                                <p>Exclude Tax <span>Per Night</span></p>
                                                            </div>
                                                            <button>Free Breakfast</button>
                                                        </div>
                                                    </div>
                                                    <div class="view_room_content_card_2">
                                                        <h4>Treebo Trend Edge</h4>
                                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting
                                                            industry.</p>
                                                        <div class="location_icon">
                                                            <ion-icon name="location-outline"></ion-icon>
                                                            <span>Location</span>
                                                        </div>
                                                        <a href="#">View Room</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="Trend_cards_1">
                                    <div class="Trend_card_1">
                                        <div class="multi_slider">
                                            <div style="--swiper-navigation-color: #fff; --swiper-pagination-color: #fff"
                                                class="swiper Trend_slider_img_8">
                                                <div class="swiper-wrapper trend_swiper_">
                                                    <div class="swiper-slide">
                                                        <img src="https://swiperjs.com/demos/images/nature-1.jpg" />
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <img src="https://swiperjs.com/demos/images/nature-2.jpg" />
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <img src="https://swiperjs.com/demos/images/nature-3.jpg" />
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <img src="https://swiperjs.com/demos/images/nature-4.jpg" />
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <img src="https://swiperjs.com/demos/images/nature-5.jpg" />
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <img src="https://swiperjs.com/demos/images/nature-6.jpg" />
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <img src="https://swiperjs.com/demos/images/nature-7.jpg" />
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <img src="https://swiperjs.com/demos/images/nature-8.jpg" />
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <img src="https://swiperjs.com/demos/images/nature-9.jpg" />
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <img src="https://swiperjs.com/demos/images/nature-10.jpg" />
                                                    </div>
                                                </div>

                                            </div>
                                            <div thumbsSlider="" class="swiper Trend_slider_img_7">
                                                <div class="swiper-wrapper trend_swiper_2">
                                                    <div class="swiper-slide">
                                                        <img src="https://swiperjs.com/demos/images/nature-1.jpg" />
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <img src="https://swiperjs.com/demos/images/nature-2.jpg" />
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <img src="https://swiperjs.com/demos/images/nature-3.jpg" />
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <img src="https://swiperjs.com/demos/images/nature-4.jpg" />
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <img src="https://swiperjs.com/demos/images/nature-5.jpg" />
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <img src="https://swiperjs.com/demos/images/nature-6.jpg" />
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <img src="https://swiperjs.com/demos/images/nature-7.jpg" />
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <img src="https://swiperjs.com/demos/images/nature-8.jpg" />
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <img src="https://swiperjs.com/demos/images/nature-9.jpg" />
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <img src="https://swiperjs.com/demos/images/nature-10.jpg" />
                                                    </div>
                                                </div>

                                            </div>
                                        </div>


                                        <div class="Hotel_listing_slider_content">


                                            <div class="view_room_content">
                                                <div class="Start_content">
                                                    <div>
                                                        <img src="./images/Star.png" alt="">
                                                        <img src="./images/Star.png" alt="">
                                                        <img src="./images/Star.png" alt="">
                                                        <img src="./images/Star.png" alt="">
                                                    </div>
                                                    <p>HOTEL</p>
                                                </div>
                                                <div class="View_content_child">
                                                    <div class="view_room_content_card">
                                                        <div class="view_room_priceing">
                                                            <span>₹ 2000</span>
                                                            <p>₹ 1000</p>
                                                        </div>
                                                        <div class="L_btn">
                                                            <div class="exclude_tax">
                                                                <p>Exclude Tax <span>Per Night</span></p>
                                                            </div>
                                                            <button>Free Breakfast</button>
                                                        </div>
                                                    </div>
                                                    <div class="view_room_content_card_2">
                                                        <h4>Treebo Trend Edge</h4>
                                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting
                                                            industry.</p>
                                                        <div class="location_icon">
                                                            <ion-icon name="location-outline"></ion-icon>
                                                            <span>Location</span>
                                                        </div>
                                                        <a href="#">View Room</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="swiper-slide">Slide 2</div>
                            <div class="swiper-slide">Slide 3</div>

                        </div>
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                        <!-- <div class="swiper-pagination"></div> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
