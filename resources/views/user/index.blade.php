@extends('front.layouts.app')
@section('content')
    <div class="Offer_section">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="Exclusive_Offers">
                        <span>Exclusive Offers</span>
                        <img src="{{ asset('images/OfferIcon.png') }}" alt="" />
                    </div>

                    <div class="Offer_cards">
                        <div class="card_1">
                            <div class="offer_img">
                                <img src="{{ asset('images/booking-ticket-online-reservation-travel-flight-concept 1.png') }}"
                                    alt="" />
                            </div>
                            <div class="Offer_cards_content">
                                <h4>Lorem Ipsum</h4>
                                <p>
                                    Lorem Ipsum is simply dummy text of the printing and
                                    typesetting industry.
                                </p>
                                <a href="#">Learn More</a>
                                <small>valid till 30 jun, 2023 </small>
                            </div>
                        </div>
                        <div class="card_1">
                            <div class="offer_img">
                                <img src="{{ asset('images/booking-ticket-online-reservation-travel-flight-concept 1.png') }}"
                                    alt="" />
                            </div>
                            <div class="Offer_cards_content">
                                <h4>Lorem Ipsum</h4>
                                <p>
                                    Lorem Ipsum is simply dummy text of the printing and
                                    typesetting industry.
                                </p>
                                <a href="#">Learn More</a>
                                <small>valid till 30 jun, 2023 </small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="Hotel_info_container">
                        <div class="Check_container">
                            <div>
                                <input type="radio" name="" id="Hello" />
                                <span>Overnight</span>
                            </div>
                            <div>
                                <input type="radio" name="" id="Hello" />
                                <span>Day Use Stays</span>
                            </div>
                        </div>

                        <div class="Rooms_location">
                            <div class="City_details_cards">
                                <p>Enter City name, Location or Specific hotel</p>

                                <div class="Hotel_book">
                                    <img src="{{ asset('images/HouseIcon.png') }}" alt="">
                                    <p><strong>Bangalore </strong><br>India</p>
                                    <img src="{{ asset('images/HouseIcon.png') }}" alt="">

                                </div>
                            </div>
                            <div class="Checks_cards_1">
                                <div class="check_box">
                                    <div class="date_icons">
                                        <img src="{{ asset('images/date-icon2.png') }}" alt="" />
                                    </div>
                                    <span>Check-in</span>
                                    <span>8 Jun'2023 Thursday</span>
                                </div>
                                <div class="check_box">
                                    <div class="date_icons">
                                        <img src="{{ asset('images/date-icon2.png') }}" alt="date-icon" />
                                    </div>
                                    <span>Check-in</span>
                                    <span>9 Jun'2023 Thursday</span>
                                </div>
                            </div>
                            <div class="Rooms_card">
                                <h4>Rooms & Guests</h4>

                                <div class="select_rooms">
                                    <select name="" id="">
                                        <option value="">1 Rooms</option>
                                    </select>

                                    <select name="" id="">
                                        <option value="">2 Guest</option>
                                    </select>
                                </div>
                            </div>

                            <div class="Search_btn">
                                <button>Search</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ! Hero section  -->
    <div class="Hero_section">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h2>Lorem Ipsum</h2>
                    <p>
                        Lorem Ipsum is simply dummy text of the printing and typesetting
                        industry. Lorem Ipsum has been the industry's standard dummy text
                        ever since the 1500s, when an unknown printer took a galley of
                        type and scrambled it to make a type specimen book.
                    </p>
                    <p>
                        It is a long established fact that a reader will be distracted by
                        the readable content of a page when looking at its layout. The
                        point of using Lorem Ipsum is that it has a more-or-less normal
                        distribution of letters, as opposed to using 'Content here,
                        content here', making it look like readable English.
                    </p>
                </div>
                <div class="col-md-6">
                    <div class="hero_img">
                        <img src="{{ asset('images/Hero.png') }}" alt="Hero" />
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ! Hero section  -->
    <!-- ! Hero section  -->
    <div class="Hero_section2 hero_section_2">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="hero_img">
                        <img src="{{ asset('images/Hero2.png') }}" alt="Hero2" />
                    </div>
                </div>

                <div class="col-md-6">
                    <h2>Lorem Ipsum</h2>
                    <p>
                        Lorem Ipsum is simply dummy text of the printing and typesetting
                        industry. Lorem Ipsum has been the industry's standard dummy text
                        ever since the 1500s, when an unknown printer took a galley of
                        type and scrambled it to make a type specimen book.
                    </p>
                    <p>
                        It is a long established fact that a reader will be distracted by
                        the readable content of a page when looking at its layout. The
                        point of using Lorem Ipsum is that it has a more-or-less normal
                        distribution of letters, as opposed to using 'Content here,
                        content here', making it look like readable English.
                    </p>
                    <button>Lorem ipsum</button>
                </div>
            </div>
        </div>
    </div>
    <!-- ! Hero section  -->

    <!--! Hotel  -->

    <div class="Book_hotels">
        <div class="container">
            <h2>Book Hotels at Popular Destinations</h2>
            <p class="Hotel_title">
                Lorem Ipsum is simply dummy text of the printing <br />
                and typesetting industry
            </p>
            <div
                class="swiper Destiniations_slider swiper-initialized swiper-horizontal swiper-free-mode swiper-backface-hidden">
                <div class="swiper-wrapper" id="swiper-wrapper-e7faa50136bfe445" aria-live="polite">
                    <div class="swiper-slide swiper-slide-active" style="width: 412px; margin-right: 30px" role="group"
                        aria-label="1 / 6">
                        <div class="Welcome_deal_slider_img">
                            <img src="{{ asset('images/WelcomeDeal1.png') }}" alt="" />
                        </div>

                        <div class="Destination_content">
                            <div class="Destination_price">
                                <button>Staring at ₹444</button>
                                <span>Kolkata</span>
                            </div>

                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>

                            <a href="#">Learn more</a>

                        </div>
                    </div>
                    <div class="swiper-slide swiper-slide-active" style="width: 412px; margin-right: 30px" role="group"
                        aria-label="1 / 6">
                        <div class="Welcome_deal_slider_img">
                            <img src="{{ asset('images/WelcomeDeal1.png') }}" alt="" />
                        </div>

                        <div class="Destination_content">
                            <div class="Destination_price">
                                <button>Staring at ₹444</button>
                                <span>Kolkata</span>
                            </div>

                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>

                            <a href="#">Learn more</a>

                        </div>
                    </div>
                    <div class="swiper-slide swiper-slide-active" style="width: 412px; margin-right: 30px" role="group"
                        aria-label="1 / 6">
                        <div class="Welcome_deal_slider_img">
                            <img src="{{ asset('images/WelcomeDeal1.png') }}" alt="welcome" />
                        </div>

                        <div class="Destination_content">
                            <div class="Destination_price">
                                <button>Staring at ₹444</button>
                                <span>Kolkata</span>
                            </div>

                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>

                            <a href="#">Learn more</a>

                        </div>
                    </div>
                    <div class="swiper-slide swiper-slide-active" style="width: 412px; margin-right: 30px" role="group"
                        aria-label="1 / 6">
                        <div class="Welcome_deal_slider_img">
                            <img src="{{ asset('images/WelcomeDeal1.png') }}" alt="" />
                        </div>

                        <div class="Destination_content">
                            <div class="Destination_price">
                                <button>Staring at ₹444</button>
                                <span>Kolkata</span>
                            </div>

                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>

                            <a href="#">Learn more</a>

                        </div>
                    </div>
                    <div class="swiper-slide swiper-slide-active" style="width: 412px; margin-right: 30px" role="group"
                        aria-label="1 / 6">
                        <div class="Welcome_deal_slider_img">
                            <img src="./images/WelcomeDeal1.png" alt="" />
                        </div>

                        <div class="Destination_content">
                            <div class="Destination_price">
                                <button>Staring at ₹444</button>
                                <span>Kolkata</span>
                            </div>

                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>

                            <a href="#">Learn more</a>

                        </div>
                    </div>
                </div>
                <div class="swiper-button-next" tabindex="0" role="button" aria-label="Next slide"
                    aria-controls="swiper-wrapper-e7faa50136bfe445" aria-disabled="false"></div>
                <div class="swiper-button-prev swiper-button-disabled" tabindex="-1" role="button"
                    aria-label="Previous slide" aria-controls="swiper-wrapper-e7faa50136bfe445" aria-disabled="true">
                </div>

                <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
            </div>
        </div>
    </div>

    <!--  !Our Client  -->

    <div class="Our_Client">
        <div class="container">
            <h1>What Our Clients Says</h1>
            <div class="swiper OurSlider">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="User_review">
                            <div class="Our_Client_User_img">
                                <img src="https://t4.ftcdn.net/jpg/02/14/74/61/360_F_214746128_31JkeaP6rU0NzzzdFC4khGkmqc8noe6h.jpg"
                                    alt="" />
                            </div>
                            <h2>Lorem ipsum, dolor sit amet.</h2>
                            <p>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed
                                non facere nesciunt ut earum, qui aliquid quaerat magni, amet,
                                pariatur consectetur?
                            </p>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="User_review">
                            <div class="Our_Client_User_img">
                                <img src="https://t4.ftcdn.net/jpg/02/14/74/61/360_F_214746128_31JkeaP6rU0NzzzdFC4khGkmqc8noe6h.jpg"
                                    alt="" />
                            </div>
                            <h2>Lorem ipsum, dolor sit amet.</h2>
                            <p>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed
                                non facere nesciunt ut earum, qui aliquid quaerat magni, amet,
                                pariatur consectetur?
                            </p>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="User_review">
                            <div class="Our_Client_User_img">
                                <img src="https://t4.ftcdn.net/jpg/02/14/74/61/360_F_214746128_31JkeaP6rU0NzzzdFC4khGkmqc8noe6h.jpg"
                                    alt="" />
                            </div>
                            <h2>Lorem ipsum, dolor sit amet.</h2>
                            <p>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed
                                non facere nesciunt ut earum, qui aliquid quaerat magni, amet,
                                pariatur consectetur?
                            </p>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="User_review">
                            <div class="Our_Client_User_img">
                                <img src="https://t4.ftcdn.net/jpg/02/14/74/61/360_F_214746128_31JkeaP6rU0NzzzdFC4khGkmqc8noe6h.jpg"
                                    alt="" />
                            </div>
                            <h2>Lorem ipsum, dolor sit amet.</h2>
                            <p>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed
                                non facere nesciunt ut earum, qui aliquid quaerat magni, amet,
                                pariatur consectetur?
                            </p>
                        </div>
                    </div>
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </div>

    <!--  !Our Client  -->

    <!-- ! Welcome Deal Slider  -->
    <div class="Welcome_deal_slider">
        <div class="container">
            <h2 class="Welcome_title">WELRM Welcome Deal</h2>
            <div class="swiper mySwiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="Welcome_deal_slider_img">
                            <img src="./images/WelcomeDeal1.png" alt="" />
                        </div>

                        <div class="Welcome_deal_slider_content">
                            <div class="Slider_star">
                                <img src="./images/Frame.png" alt="" />
                                <img src="./images/Frame.png" alt="" />
                                <img src="./images/Frame.png" alt="" />
                                <img src="./images/Frame.png" alt="" />
                                <img src="./images/Frame.png" alt="" />
                            </div>
                            <div class="Hotel_name">
                                <h3>Hotel Name</h3>
                            </div>
                            <div class="Slider_location">
                                <img src="./images/location-icon1.png" alt="" />
                                <span>location</span>
                            </div>

                            <div class="price_slider">
                                <p>From <del>₹ 500</del></p>
                                <p>₹ 400</p>
                            </div>
                            <div class="night">
                                <small>Per Night</small>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="Welcome_deal_slider_img">
                            <img src="./images/WelcomeDeal1.png" alt="" />
                        </div>

                        <div class="Welcome_deal_slider_content">
                            <div class="Slider_star">
                                <img src="./images/Frame.png" alt="" />
                                <img src="./images/Frame.png" alt="" />
                                <img src="./images/Frame.png" alt="" />
                                <img src="./images/Frame.png" alt="" />
                                <img src="./images/Frame.png" alt="" />
                            </div>
                            <div class="Hotel_name">
                                <h3>Hotel Name</h3>
                            </div>
                            <div class="Slider_location">
                                <img src="./images/location-icon1.png" alt="" />
                                <span>location</span>
                            </div>

                            <div class="price_slider">
                                <p>From <del>₹ 500</del></p>
                                <p>₹ 400</p>
                            </div>
                            <div class="night">
                                <small>Per Night</small>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="Welcome_deal_slider_img">
                            <img src="./images/WelcomeDeal1.png" alt="" />
                        </div>

                        <div class="Welcome_deal_slider_content">
                            <div class="Slider_star">
                                <img src="./images/Frame.png" alt="" />
                                <img src="./images/Frame.png" alt="" />
                                <img src="./images/Frame.png" alt="" />
                                <img src="./images/Frame.png" alt="" />
                                <img src="./images/Frame.png" alt="" />
                            </div>
                            <div class="Hotel_name">
                                <h3>Hotel Name</h3>
                            </div>
                            <div class="Slider_location">
                                <img src="./images/location-icon1.png" alt="" />
                                <span>location</span>
                            </div>

                            <div class="price_slider">
                                <p>From <del>₹ 500</del></p>
                                <p>₹ 400</p>
                            </div>
                            <div class="night">
                                <small>Per Night</small>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="Welcome_deal_slider_img">
                            <img src="./images/WelcomeDeal1.png" alt="" />
                        </div>

                        <div class="Welcome_deal_slider_content">
                            <div class="Slider_star">
                                <img src="./images/Frame.png" alt="" />
                                <img src="./images/Frame.png" alt="" />
                                <img src="./images/Frame.png" alt="" />
                                <img src="./images/Frame.png" alt="" />
                                <img src="./images/Frame.png" alt="" />
                            </div>
                            <div class="Hotel_name">
                                <h3>Hotel Name</h3>
                            </div>
                            <div class="Slider_location">
                                <img src="./images/location-icon1.png" alt="" />
                                <span>location</span>
                            </div>

                            <div class="price_slider">
                                <p>From <del>₹ 500</del></p>
                                <p>₹ 400</p>
                            </div>
                            <div class="night">
                                <small>Per Night</small>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="Welcome_deal_slider_img">
                            <img src="./images/WelcomeDeal1.png" alt="" />
                        </div>

                        <div class="Welcome_deal_slider_content">
                            <div class="Slider_star">
                                <img src="./images/Frame.png" alt="" />
                                <img src="./images/Frame.png" alt="" />
                                <img src="./images/Frame.png" alt="" />
                                <img src="./images/Frame.png" alt="" />
                                <img src="./images/Frame.png" alt="" />
                            </div>
                            <div class="Hotel_name">
                                <h3>Hotel Name</h3>
                            </div>
                            <div class="Slider_location">
                                <img src="./images/location-icon1.png" alt="" />
                                <span>location</span>
                            </div>

                            <div class="price_slider">
                                <p>From <del>₹ 500</del></p>
                                <p>₹ 400</p>
                            </div>
                            <div class="night">
                                <small>Per Night</small>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="Welcome_deal_slider_img">
                            <img src="./images/WelcomeDeal1.png" alt="" />
                        </div>

                        <div class="Welcome_deal_slider_content">
                            <div class="Slider_star">
                                <img src="./images/Frame.png" alt="" />
                                <img src="./images/Frame.png" alt="" />
                                <img src="./images/Frame.png" alt="" />
                                <img src="./images/Frame.png" alt="" />
                                <img src="./images/Frame.png" alt="" />
                            </div>
                            <div class="Hotel_name">
                                <h3>Hotel Name</h3>
                            </div>
                            <div class="Slider_location">
                                <img src="./images/location-icon1.png" alt="" />
                                <span>location</span>
                            </div>

                            <div class="price_slider">
                                <p>From <del>₹ 500</del></p>
                                <p>₹ 400</p>
                            </div>
                            <div class="night">
                                <small>Per Night</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
        </div>
    </div>
@endsection

<!-- ! Welcome Deal Slider  -->
