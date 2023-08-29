@extends('front.layouts.app')
@section('content')

@if(session('success'))
<div class="alert alert-success">
    {{ session('success') }}
</div>
@endif
@if(session('fail'))
<div class="alert alert-success">
    {{ session('fail') }}
</div>
@endif

<div class="header_banner scroll-area">
    <div class="container heading">
        <h1 class="">
            Find Your Best Stay <br />
            WITH THE HOTEL CHAIN
        </h1>
    </div>
    .
</div>
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
                    <div class="Exclusive_offer_slilder">
              <div class="swiper Exclusive_offer swiper-initialized swiper-horizontal swiper-backface-hidden">


                <div class="swiper-wrapper" id="swiper-wrapper-715f59cbef29eaf4" aria-live="polite" style="transition-duration: 0ms; transform: translate3d(0px, 0px, 0px);">
                  <div class="swiper-slide swiper-slide-active" style="width: 546px; margin-right: 20px;" role="group" aria-label="1 / 4">
                    <div class="Exc_cards_slider">
                      <div class="Ex_cards">
                        <div class="Ex_img">
                          <img src="https://images.unsplash.com/photo-1611892440504-42a792e24d32?ixlib=rb-4.0.3&amp;ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mnx8aG90ZWwlMjByb29tfGVufDB8fDB8fHww&amp;w=1000&amp;q=80" alt="">
                        </div>

                        <div class="Ex_content">
                          <h4>Great Deal.</h4>
                          <p> Get Up To 50% Off on Hotels Booking. Let's enjoy your vacation..</p>
                          <button>Book Now</button>
                          <span>Valid till 31st August 2023 </span>
                        </div>
                      </div>
                      <div class="Ex_cards">
                        <div class="Ex_img">
                          <img src="https://images.unsplash.com/photo-1611892440504-42a792e24d32?ixlib=rb-4.0.3&amp;ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mnx8aG90ZWwlMjByb29tfGVufDB8fDB8fHww&amp;w=1000&amp;q=80" alt="">
                        </div>

                        <div class="Ex_content">
                          <h4>Great Deal.</h4>
                          <p> Get Up To 50% Off on Hotels Booking. Let's enjoy your vacation.
                            .</p>
                          <button>Book Now</button>
                          <span>Valid till 31st August 2023 </span>
                        </div>
                      </div>
                      <div class="Ex_cards">
                        <div class="Ex_img">
                          <img src="https://images.unsplash.com/photo-1611892440504-42a792e24d32?ixlib=rb-4.0.3&amp;ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mnx8aG90ZWwlMjByb29tfGVufDB8fDB8fHww&amp;w=1000&amp;q=80" alt="">
                        </div>

                        <div class="Ex_content">
                          <h4>Great Deal.</h4>
                          <p> Get Up To 50% Off on Hotels Booking. Let's enjoy your vacation.
                            .</p>
                          <button>Book Now</button>
                          <span>Valid till 31st August 2023 </span>
                        </div>
                      </div>
                      <div class="Ex_cards">
                        <div class="Ex_img">
                          <img src="https://images.unsplash.com/photo-1611892440504-42a792e24d32?ixlib=rb-4.0.3&amp;ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mnx8aG90ZWwlMjByb29tfGVufDB8fDB8fHww&amp;w=1000&amp;q=80" alt="">
                        </div>

                        <div class="Ex_content">
                          <h4>Great Deal.</h4>
                          <p> Get Up To 50% Off on Hotels Booking. Let's enjoy your vacation.
                            .</p>
                          <button>Book Now</button>
                          <span>Valid till 31st August 2023 </span>
                        </div>
                      </div>
                    </div>



                  </div>
                  <div class="swiper-slide swiper-slide-next" style="width: 546px; margin-right: 20px;" role="group" aria-label="2 / 4">Slide 2</div>
                  <div class="swiper-slide" style="width: 546px; margin-right: 20px;" role="group" aria-label="3 / 4">Slide 3</div>
                  <div class="swiper-slide" role="group" aria-label="4 / 4" style="width: 546px; margin-right: 20px;">Slide 4</div>
                </div>
                <div class="E_Offer_slider_btn">
                  <div class="swiper-button-next" tabindex="0" role="button" aria-label="Next slide" aria-controls="swiper-wrapper-715f59cbef29eaf4" aria-disabled="false"></div>
                  <div class="swiper-button-prev swiper-button-disabled" tabindex="-1" role="button" aria-label="Previous slide" aria-controls="swiper-wrapper-715f59cbef29eaf4" aria-disabled="true"></div>
                </div>
              <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>


            </div>
                </div>


                <!-- search form -->
                <div class="col-md-6">

                    <form action="{{route('hotelSearch')}}" method="GET">


                        <div class="Hotel_info_container" id="hotel">
                            <div class="Rooms_location">
                                <div class="Check_container">
                                    <div>
                                        <input type="radio" name="inputGrp" id="Hello" onclick="showBothDivs()" checked />
                                        <label for="Hello"><span>Overnight</span></label>
                                    </div>
                                    <div>
                                        <input type="radio" name="inputGrp" id="Day" onclick="hideCheckOut()" />
                                        <label for="Day"><span>Day Use Stays</span></label>
                                    </div>
                                </div>
                                <div class="City_details_cards">
                                    <div class="Location_input">
                                        <input type="text" class="form-control city_input" placeholder="Enter City name, Location or Specific hotel" name="search" value="" />
                                    </div>
                                    <div class="hotel_list_"></div>

                                    <div class="Hotel_book">
                                        <img src="./images/HouseIcon.png" alt="" />
                                        <img src="./images/HouseIcon.png" alt="" />
                                    </div>
                                </div>
                                <script type="text/javascript" src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js"></script>
                                <script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
                                <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
                                <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
                                <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.2/css/bootstrap.min.css">


                                <script type="text/javascript">
                                const today = new Date();
                                const yyyy = today.getFullYear();
                                let mm = today.getMonth() + 1;
                                let dd = today.getDate();
                                let tt = today.getDate() + 1;

                                if (tt < 10) tt = '0' + tt;
                                if (dd < 10) dd = '0' + dd;
                                if (mm < 10) mm = '0' + mm;

                                const DateToday = mm + '/' + dd + '/' + yyyy;
                                const DateTommo = mm + '/' + tt + '/' + yyyy;

                                $(function() {
                                    start = DateToday;
                                    end = DateTommo;
                                    autoApply: true,

                                    $('#reportrange').daterangepicker({
                                    startDate: DateToday,
                                    endDate: DateTommo,
                                    }, function(DateToday, DateTommo) {
                                    let start_date = new Date(DateToday);
                                    let my_start_date = (start_date.getMonth() + 1) + '/' + start_date.getDate() + '/' + start_date.getFullYear();

                                    let end_date = new Date(DateTommo);
                                    let my_end_date = (end_date.getMonth() + 1) + '/' + end_date.getDate() + '/' + end_date.getFullYear();

                                    $('#dates1').html(my_start_date);
                                    $('#dates2').html(my_end_date);
                                    $('#strtdate').val(my_start_date);
                                    $('#enddate').val(my_end_date);
                                    
                                    });

                                    $('#dates1').html(DateToday); // Set initial date to DateToday
                                    $('#dates2').html(DateTommo);
                                });
                                </script>
                                <div id="reportrange" style="background: #fff; margin-top:5px; cursor: pointer; padding: 5px 10px; border: 1px solid #ccc;" name="date2">
                                    <i class="fa fa-calendar">

                                    </i>&nbsp;
                                    <div class="Checks_cards_1">
                                        <div class="check_box" id="check_in">
                                            <img src="./images/date-icon2.png" alt="" />
                                            <span>Check-In</span>
                                            <span id="dates1"></span>
                                            <input type="text" name="strtdate" id="strtdate" value="" hidden>
                                        </div>
                                        &nbsp;&nbsp;
                                        <div class="check_box" id="check_out">
                                            <img src="./images/date-icon2.png" alt="" />
                                            <span>Check-Out</span>
                                            <span id="dates2"></span>
                                            <input type="text" name="enddate" id="enddate" value="" hidden>

                                        </div>
                                    </div>


                                    <i class="fa fa-caret-down"></i>
                                </div>
                                <div class="Rooms_card">
                                    <p>Rooms & Guests</p>
                                    <div class="select_rooms">
                                        <div class="s_room_user">
                                            <img src="./images/UserVecter.png" alt="" />
                                        </div>
                                        <div>
                                            <p>Guests & Rooms</p>
                                            <p>1 Adults | 0 Child | 1 Room</p>
                                            <p>
                                                <span id="adultCount">2</span> Adults | <span id="childCount">0</span> Child
                                                | <span id="roomCount">1</span> Room
                                            </p>
                                        </div>
                                    </div>
                                    <div class="Room_dropdwon" id="Home_Room_booking">
                                        <div class="Room_drop_card">
                                            <div class="Room">
                                                <div class="Rooom_tilte"><p>Rooms</p></div>
                                                <div class="Count">
                                                    <ion-icon name="add-circle-outline" role="img" class="md hydrated dec" id="increment-count"></ion-icon>
                                                    <div><p id="total-count"></p><input type="number" id="WRooms" name="roomcounttt" value="" hidden></div>
                                                    <ion-icon name="remove-circle-outline" role="img" class="md hydrated inc" id="decrement-count"></ion-icon>
                                                </div> 
                                            </div>

                                            <div class="Room">
                                                <div class="Rooom_tilte_1"><p>Adults</p><p>Ages 18 or above</p></div>
                                                <div class="Count">
                                                    <ion-icon name="add-circle-outline" role="img" class="md hydrated dec" id="increment-adult"></ion-icon>
                                                    <div><p id="total-adult"></p><input type="number" id="adult" name="adult" value="" hidden></div>
                                                    <ion-icon name="remove-circle-outline" role="img" class="md hydrated inc" id="decrement-adult"></ion-icon>
                                                </div>                                              
                                                
                                            </div>
                                            <div class="Room">
                                                <div class="Rooom_tilte_1">
                                                    <p>Child</p>
                                                    <p>Ages 0-17</p>
                                                    <input type="number" name="rooms" hidden>
                                                </div>
                                                <div class="Count">
                                                    <ion-icon name="remove-circle-outline" role="img" class="md hydrated dec"></ion-icon>
                                                    <p>2</p>
                                                    <ion-icon name="add-circle-outline" role="img" class="md hydrated inc">
                                                    </ion-icon>
                                                </div>
                                            </div>
                                            <div class="A_child">
                                                <p>Ages of Child 1</p>
                                                <div class="a_down">
                                                    <p>6</p>
                                                    <ion-icon name="chevron-down-outline" role="img" class="md hydrated"></ion-icon>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div></div>
                                </div>
                                <div class="Search_btn">
                                <div class="offer_btn">
                                        <button type="submit" >search</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </form>
                </div>

                <!-- search form end -->




            </div>
        </div>
    </div>
    <!-- ! Offer section  -->
    <!-- ! Hero section  -->
    <div class="Hero_section scroll-area-1 scroll-area">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h2>Our Mission</h2>
                    <p>One of our missions is to provide you with the best hospitality services to satisfy the expectations of
                        the customers. We aim to provide the best rooms for vacations and certain business meetings.
                    </p>
                    <p>
                        We focus on providing the highest standards of service quality and will continue to uphold the reputation
                        which we have among the guests, partners, and the wider community. We use amazing technologies and focus
                        on embracing the changes in the modern world of today to make it more interesting to our guests and
                        partners.
                    </p>
                </div>
                <div class="col-md-6">
                    <div class="hero_img">
                        <img src="./images/Hero.png" alt="">
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
                        <img src="./images/Hero2.png" alt="">
                    </div>
                </div>

                <div class="col-md-6">
                    <h2>Our Story</h2>
                    <h6>Why Welrm?</h6>
                    <p>
                        Yes, this, the question might sound astonishing but let us have look at good reasons to choose us which
                        were provided to us as feedback:</p>
                    <ul class="Our_list_content">
                        <li>Our Team: “Your rooms feel like home” was one of the best feedback provided by our clients. Our main
                            goal is to let you live an unforgettable and exciting vacation with customized itineraries according to
                            your choices. We share smiles and happiness through our customer-friendly relationships. </li> <br>
                        <li>Hospitality: High-quality services and charm is what we believe in. Our guests tell us about the
                            beautiful and pleasing living rooms of Welrm. We are really happy as we put our heart and soul into our
                            work, and we try to pay attention to even small details.
                        </li> <br>

                        <li>Location: Location is what matters, far from the city and free from the chaos where people can enjoy
                            every moment of vacation. We provide different hotels and rooms all around India with the best of
                            amenities.</li>
                    </ul>
                    <button>Lorem ipsum</button>
                </div>
                <div class="Email_box">
                    <div class="Enter_email">
                        <input type="text" placeholder="Enter Your Email">
                    </div>
                    <a href="#"><img src="./images/SendEmail.png" alt=""></a>
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
                Lorem Ipsum is simply dummy text of the printing <br>
                and typesetting industry
            </p>
            <div class="swiper Destiniations_slider swiper-initialized swiper-horizontal swiper-free-mode swiper-backface-hidden">
                <div class="swiper-wrapper" id="swiper-wrapper-e7faa50136bfe445" aria-live="polite">
                    <div class="swiper-slide swiper-slide-active" style="width: 352px; margin-right: 30px;" role="group" aria-label="1 / 5">
                        <div class="item">
                            <div class="news-wrapper">
                                <div class="news-img">
                                    <img src="https://media.istockphoto.com/id/843823656/photo/hotel-room.jpg?s=612x612&amp;w=0&amp;k=20&amp;c=8-ZNA52e5GlPuuQPXqZRgsTO9WRZwZgFtDotyC6CGHY=" alt="">
                                </div>
                                <div class="Hotel_N_content news-text">
                                    <div class="Price_div">
                                        <button class="Price_b_btn">Staring at ₹444</button>
                                        <span>Kolkata</span>
                                    </div>

                                    <p> "Get Up To 50% Off on Hotels Booking. Let's enjoy your vacation.
                                        .</p>

                                    <a href="#">Learn more</a>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide swiper-slide-next" style="width: 352px; margin-right: 30px;" role="group" aria-label="2 / 5">
                        <div class="item">
                            <div class="news-wrapper">
                                <div class="news-img">
                                    <img src="https://media.istockphoto.com/id/843823656/photo/hotel-room.jpg?s=612x612&amp;w=0&amp;k=20&amp;c=8-ZNA52e5GlPuuQPXqZRgsTO9WRZwZgFtDotyC6CGHY=" alt="">
                                </div>
                                <div class="Hotel_N_content news-text">
                                    <div class="Price_div">
                                        <button class="Price_b_btn">Staring at ₹444</button>
                                        <span>Kolkata</span>
                                    </div>

                                    <p> "Get Up To 50% Off on Hotels Booking. Let's enjoy your vacation.
                                        .</p>

                                    <a href="#">Learn more</a>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide" style="width: 352px; margin-right: 30px;" role="group" aria-label="3 / 5">
                        <div class="item">
                            <div class="news-wrapper">
                                <div class="news-img">
                                    <img src="https://media.istockphoto.com/id/843823656/photo/hotel-room.jpg?s=612x612&amp;w=0&amp;k=20&amp;c=8-ZNA52e5GlPuuQPXqZRgsTO9WRZwZgFtDotyC6CGHY=" alt="">
                                </div>
                                <div class="Hotel_N_content news-text">
                                    <div class="Price_div">
                                        <button class="Price_b_btn">Staring at ₹444</button>
                                        <span>Kolkata</span>
                                    </div>

                                    <p> "Get Up To 50% Off on Hotels Booking. Let's enjoy your vacation.
                                        .</p>

                                    <a href="#">Learn more</a>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide" style="width: 352px; margin-right: 30px;" role="group" aria-label="4 / 5">
                        <div class="item">
                            <div class="news-wrapper">
                                <div class="news-img">
                                    <img src="https://media.istockphoto.com/id/843823656/photo/hotel-room.jpg?s=612x612&amp;w=0&amp;k=20&amp;c=8-ZNA52e5GlPuuQPXqZRgsTO9WRZwZgFtDotyC6CGHY=" alt="">
                                </div>
                                <div class="Hotel_N_content news-text">
                                    <div class="Price_div">
                                        <button class="Price_b_btn">Staring at ₹444</button>
                                        <span>Kolkata</span>
                                    </div>

                                    <p> "Get Up To 50% Off on Hotels Booking. Let's enjoy your vacation.
                                        .</p>

                                    <a href="#">Learn more</a>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide" style="width: 352px; margin-right: 30px;" role="group" aria-label="5 / 5">
                        <div class="item">
                            <div class="news-wrapper">
                                <div class="news-img">
                                    <img src="https://media.istockphoto.com/id/843823656/photo/hotel-room.jpg?s=612x612&amp;w=0&amp;k=20&amp;c=8-ZNA52e5GlPuuQPXqZRgsTO9WRZwZgFtDotyC6CGHY=" alt="">
                                </div>
                                <div class="Hotel_N_content news-text">
                                    <div class="Price_div">
                                        <button class="Price_b_btn">Staring at ₹444</button>
                                        <span>Kolkata</span>
                                    </div>

                                    <p> "Get Up To 50% Off on Hotels Booking. Let's enjoy your vacation.
                                        .</p>

                                    <a href="#">Learn more</a>

                                </div>
                            </div>
                        </div>
                    </div>


                </div>
                <div class="swiper-button-next" tabindex="0" role="button" aria-label="Next slide" aria-controls="swiper-wrapper-e7faa50136bfe445" aria-disabled="false"></div>
                <div class="swiper-button-prev swiper-button-disabled" tabindex="-1" role="button" aria-label="Previous slide" aria-controls="swiper-wrapper-e7faa50136bfe445" aria-disabled="true"></div>

                <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
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
                    @foreach($exclusive as $rooms)
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
                               <a href="{{route('bookhotel',$rooms->id)}}"> <h3>{{$rooms->hotelName}}</h3></a>
                            </div>
                            <div class="Slider_location">
                                <img src="./images/location-icon1.png" alt="" />
                                <span>location</span>
                            </div>
                            <div class="price_slider">
                                <p>From <del>₹ {{$rooms->hour24Price}}</del></p>
                                <p>₹ {{$rooms->hour12Price}}</p>
                            </div>
                            <div class="night">
                                <small>Per Night</small>
                            </div>

                        </div>

                    </div>
                    @endforeach
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
            <div class="swiper OurSlider swiper-initialized swiper-horizontal swiper-free-mode swiper-backface-hidden">
                <div class="swiper-wrapper" id="swiper-wrapper-c44124dd53d421010" aria-live="polite">
                    <div class="swiper-slide swiper-slide-active" style="width: 352px; margin-right: 30px;" role="group" aria-label="1 / 4">
                        <div class="User_review">
                            <div class="Our_Client_User_img">
                                <img src="https://t4.ftcdn.net/jpg/02/14/74/61/360_F_214746128_31JkeaP6rU0NzzzdFC4khGkmqc8noe6h.jpg" alt="">
                            </div>
                            <h2>Shivam Singh</h2>
                            <p>
                                “I left so early on my last day on April 10th that I didn’t get to say how much I enjoyed my stay with
                                you again this month. Your rooms are great, and your friendly help and attention to detail were much
                                appreciated"
                            </p>
                        </div>
                    </div>
                    <div class="swiper-slide swiper-slide-next" style="width: 352px; margin-right: 30px;" role="group" aria-label="2 / 4">
                        <div class="User_review">
                            <div class="Our_Client_User_img">
                                <img src="https://t4.ftcdn.net/jpg/02/14/74/61/360_F_214746128_31JkeaP6rU0NzzzdFC4khGkmqc8noe6h.jpg" alt="">
                            </div>
                            <h2>Aman Gupta</h2>
                            <p>
                                Room had been upgraded to v good standard Good breakfast and helpful staff Microwave a pleasant
                                surprise
                            </p>
                        </div>
                    </div>
                    <div class="swiper-slide" style="width: 352px; margin-right: 30px;" role="group" aria-label="3 / 4">
                        <div class="User_review">
                            <div class="Our_Client_User_img">
                                <img src="https://t4.ftcdn.net/jpg/02/14/74/61/360_F_214746128_31JkeaP6rU0NzzzdFC4khGkmqc8noe6h.jpg" alt="">
                            </div>
                            <h2>Amit Singh</h2>
                            <p>
                                For the price and location a very nice hotel. Nice staff, Nice breakfast (vegetarian options as well),
                                rooms and bathrooms are a bit small but nothing to complain about (since the price), good "sound
                                isolation" between the rooms as far as we could notice.
                            </p>
                        </div>
                    </div>
                    <div class="swiper-slide" role="group" aria-label="4 / 4" style="width: 352px; margin-right: 30px;">
                        <div class="User_review">
                            <div class="Our_Client_User_img">
                                <img src="https://t4.ftcdn.net/jpg/02/14/74/61/360_F_214746128_31JkeaP6rU0NzzzdFC4khGkmqc8noe6h.jpg" alt="">
                            </div>
                            <h2>Manoj Signh</h2>
                            <p>
                                The friendliness of staff, good breakfast, comfortable rooms and the outside terrace was absolutely
                                lovely
                            </p>
                        </div>
                    </div>
                </div>
                <div class="swiper-button-next" tabindex="0" role="button" aria-label="Next slide" aria-controls="swiper-wrapper-c44124dd53d421010" aria-disabled="false"></div>
                <div class="swiper-button-prev swiper-button-disabled" tabindex="-1" role="button" aria-label="Previous slide" aria-controls="swiper-wrapper-c44124dd53d421010" aria-disabled="true"></div>
                <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
            </div>
        </div>
    </div>
    <!--  !Our Client  -->
