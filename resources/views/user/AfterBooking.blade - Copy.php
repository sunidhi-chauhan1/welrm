@extends('front.layouts.app')
@section('content')

@if(session('success'))
<div class="alert alert-success">
    {{ session('success') }}
</div>
@endif

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

              <label for="datepicker-3">

                <img src="./images/date-icon2.png" alt="">

              </label>

              <input type="text" id="datepicker-3" style="width: 1px; height: 1px; border: 0px; outline: 0px;"></input>

            </div>

          </div>

          <div class="location_card">

            <span>Check-In </span>

            <div class="date_section">

              <p>21-06-2023</p>

              <label for="datepicker-4">

                <img src="./images/date-icon2.png" alt="">

              </label>

              <input type="text" id="datepicker-4" style="width: 1px; height: 1px; border: 0px; outline: 0px;"></input>

            </div>

          </div>

          <div class="location_card Room_drop_card">

            <span>Rooms/Guests </span>

            <p>1 Room, 2 Guests</p>

            <div class="Room_dropdwon" id="After_Room_drop_Booking">

                <div class="Room_drop_card">

                  <div class="Room">

                    <div class="Rooom_tilte">

                      <p>Rooms</p>

                    </div>

                    <div class="Count">

                      <ion-icon name="remove-circle-outline" role="img" class="md hydrated"></ion-icon>

                      <p>2</p>

                      <ion-icon name="add-circle-outline" role="img" class="md hydrated"></ion-icon>

                    </div>

                  </div>

                  <div class="Room">

                    <div class="Rooom_tilte_1">

                      <p>Adults</p>

                      <p>Ages 18 or above</p>

                    </div>

                    <div class="Count">

                      <ion-icon name="remove-circle-outline" role="img" class="md hydrated"></ion-icon>

                      <p>2</p>

                      <ion-icon name="add-circle-outline" role="img" class="md hydrated"></ion-icon>

                    </div>

                  </div>

          

                  <div class="Room">

                    <div class="Rooom_tilte_1">

                      <p>Child</p>

                      <p>Ages 0-17</p>

                    </div>

                    <div class="Count">

                      <ion-icon name="remove-circle-outline" role="img" class="md hydrated"></ion-icon>

                      <p>2</p>

                      <ion-icon name="add-circle-outline" role="img" class="md hydrated"></ion-icon>

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



        </div>

          <div class="Update_btn">

            <button>Update Search</button>

            </div>

        </div>

      </div>

    </div>



    <div class="Filter_hotel_section">

      <div class="container">

        <div class="fiter_sec">

          <div class="filter_heading">

            <p>

              <span>Home</span

              ><ion-icon

                name="chevron-forward-outline"

                role="img"

                class="md hydrated"

              ></ion-icon

              >Bangalore, India Hotels (1993)

            </p>

          </div>



          <div class="Main_filter">

            <div class="Search_filter">

              <ion-icon

                name="search-outline"

                role="img"

                class="md hydrated"

              ></ion-icon>

              <input type="text" placeholder="Enter hotel location or Name" />

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

                <a href="#"><img src="./images/hotelGrid1.png" alt="" /></a>

              </div>

              <div class="menu1">

                <a href="#"><img src="./images/Hotelmenu1.png" alt="" /></a>

              </div>

            </div>



            <div class="show_result">

              <p><span>Showing</span> 1-20 of 100 results</p>

            </div>

          </div>

        </div>

      </div>

    </div>



    <div class="After_booking">

      <div class="container">

        <div class="After_booking_card_container">

          <div class="row">

            <div class="col-md-5">

              <div class="Booking_Card_1">

                <div class="A_booking_card_1">

                  <p>Welcome, Satish Kumar! (Not Satish Kumar? Sign out)</p>

                  <div class="Price_h">

                    <span>We are holding your price...</span>

                    <div class="Time">00:04:11</div>

                    <button>I need more time</button>

                  </div>



                  <p class="contact_d">Contact details</p>

                  <label for="Full Name">Full Name</label>

                  <div class="A_booking_input">

                    <input type="text" placeholder="Full Name" />

                  </div>

                  <label for="Email" class="A_booking_label">Email</label>

                  <div class="A_booking_input">

                    <input type="text" placeholder="Email " />

                  </div>



                  <span

                    >Your phone is required to help us verify your identity when

                    you contact us for support.</span

                  >



                  <label for="">Mobile Number</label>



                  <div class="Flag_input">

                    <div>

                      <input type="text" id="mobile_code_after_23" />

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



                  <div class="Contact_Support">

                    <div class="Support_header">

                      <span>Welrm Live Help</span> <button>Included</button>

                    </div>



                    <div class="Live_support">

                      <ion-icon name="checkmark-circle"></ion-icon>

                      <span>Live support 24/7</span>

                    </div>

                    <div class="Live_support Ls_2">

                      <ion-icon name="checkmark-circle"></ion-icon>

                      <span>Live support 24/7</span>

                    </div>

                  </div>

                </div>



                <div class="A_b_btn">

                  <button>Proceed for booking</button>

                </div>

              </div>

            </div>

            <div class="col-md-7">

              <div class="Discount_container">

                <div class="D_card_1">

                  <span class="D_today">70%-DISCOUNT</span>

                  <div class="D_title">

                    <h5>Welcome Welrm</h5>

                  </div>



                  <div class="D_star">

                    <ion-icon name="star"></ion-icon>

                    <ion-icon name="star"></ion-icon>

                    <ion-icon name="star"></ion-icon>

                    <ion-icon name="star"></ion-icon>

                    <ion-icon name="star"></ion-icon>

                  </div>

                  <p>

                    Lorem Ipsum is simply dummy text of the printing and

                    typesetting industry.

                  </p>



                  <span class="Near">-What's nearby?</span>



                  <div class="Selling_p">

                    <p>

                      <span>Selling out fast! </span>3 similar properties are

                      already sold out! Book your room before they're all gone.

                    </p>

                  </div>

                </div>



                <div class="Dis_row">

                  <span class="D_today">LOWEST PRICE!</span>



                  <div class="Room_date">

                    <p>4 Jul 2023 - 5 Jul 2023</p>

                    <div class="R_inside">

                      <p>1 Night</p>

                      <p>1x Heritage Room</p>

                    </div>

                    <div class="r_image">

                      <img

                        src="https://images.unsplash.com/photo-1611892440504-42a792e24d32?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mnx8aG90ZWwlMjByb29tfGVufDB8fDB8fHww&w=1000&q=80"

                        alt=""

                      />

                    </div>

                  </div>

                  <div class="R_book_card">







                    <a href="#">Change</a>



                    <div class="Room_information">

                      <span>1 room, 2 adults </span>

                      <span>Max: 2 adults, 1 child (0-12 years) </span>

                      <span>Breakfast </span>

                    </div>

                  </div>

                </div>



                <div class="Og_price">



                  <span class="D_today">70% OFF TODAY</span>

                  <table>

                    <tr>

                      <td>Original price (1 room x1 night)</td>

                      <td>₹ 10,999.00</td>

                    </tr>

                    <tr>

                      <td>Our price</td>

                      <td>₹ 4,034.76</td>

                    </tr>

                  </table>



                  <div class="Coupon">

                    <span>24HOURSALE Coupon applied</span>

                    <span>₹ 697.69</span>

                  </div>

                  <table>

                    <tr>

                      <td>Room price (1 room x 1 night)</td>

                      <td>₹ 3,337.07</td>

                    </tr>

                    <tr>

                      <td>Booking fees</td>

                      <td class="Free_b">FREE</td>

                    </tr>

                  </table>

                </div>



                <div class="d_Price">

                  <div class="P_con">

                    <small>Price</small>

                    <span>₹ 3,737.51</span>

                  </div>

                  <small>Included in price: Tax 12%</small>

                  <div class="P_match">

                    <span 

                    >We price match. Find it for less, and we'll match it!</span

                  >

                  </div>

                  <span>YOU SAVED ₹ 697.69 ON THIS BOOKING!</span>

                </div>

              </div>

            </div>

          </div>

        </div>

      </div>

    </div>

  <script

  src="https://kit.fontawesome.com/72aeadbf11.js"

  crossorigin="anonymous"

></script>

  



  <script

    type="module"

    src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"

  ></script>

  <script

    nomodule

    src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"

  ></script>

  <script

    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"

    integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"

    crossorigin="anonymous"

  ></script>



  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>



  <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>



  <script src="./js/script.js"></script>



  <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.13/js/intlTelInput-jquery.min.js"></script>



  <script>

    $( function() {

      $( "#datepicker-3" ).datepicker();

      $( "#datepicker-4" ).datepicker();

    } );

    </script>

  

  

  

  <script>



    

    $('#mobile_code_after_23').intlTelInput({

      initialCountry: 'in',

      separateDialCode: true,

    });





    const Room_drop_card = document.querySelector('.Room_drop_card');

    

    const After_Room_drop_Booking = document.querySelector('#After_Room_drop_Booking');

    Room_drop_card.addEventListener('click', ()=>{

        After_Room_drop_Booking.classList.toggle('BookingActive')

    })

    After_Room_drop_Booking.addEventListener('click', (e)=>{

        e.stopPropagation();

    })

  </script>
@endsection
