@extends('front.layouts.app')
@section('content')
    <div class="scroll-container">


        <!-- ! Offer section  -->
        <div class="Offer_section scroll-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="Exclusive_Offers">
                            <span>Exclusive Offers</span>
                            <img src="./images/OfferIcon.png" alt="" />
                        </div>

                        <div class="Offer_cards">
                            <div class="card_1">
                                <div class="offer_img">
                                    <img src="https://cdn.pixabay.com/photo/2015/02/02/11/09/office-620822_1280.jpg"
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
                                    <img src="https://cdn.pixabay.com/photo/2015/02/02/11/09/office-620822_1280.jpg"
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
                            <div class="Rooms_location">
                                <div class="Check_container">
                                    <div>
                                        <input type="radio" name="inputGrp" id="Hello" />
                                        <span>Overnight</span>
                                    </div>
                                    <div>
                                        <input type="radio" name="inputGrp" id="Day" />
                                        <span>Day Use Stays</span>
                                    </div>
                                </div>

                                <div class="City_details_cards">
                                    <p>Enter City name, Location or Specific hotel</p>

                                    <div class="Hotel_book">
                                        <img src="./images/HouseIcon.png" alt="" />
                                        <p><strong>Bangalore </strong><br />India</p>
                                        <img src="./images/HouseIcon.png" alt="" />
                                    </div>
                                </div>
                                <div class="Checks_cards_1">
                                    <div class="check_box">
                                        <div class="date_icons date_icons_1">
                                            <img src="./images/date-icon2.png" alt="" />
                                        </div>
                                        <span>Check-in</span>
                                        <span>8 Jun'2023 Thursday</span>
                                    </div>
                                    <div class="check_box">
                                        <div class="date_icons">
                                            <img src="./images/date-icon2.png" alt="" />
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
                                    <div class="offer_btn">
                                        <a href="#">Search</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ! Offer section  -->

        <!-- ! Hero section  -->
        <div class="Hero_section scroll-area-1 scroll-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h2>Lorem Ipsum</h2>
                        <p>
                            Lorem Ipsum is simply dummy text of the printing and typesetting
                            industry. Lorem Ipsum has been the industry's standard dummy
                            text ever since the 1500s, when an unknown printer took a galley
                            of type and scrambled it to make a type specimen book.
                        </p>
                        <p>
                            It is a long established fact that a reader will be distracted
                            by the readable content of a page when looking at its layout.
                            The point of using Lorem Ipsum is that it has a more-or-less
                            normal distribution of letters, as opposed to using 'Content
                            here, content here', making it look like readable English.
                        </p>
                    </div>
                    <div class="col-md-6">
                        <div class="hero_img">
                            <img src="./images/Hero.png" alt="" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ! Hero section  -->

        <!-- ! Hero section 2  -->
        <div class="Hero_section2 hero_section_2 scroll-area-2 scroll-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="hero_img">
                            <img src="./images/Hero2.png" alt="" />
                        </div>
                    </div>

                    <div class="col-md-6">
                        <h2>Lorem Ipsum</h2>
                        <p>
                            Lorem Ipsum is simply dummy text of the printing and typesetting
                            industry. Lorem Ipsum has been the industry's standard dummy
                            text ever since the 1500s, when an unknown printer took a galley
                            of type and scrambled it to make a type specimen book.
                        </p>
                        <p>
                            It is a long established fact that a reader will be distracted
                            by the readable content of a page when looking at its layout.
                            The point of using Lorem Ipsum is that it has a more-or-less
                            normal distribution of letters, as opposed to using 'Content
                            here, content here', making it look like readable English.
                        </p>
                        <button>Lorem ipsum</button>
                    </div>
                    <div class="Email_box">
                        <div class="Enter_email">
                            <input type="text" placeholder="Enter Your Email" />
                        </div>
                        <a href="#"><img src="./images/SendEmail.png" alt="" /></a>
                    </div>
                </div>
            </div>
        </div>
        <!-- ! Hero section 2  -->

        <!--! Hotel  -->
        <div class="Book_hotels scroll-area-3 scroll-area">
            <div class="container">
                <h2>Book Hotels at Popular Destinations</h2>
                <p class="Hotel_title">
                    Lorem Ipsum is simply dummy text of the printing <br />
                    and typesetting industry
                </p>
                <div
                    class="swiper Destiniations_slider swiper-initialized swiper-horizontal swiper-free-mode swiper-backface-hidden">
                    <div class="swiper-wrapper" id="swiper-wrapper-e7faa50136bfe445" aria-live="polite">
                        <div class="swiper-slide swiper-slide-active" style="width: 412px; margin-right: 30px"
                            role="group" aria-label="1 / 6">
                            <div class="Welcome_deal_slider_img">
                                <img src="./images/WelcomeDeal1.png" alt="" />
                            </div>

                            <div class="Destination_content">
                                <div class="Destination_price">
                                    <button>Staring at ₹444</button>
                                    <span>Kolkata</span>
                                </div>

                                <p>
                                    Lorem Ipsum is simply dummy text of the printing and
                                    typesetting industry.
                                </p>

                                <a href="#">Learn more</a>
                            </div>
                        </div>
                        <div class="swiper-slide swiper-slide-active" style="width: 412px; margin-right: 30px"
                            role="group" aria-label="1 / 6">
                            <div class="Welcome_deal_slider_img">
                                <img src="./images/WelcomeDeal1.png" alt="" />
                            </div>

                            <div class="Destination_content">
                                <div class="Destination_price">
                                    <button>Staring at ₹444</button>
                                    <span>Kolkata</span>
                                </div>

                                <p>
                                    Lorem Ipsum is simply dummy text of the printing and
                                    typesetting industry.
                                </p>

                                <a href="#">Learn more</a>
                            </div>
                        </div>
                        <div class="swiper-slide swiper-slide-active" style="width: 412px; margin-right: 30px"
                            role="group" aria-label="1 / 6">
                            <div class="Welcome_deal_slider_img">
                                <img src="./images/WelcomeDeal1.png" alt="" />
                            </div>

                            <div class="Destination_content">
                                <div class="Destination_price">
                                    <button>Staring at ₹444</button>
                                    <span>Kolkata</span>
                                </div>

                                <p>
                                    Lorem Ipsum is simply dummy text of the printing and
                                    typesetting industry.
                                </p>

                                <a href="#">Learn more</a>
                            </div>
                        </div>
                        <div class="swiper-slide swiper-slide-active" style="width: 412px; margin-right: 30px"
                            role="group" aria-label="1 / 6">
                            <div class="Welcome_deal_slider_img">
                                <img src="./images/WelcomeDeal1.png" alt="" />
                            </div>

                            <div class="Destination_content">
                                <div class="Destination_price">
                                    <button>Staring at ₹444</button>
                                    <span>Kolkata</span>
                                </div>

                                <p>
                                    Lorem Ipsum is simply dummy text of the printing and
                                    typesetting industry.
                                </p>

                                <a href="#">Learn more</a>
                            </div>
                        </div>
                        <div class="swiper-slide swiper-slide-active" style="width: 412px; margin-right: 30px"
                            role="group" aria-label="1 / 6">
                            <div class="Welcome_deal_slider_img">
                                <img src="./images/WelcomeDeal1.png" alt="" />
                            </div>

                            <div class="Destination_content">
                                <div class="Destination_price">
                                    <button>Staring at ₹444</button>
                                    <span>Kolkata</span>
                                </div>

                                <p>
                                    Lorem Ipsum is simply dummy text of the printing and
                                    typesetting industry.
                                </p>

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
        <!--! Hotel  -->

        <!-- ! Welcome Deal Slider  -->
        <div class="Welcome_deal_slider scroll-area-4 scroll-area">
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
        <!-- ! Welcome Deal Slider  -->

        <!--  !Our Client  -->
        <div class="Our_Client scroll-area-5 scroll-area">
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
                                    non facere nesciunt ut earum, qui aliquid quaerat magni,
                                    amet, pariatur consectetur?
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
                                    non facere nesciunt ut earum, qui aliquid quaerat magni,
                                    amet, pariatur consectetur?
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
                                    non facere nesciunt ut earum, qui aliquid quaerat magni,
                                    amet, pariatur consectetur?
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
                                    non facere nesciunt ut earum, qui aliquid quaerat magni,
                                    amet, pariatur consectetur?
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-button-next" tabindex="0" role="button" aria-label="Next slide"
                        aria-controls="swiper-wrapper-e7faa50136bfe445" aria-disabled="false"></div>
                    <div class="swiper-button-prev swiper-button-disabled" tabindex="-1" role="button"
                        aria-label="Previous slide" aria-controls="swiper-wrapper-5059b029dc110b1a8"
                        aria-disabled="true">
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </div>
        <!--  !Our Client  -->
    </div>


    <!-- <div class="popup_main">
                                                                                                                                                                                                                                <div class="Login_popup">
                                                                                                                                                                                                                                  <div class="container">
                                                                                                                                                                                                                                    <div class="Popup_profile">
                                                                                                                                                                                                                                      <div class="popup_header">
                                                                                                                                                                                                                                        <div class="Profile_name_img">
                                                                                                                                                                                                                                          <div class="login_img_box">
                                                                                                                                                                                                                                            <img src="./images/UserProfile.png" alt="">
                                                                                                                                                                                                                                          </div>

                                                                                                                                                                                                                                          <div class="Profile_name">
                                                                                                                                                                                                                                            <span>Person Name</span>
                                                                                                                                                                                                                                            <small>Image Adress (Jpeg image)</small>
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
                                                                                                                                                                                                                                                <input type="text" placeholder="Person Name">
                                                                                                                                                                                                                                              </div>
                                                                                                                                                                                                                                            </div>
                                                                                                                                                                                                                                          </div>


                                                                                                                                                                                                                                          <div class="User_name_box">
                                                                                                                                                                                                                                            <div>
                                                                                                                                                                                                                                              <label for="name">Phone Number</label>
                                                                                                                                                                                                                                              <div class="Name_box_input">
                                                                                                                                                                                                                                                <input type="text" placeholder="91+ 888666XXXX">
                                                                                                                                                                                                                                              </div>
                                                                                                                                                                                                                                            </div>
                                                                                                                                                                                                                                          </div>
                                                                                                                                                                                                                                        </div>
                                                                                                                                                                                                                                        <div class="User_2_card">
                                                                                                                                                                                                                                          <div class="User_name_box">
                                                                                                                                                                                                                                            <div>
                                                                                                                                                                                                                                              <label for="name">Email Address</label>
                                                                                                                                                                                                                                              <div class="Name_box_input">
                                                                                                                                                                                                                                                <input type="text" placeholder="PersonName123@gmail.com">
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
                                                                                                                                                                                                                              </div> -->

    <!-- <div class="Password_verify">
                                                                                                                                                                                                                                <div class="Verify_box">
                                                                                                                                                                                                                                  <h4>Please enter the One-Time Password to verify your account</h4>
                                                                                                                                                                                                                                  <span>A One-Time Password has been sent to 985*******</span>

                                                                                                                                                                                                                                  <form class="otp-form" name="otp-form">


                                                                                                                                                                                                                                    <div class="otp-input-fields">
                                                                                                                                                                                                                                      <input type="number" class="otp__digit otp__field__1">
                                                                                                                                                                                                                                      <input type="number" class="otp__digit otp__field__2">
                                                                                                                                                                                                                                      <input type="number" class="otp__digit otp__field__3">
                                                                                                                                                                                                                                      <input type="number" class="otp__digit otp__field__4">
                                                                                                                                                                                                                                      <input type="number" class="otp__digit otp__field__5">
                                                                                                                                                                                                                                      <input type="number" class="otp__digit otp__field__6">
                                                                                                                                                                                                                                    </div>

                                                                                                                                                                                                                                  </form>

                                                                                                                                                                                                                                  <button class="Validate">Validate</button>

                                                                                                                                                                                                                                  <div class="Resend_pass">
                                                                                                                                                                                                                                    <p>Resend One-Time Password</p>
                                                                                                                                                                                                                                    <span>Entered a wrong number?</span>
                                                                                                                                                                                                                                  </div>



                                                                                                                                                                                                                                  <div class="Registration_done">
                                                                                                                                                                                                                                    <div class="confirm_icon_box">
                                                                                                                                                                                                                                      <img src="./images/confirm.png" alt="">
                                                                                                                                                                                                                                    </div>
                                                                                                                                                                                                                                    <p>Congratulations on your registration!</p>
                                                                                                                                                                                                                                    <button>Ok</button>
                                                                                                                                                                                                                                  </div>
                                                                                                                                                                                                                                </div>
                                                                                                                                                                                                                              </div> -->

    <!-- <div class="Password_verify">
                                                                                                                                                                                                                                <div class="Verify_box_1">
                                                                                                                                                                                                                                 <div class="pass_reset_con">
                                                                                                                                                                                                                                  <div class="pass_reset_1">
                                                                                                                                                                                                                                    <div class="vali_img">
                                                                                                                                                                                                                                      <img src="./images/Setpasowrdimg.png" alt="">
                                                                                                                                                                                                                                    </div>
                                                                                                                                                                                                                                  </div>
                                                                                                                                                                                                                                  <div class="pass_reset_2">
                                                                                                                                                                                                                                    <h4>Password reset</h4>
                                                                                                                                                                                                                                    <span>We sent a code to <strong>+91 - 888666XXXX</strong> </span>
                                                                                                                                                                                                                              
                                                                                                                                                                                                                                    <form class="otp-form" name="otp-form">
                                                                                                                                                                                                                              
                                                                                                                                                                                                                              
                                                                                                                                                                                                                                      <div class="otp-input-fields_1">
                                                                                                                                                                                                                                        <input type="number" class="otp__digit otp__field__1">
                                                                                                                                                                                                                                        <input type="number" class="otp__digit otp__field__2">
                                                                                                                                                                                                                                        <input type="number" class="otp__digit otp__field__3">
                                                                                                                                                                                                                                        <input type="number" class="otp__digit otp__field__4">
                                                                                                                                                                                                                                        <input type="number" class="otp__digit otp__field__5">
                                                                                                                                                                                                                                        <input type="number" class="otp__digit otp__field__6">
                                                                                                                                                                                                                                      </div>
                                                                                                                                                                                                                              
                                                                                                                                                                                                                                    </form>
                                                                                                                                                                                                                              
                                                                                                                                                                                                                                  <div class="new_validate">
                                                                                                                                                                                                                                    <button class="Validate">Validate</button>
                                                                                                                                                                                                                              
                                                                                                                                                                                                                                    <div class="Resend_pass">
                                                                                                                                                                                                                                      <p>Didn't receive the OTP? <strong>Click to resend</strong></p>
                                                                                                                                                                                                                                      <span>← Back to log in</span>
                                                                                                                                                                                                                                  </div>
                                                                                                                                                                                                                                  </div>
                                                                                                                                                                                                                                 </div>
                                                                                                                                                                                                                                  </div>



                                                                                                                                                                                                                                  <div class="Registration_done">
                                                                                                                                                                                                                                    <div class="confirm_icon_box">
                                                                                                                                                                                                                                      <img src="./images/confirm.png" alt="">
                                                                                                                                                                                                                                    </div>
                                                                                                                                                                                                                                    <p>Congratulations on your registration!</p>
                                                                                                                                                                                                                                    <button>Ok</button>
                                                                                                                                                                                                                                  </div>
                                                                                                                                                                                                                                </div>
                                                                                                                                                                                                                              </div> -->

    <!--
                                                                                                                                                                                                                              <div class="Sign_in_box">
                                                                                                                                                                                                                                <p>Sign In</p>
                                                                                                                                                                                                                                <div class="list_property">
                                                                                                                                                                                                                                  <a href="#">Sign In</a>
                                                                                                                                                                                                                                  <a href="#" class="Create_acc">Create Account</a>
                                                                                                                                                                                                                                  <button>List Your Property</button>
                                                                                                                                                                                                                                </div>
                                                                                                                                                                                                                              </div> -->

    <!-- <div class="Person_info">
                                                                                                                                                                                                                                <div class="person_box">
                                                                                                                                                                                                                                  <div class="User_img"><img src="./images/UserProfile.png" alt=""></div>
                                                                                                                                                                                                                                  <div class="person_name_box">
                                                                                                                                                                                                                                    <p>Person Name</p>
                                                                                                                                                                                                                                    <span>Image Adress (Jpeg image)</span>
                                                                                                                                                                                                                                  </div>
                                                                                                                                                                                                                                </div>
                                                                                                                                                                                                                                <ul class="Res_navlist">
                                                                                                                                                                                                                                  <li><a href="#">Home</a></li>
                                                                                                                                                                                                                                  <li><a href="#">My Profile</a></li>
                                                                                                                                                                                                                                  <li><a href="#">About Us</a></li>
                                                                                                                                                                                                                                  <li><a href="#">Hotels</a></li>
                                                                                                                                                                                                                                  <li><a href="#">Our Blogs</a></li>
                                                                                                                                                                                                                                  <li><a href="#">Booking</a></li>
                                                                                                                                                                                                                                  <li><a href="#">Rating</a></li>
                                                                                                                                                                                                                                  <li class="our_team_list"><a href="#">Our Terms <img src="./images/Circle_drop.png" alt=""></a>
                                                                                                                                                                                                                                    <div class="Our_list_dropdown">
                                                                                                                                                                                                                                      <ul>
                                                                                                                                                                                                                                        <li><a href="#">Terms and Conditions</a></li>
                                                                                                                                                                                                                                        <li><a href="#">Privacy Policy</a></li>
                                                                                                                                                                                                                                      </ul>
                                                                                                                                                                                                                                    </div>
                                                                                                                                                                                                                                  </li>

                                                                                                                                                                                                                                </ul>

                                                                                                                                                                                                                                <div class="Logout">
                                                                                                                                                                                                                                  <button>Logout</button>
                                                                                                                                                                                                                                </div>
                                                                                                                                                                                                                              </div> -->

    <!-- <div class="Sign_pop">
                                                                                                                                                                                                                                <div class="Sign_box">
                                                                                                                                                                                                                                <div class="close_btn">
                                                                                                                                                                                                                                  <button class="cls">&#x2715;</button>
                                                                                                                                                                                                                                </div>
                                                                                                                                                                                                                                  <div class="row">
                                                                                                                                                                                                                                    <div class="col-md-6">
                                                                                                                                                                                                                                      <div class="sign">
                                                                                                                                                                                                                                        <p class="sign_header_title">Sign in</p>
                                                                                                                                                                                                                                        <span>For security, please sign in to access your information</span>

                                                                                                                                                                                                                                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                                                                                                                                                                                                                                          <li class="nav-item" role="presentation">
                                                                                                                                                                                                                                            <button class="nav-link nav_Email active" id="home-tab" data-bs-toggle="tab"
                                                                                                                                                                                                                                              data-bs-target="#home-tab-pane" type="button" role="tab" aria-controls="home-tab-pane"
                                                                                                                                                                                                                                              aria-selected="true">Email</button>
                                                                                                                                                                                                                                          </li>
                                                                                                                                                                                                                                          <li class="nav-item" role="presentation">
                                                                                                                                                                                                                                            <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile-tab-pane"
                                                                                                                                                                                                                                              type="button" role="tab" aria-controls="profile-tab-pane" aria-selected="false">Mobile</button>
                                                                                                                                                                                                                                          </li>
                                                                                                                                                                                                                                        </ul>
                                                                                                                                                                                                                                        <div class="tab-content" id="myTabContent">
                                                                                                                                                                                                                                          <div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab"
                                                                                                                                                                                                                                            tabindex="0">

                                                                                                                                                                                                                                            <div class="Forgetpassword_content setpassword sign_email">

                                                                                                                                                                                                                                              <div class="Password_input_1">
                                                                                                                                                                                                                                                <label for="">Email Address</label>
                                                                                                                                                                                                                                                <div class="Name_input">
                                                                                                                                                                                                                                                  <input type="email" placeholder="Enter Your Email Address">
                                                                                                                                                                                                                                                </div>

                                                                                                                                                                                                                                              </div>
                                                                                                                                                                                                                                              <div class="Password_input_1">
                                                                                                                                                                                                                                                <label for="">Password</label>
                                                                                                                                                                                                                                                <div class="Name_input">
                                                                                                                                                                                                                                                  <input type="password" placeholder="Enter Your Email Password">
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
                                                                                                                                                                                                                                                  <a href="#"><img src="./images/Google.png" alt="" width="35px"></a>
                                                                                                                                                                                                                                                  <a href="#"><img src="./images/Facebook.png" alt="" width="35px"></a>
                                                                                                                                                                                                                                                  <a href="#"><img src="./images/Apple.png" alt="" width="36px"></a>
                                                                                                                                                                                                                                                </div>


                                                                                                                                                                                                                                                <p class="Privacy_policy_para">
                                                                                                                                                                                                                                                  By logging in, I understand & agree to <span>Welrm Terms</span> of use and <span>Privacy
                                                                                                                                                                                                                                                    Policy</span>
                                                                                                                                                                                                                                                </p>
                                                                                                                                                                                                                                              </div>


                                                                                                                                                                                                                                            </div>
                                                                                                                                                                                                                                          </div>
                                                                                                                                                                                                                                          <div class="tab-pane fade" id="profile-tab-pane" role="tabpanel" aria-labelledby="profile-tab"
                                                                                                                                                                                                                                            tabindex="0">



                                                                                                                                                                                                                                            <div class="Forgetpassword_content setpassword sign_email">


                                                                                                                                                                                                                                              <label for="">Mobile Number</label>
                                                                                                                                                                                                                                              <div class="Flag_input">
                                                                                                                                                                                                                                                <div>
                                                                                                                                                                                                                                                  <input type="text" id="mobile_code">
                                                                                                                                                                                                                                                </div>

                                                                                                                                                                                                                                                <div class="Password_input_1">
                                                                                                                                                                                                                                                  <div class="Name_input">
                                                                                                                                                                                                                                                    <input type="number" placeholder="Enter Your Mobile Number">
                                                                                                                                                                                                                                                  </div>
                                                                                                                                                                                                                                                </div>
                                                                                                                                                                                                                                              </div>
                                                                                                                                                                                                                                              <div class="Password_input_1">
                                                                                                                                                                                                                                                <label for="">Password</label>
                                                                                                                                                                                                                                                <div class="Name_input">
                                                                                                                                                                                                                                                  <input type="password" placeholder="Enter Your Email Password">
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
                                                                                                                                                                                                                                            

                                                                                                                                                                                                                                                <p class="Privacy_policy_para">
                                                                                                                                                                                                                                                  By logging in, I understand &amp; agree to <span>Welrm Terms</span> of use and <span>Privacy
                                                                                                                                                                                                                                                    Policy</span>
                                                                                                                                                                                                                                                </p>
                                                                                                                                                                                                                                              </div>


                                                                                                                                                                                                                                            </div>
                                                                                                                                                                                                                                          </div>

                                                                                                                                                                                                                                        </div>

                                                                                                                                                                                                                                      </div>
                                                                                                                                                                                                                                    </div>



                                                                                                                                                                                                                                    <div class="col-md-6">
                                                                                                                                                                                                                                      <div class="sign_in_right_banner">
                                                                                                                                                                                                                                        <img src="./images/SignBanner.png" alt="">
                                                                                                                                                                                                                                      </div>

                                                                                                                                                                                                                                      <div class="log">

                                                                                                                                                                                                                                        <p>Log in to to unlock more benefits!</p>
                                                                                                                                                                                                                                        <ul class="Sing_list">
                                                                                                                                                                                                                                          <li>Best Price Guarantee on bookings</li>
                                                                                                                                                                                                                                          <li>Access our best insider and VIP deals</li>
                                                                                                                                                                                                                                          <li>Earn AgodaCash to save even more</li>
                                                                                                                                                                                                                                          <li>Collect bookings towards your next VIP status</li>
                                                                                                                                                                                                                                        </ul>
                                                                                                                                                                                                                                      </div>
                                                                                                                                                                                                                                    </div>
                                                                                                                                                                                                                                  </div>
                                                                                                                                                                                                                                </div> -->

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
                                                <button class="nav-link nav_Email active" id="home-tab"
                                                    data-bs-toggle="tab" data-bs-target="#home-tab-pane" type="button"
                                                    role="tab" aria-controls="home-tab-pane" aria-selected="true">
                                                    Email
                                                </button>
                                            </li>
                                            <li class="nav-item" role="presentation">
                                                <button class="nav-link" id="profile-tab" data-bs-toggle="tab"
                                                    data-bs-target="#profile-tab-pane" type="button" role="tab"
                                                    aria-controls="profile-tab-pane" aria-selected="false">
                                                    Mobile
                                                </button>
                                            </li>
                                        </ul>
                                        <div class="tab-content" id="myTabContent">
                                            <div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel"
                                                aria-labelledby="home-tab" tabindex="0">
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
                                                                <input name="email" type="email"
                                                                    placeholder="Enter Your Email Address" />
                                                            </div>
                                                        </div>
                                                        <div class="Password_input_1">
                                                            <label for="">Password</label>
                                                            <div class="Name_input">
                                                                <input name="password" type="password"
                                                                    placeholder="Enter Your Password" />
                                                            </div>
                                                        </div>

                                                        <div>
                                                            <button type="submit" class="Sign_btn">Sign In</button>

                                                            <div class="Sign_btn_labels">
                                                                <a href="#">Create Account</a>
                                                                <a href="#">Forgot Password</a>
                                                            </div>
                                                        </div>
                                                    </form>

                                                    <div class="Log_with">
                                                        <div class="log">
                                                            <span>Or Log in with</span>
                                                        </div>
                                                        <div class="log_w_link">
                                                            <a href="#">
                                                                <ion-icon name="logo-google"></ion-icon>
                                                            </a>
                                                            <a href="#">
                                                                <ion-icon name="logo-facebook"></ion-icon>
                                                            </a>
                                                            <a href="#">
                                                                <ion-icon name="logo-apple"></ion-icon>
                                                            </a>
                                                        </div>

                                                        <p class="Privacy_policy_para">
                                                            By logging in, I understand & agree to
                                                            <span>Welrm Terms</span> of use and
                                                            <span>Privacy Policy</span>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="profile-tab-pane" role="tabpanel"
                                                aria-labelledby="profile-tab" tabindex="0">
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
                                                                        <input name="mobile" type="number"
                                                                            placeholder="Enter Your Mobile Number" />
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="Password_input_1">
                                                            <label for="">Password</label>
                                                            <div class="Name_input">
                                                                <input name="password" type="password"
                                                                    placeholder="Enter Your Email Password" />
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

                                                            <p class="Privacy_policy_para">
                                                                By logging in, I understand &amp; agree to
                                                                <span>Welrm Terms</span> of use and
                                                                <span>Privacy Policy</span>
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
                                        <img src="./images/SignBanner.png" alt="" />
                                    </div>

                                    <div class="log">
                                        <p>Log in to to unlock more benefits!</p>
                                        <ul class="Sing_list">
                                            <li>Best Price Guarantee on bookings</li>
                                            <li>Access our best insider and VIP deals</li>
                                            <li>Earn AgodaCash to save even more</li>
                                            <li>Collect bookings towards your next VIP status</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--
                                                                                                                                                                                                                                <div class="Sign_pop">
                                                                                                                                                                                                                                  <div class="Sign_box">
                                                                                                                                                                                                                                    <div class="close_btn">
                                                                                                                                                                                                                                      <button class="cls">&#x2715;</button>
                                                                                                                                                                                                                                    </div>
                                                                                                                                                                                                                                    <div class="row">
                                                                                                                                                                                                                                      <div class="col-md-6">
                                                                                                                                                                                                                                        <div class="sign">
                                                                                                                                                                                                                                          <p class="sign_header_title">Sign in</p>
                                                                                                                                                                                                                                          <span
                                                                                                                                                                                                                                            >For security, please sign in to access your information</span
                                                                                                                                                                                                                                          >

                                                                                                                                                                                                                                          <ul class="nav nav-tabs" id="myTab" role="tablist">
                                                                                                                                                                                                                                            <li class="nav-item" role="presentation">
                                                                                                                                                                                                                                              <button
                                                                                                                                                                                                                                                class="nav-link nav_Email active"
                                                                                                                                                                                                                                                id="home-tab"
                                                                                                                                                                                                                                                data-bs-toggle="tab"
                                                                                                                                                                                                                                                data-bs-target="#home-tab-pane"
                                                                                                                                                                                                                                                type="button"
                                                                                                                                                                                                                                                role="tab"
                                                                                                                                                                                                                                                aria-controls="home-tab-pane"
                                                                                                                                                                                                                                                aria-selected="true"
                                                                                                                                                                                                                                              >
                                                                                                                                                                                                                                                Email
                                                                                                                                                                                                                                              </button>
                                                                                                                                                                                                                                            </li>
                                                                                                                                                                                                                                            <li class="nav-item" role="presentation">
                                                                                                                                                                                                                                              <button
                                                                                                                                                                                                                                                class="nav-link"
                                                                                                                                                                                                                                                id="profile-tab"
                                                                                                                                                                                                                                                data-bs-toggle="tab"
                                                                                                                                                                                                                                                data-bs-target="#profile-tab-pane"
                                                                                                                                                                                                                                                type="button"
                                                                                                                                                                                                                                                role="tab"
                                                                                                                                                                                                                                                aria-controls="profile-tab-pane"
                                                                                                                                                                                                                                                aria-selected="false"
                                                                                                                                                                                                                                              >
                                                                                                                                                                                                                                                Mobile
                                                                                                                                                                                                                                              </button>
                                                                                                                                                                                                                                            </li>
                                                                                                                                                                                                                                          </ul>
                                                                                                                                                                                                                                          <div class="tab-content" id="myTabContent">
                                                                                                                                                                                                                                            <div
                                                                                                                                                                                                                                              class="tab-pane fade show active"
                                                                                                                                                                                                                                              id="home-tab-pane"
                                                                                                                                                                                                                                              role="tabpanel"
                                                                                                                                                                                                                                              aria-labelledby="home-tab"
                                                                                                                                                                                                                                              tabindex="0"
                                                                                                                                                                                                                                            >
                                                                                                                                                                                                                                              <div class="Forgetpassword_content setpassword sign_email">
                                                                                                                                                                                                                                                <div class="Password_input_1">
                                                                                                                                                                                                                                                  <label for="">Email Address</label>
                                                                                                                                                                                                                                                  <div class="Name_input">
                                                                                                                                                                                                                                                    <input
                                                                                                                                                                                                                                                      type="email"
                                                                                                                                                                                                                                                      placeholder="Enter Your Email Address"
                                                                                                                                                                                                                                                    />
                                                                                                                                                                                                                                                  </div>
                                                                                                                                                                                                                                                </div>
                                                                                                                                                                                                                                                <div class="Password_input_1">
                                                                                                                                                                                                                                                  <label for="">Password</label>
                                                                                                                                                                                                                                                  <div class="Name_input">
                                                                                                                                                                                                                                                    <input
                                                                                                                                                                                                                                                      type="password"
                                                                                                                                                                                                                                                      placeholder="Enter Your Password"
                                                                                                                                                                                                                                                    />
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
                                                                                                                                                                                                                                                    <a href="#"
                                                                                                                                                                                                                                                      ><img src="./images/Google.png" alt="" width="35px"
                                                                                                                                                                                                                                                    /></a>
                                                                                                                                                                                                                                                    <a href="#"
                                                                                                                                                                                                                                                      ><img
                                                                                                                                                                                                                                                        src="./images/Facebook.png"
                                                                                                                                                                                                                                                        alt=""
                                                                                                                                                                                                                                                        width="35px"
                                                                                                                                                                                                                                                    /></a>
                                                                                                                                                                                                                                                    <a href="#"
                                                                                                                                                                                                                                                      ><img src="./images/Apple.png" alt="" width="36px"
                                                                                                                                                                                                                                                    /></a>
                                                                                                                                                                                                                                                  </div>

                                                                                                                                                                                                                                                  <p class="Privacy_policy_para">
                                                                                                                                                                                                                                                    By logging in, I understand & agree to
                                                                                                                                                                                                                                                    <span>Welrm Terms</span> of use and
                                                                                                                                                                                                                                                    <span>Privacy Policy</span>
                                                                                                                                                                                                                                                  </p>
                                                                                                                                                                                                                                                </div>
                                                                                                                                                                                                                                              </div>
                                                                                                                                                                                                                                            </div>
                                                                                                                                                                                                                                            <div
                                                                                                                                                                                                                                              class="tab-pane fade"
                                                                                                                                                                                                                                              id="profile-tab-pane"
                                                                                                                                                                                                                                              role="tabpanel"
                                                                                                                                                                                                                                              aria-labelledby="profile-tab"
                                                                                                                                                                                                                                              tabindex="0"
                                                                                                                                                                                                                                            >
                                                                                                                                                                                                                                              <div class="Forgetpassword_content setpassword sign_email">
                                                                                                                                                                                                                                              <div>
                                                                                                                                                                                                                                                <label for="" class="Mobile_num">Mobile Number</label>
                                                                                                                                                                                                                                                <div class="Flag_input">
                                                                                                                                                                                                                                                  <div>
                                                                                                                                                                                                                                                    <input type="text" id="mobile_code" />
                                                                                                                                                                                                                                                  </div>

                                                                                                                                                                                                                                                  <div class="Password_input_1">
                                                                                                                                                                                                                                                    <div class="Name_input">
                                                                                                                                                                                                                                                      <input
                                                                                                                                                                                                                                                        type="number"
                                                                                                                                                                                                                                                        placeholder="Enter Your Mobile Number"
                                                                                                                                                                                                                                                      />
                                                                                                                                                                                                                                                    </div>
                                                                                                                                                                                                                                                  </div>
                                                                                                                                                                                                                                                </div>
                                                                                                                                                                                                                                              </div>
                                                                                                                                                                                                                                                <div class="Password_input_1">
                                                                                                                                                                                                                                                  <label for="">Password</label>
                                                                                                                                                                                                                                                  <div class="Name_input">
                                                                                                                                                                                                                                                    <input
                                                                                                                                                                                                                                                      type="password"
                                                                                                                                                                                                                                                      placeholder="Enter Your Email Password"
                                                                                                                                                                                                                                                    />
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

                                                                                                                                                                                                                                                  <p class="Privacy_policy_para">
                                                                                                                                                                                                                                                    By logging in, I understand &amp; agree to
                                                                                                                                                                                                                                                    <span>Welrm Terms</span> of use and
                                                                                                                                                                                                                                                    <span>Privacy Policy</span>
                                                                                                                                                                                                                                                  </p>
                                                                                                                                                                                                                                                </div>
                                                                                                                                                                                                                                              </div>
                                                                                                                                                                                                                                            </div>
                                                                                                                                                                                                                                          </div>
                                                                                                                                                                                                                                        </div>
                                                                                                                                                                                                                                      </div>

                                                                                                                                                                                                                                      <div class="col-md-6">
                                                                                                                                                                                                                                        <div class="sign_in_right_banner">
                                                                                                                                                                                                                                          <img src="./images/SignBanner.png" alt="" />
                                                                                                                                                                                                                                        </div>

                                                                                                                                                                                                                                        <div class="log">
                                                                                                                                                                                                                                          <p>Log in to to unlock more benefits!</p>
                                                                                                                                                                                                                                          <ul class="Sing_list">
                                                                                                                                                                                                                                            <li>Best Price Guarantee on bookings</li>
                                                                                                                                                                                                                                            <li>Access our best insider and VIP deals</li>
                                                                                                                                                                                                                                            <li>Earn AgodaCash to save even more</li>
                                                                                                                                                                                                                                            <li>Collect bookings towards your next VIP status</li>
                                                                                                                                                                                                                                          </ul>
                                                                                                                                                                                                                                        </div>
                                                                                                                                                                                                                                      </div>
                                                                                                                                                                                                                                    </div>
                                                                                                                                                                                                                                  </div>
                                                                                                                                                                                                                                </div> -->

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
                        {{-- @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif --}}
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
                                                            <input name="mobile" type="number"
                                                                placeholder="Enter Your Mobile Number" />
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
                                                    <input name="password_confirmation" type="password"
                                                        placeholder="Confirm Password" />
                                                </div>
                                            </div>

                                            <button type="submit" class="Sign_btn">Sign up</button>


                                            <div class="Log_with">
                                                <div class="log">
                                                    <span>Or Log in with</span>
                                                </div>
                                                <div class="log_w_link">
                                                    <a href="#">
                                                        <ion-icon name="logo-google"></ion-icon>
                                                    </a>
                                                    <a href="#">
                                                        <ion-icon name="logo-facebook"></ion-icon>
                                                    </a>
                                                    <a href="#">
                                                        <ion-icon name="logo-apple"></ion-icon>
                                                    </a>
                                                </div>

                                                <p class="Privacy_policy_para">
                                                    By logging in, I understand &amp; agree to
                                                    <span>Welrm Terms</span> of use and
                                                    <span>Privacy Policy</span>
                                                </p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="sign_in_right_banner">
                                            <img src="./images/SignBanner.png" alt="" />
                                        </div>

                                        <div class="log">
                                            <p>Log in to to unlock more benefits!</p>
                                            <ul class="Sing_list">
                                                <li>Best Price Guarantee on bookings</li>
                                                <li>Access our best insider and VIP deals</li>
                                                <li>Earn AgodaCash to save even more</li>
                                                <li>Collect bookings towards your next VIP status</li>
                                            </ul>
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

@endsection