</div>

<script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>


<script>
      const Exclusive_slider = new Swiper(".Exclusive_offer", {
        nextButton: '.swiper-button-next',
        prevButton: '.swiper-button-prev',
        slidesPerView: 1,
        paginationClickable: true,
        spaceBetween: 20,


        pagination: {
          el: ".swiper-pagination",
          type: "progressbar",
        },
        navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev",
        },
      });
    </script>


<script>

    const Room_drop_card = document.querySelector('.Room_drop_card');
    Room_drop_card.addEventListener('click', (e)=>{
   e.stopPropagation()
    })
    window.onload = (event) => {
        const Rooms_card_p = document.querySelector('.Rooms_card');
        const Home_Room_booking = document.querySelector('#Home_Room_booking');
        Rooms_card_p.addEventListener('click', () => {
            Home_Room_booking.classList.toggle('HomeActive')
        })
    };
</script>
<script>
    function showBothDivs() {
        $('#check_out').removeClass('d-none');
    }
</script>
<script>
    function hideCheckOut() {
        $('#check_out').addClass('d-none');
    };
</script>

<script>
    $(function() {       

$('.city_input').keyup(function() {
    var info = $(this).val();

    $.ajax({
        type: "GET",
        url: "{{ route('hotels-searching') }}",
        data: { query: info},
        success: function(data) {
            // alert(data);
            $(".hotel_list_").html(data);
        }
    });
});
$(document).on('click', 'li', function() {
   
    var value = $(this).text();
    $(".city_input").val(value);
    $("#hotel_list").html("");
$('.list-group').css('display', 'none');    
    });


});



</script>
<!-- <script>
    $(document).on('click','.list-group-item',function(){

        $('.list-group').css('display', 'none');
    });
</script> -->

<script>
    const incrementCount = document.getElementById("increment-count");
    const decrementCount = document.getElementById("decrement-count");
    const totalCount = document.getElementById("total-count");
    const totalRoom = document.getElementById("WRooms");

    var count = 0;
    totalCount.innerHTML = count;
    totalRoom.value = count;


    const handleIncrement = () => {
        count++;
        totalCount.innerHTML = count;
        totalRoom.value = count;
    };

    const handleDecrement = () => {
        count--;
        totalCount.innerHTML = count;
        totalRoom.value = count;
    };

    incrementCount.addEventListener("click", handleIncrement);
    decrementCount.addEventListener("click", handleDecrement);
</script>

<script>
    const incrementAdult = document.getElementById("increment-Adult");
    const decrementAdult = document.getElementById("decrement-Adult");
    const totalAdult = document.getElementById("total-adult");
    const numAdult = document.getElementById("Adult");

    var countAdult = 0;
    totalAdult.innerHTML = countAdult;
    numAdult.value = countAdult;


    const incrementAdult = () => {
        countAdult++;
        totalAdult.innerHTML = countAdult;
        numAdult.value = countAdult;
    };

    const decrementAdult = () => {
        countAdult--;
        totalAdult.innerHTML = countAdult;
        numAdult.value = countAdult;
    };

    incrementAdult.addEventListener("click", incrementAdult);
    decrementAdult.addEventListener("click", decrementAdult);
</script>

<script>


    </script>
@endsection