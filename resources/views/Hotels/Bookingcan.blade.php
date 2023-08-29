@extends('front.layouts.app')
@section('content')
@include('front.layouts.updateCalender')

    <div class="Bookingcan">

        <div class="container">

            <nav>

                <div class="nav nav-tabs" id="nav-tab" role="tablist">

                    <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home"
                        type="button" role="tab" aria-controls="nav-home" aria-selected="true">Active Booking</button>

                    <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile"
                        type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Completed</button>

                    <button class="nav-link" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-contact"
                        type="button" role="tab" aria-controls="nav-contact" aria-selected="false">Cancelled</button>



                </div>

            </nav>

            <div class="tab-content" id="nav-tabContent">

                <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab"
                    tabindex="0">


                    <div class="Cancelled_Searchbar">
                        <div class="Can_Search">
                            <div class="can_search_box">
                                <ion-icon name="search-outline" role="img" class="md hydrated"></ion-icon>
                                <input type="text" placeholder="Search by booking ID">
                            </div>
                        </div>

                        <div class="Can_list">
                            <div class="cat_list">
                                <img src="./images/shortlisticon.png" alt="">
                            </div>

                            <span>Sort By:</span>
                            <span>Check in date<ion-icon name="chevron-down-outline" role="img"
                                    class="md hydrated"></ion-icon></span>
                        </div>
                    </div>

                    <div class="Booking_cancel_table Booking_active Booking_tab_1">
                        <table>
                            <thead>
                                <tr>
                                    <th> Guest</th>
                                    <th>Date Order</th>
                                    <th class="chk_in_out">CheckIn Date-CheckOut Date</span></th>
                                    <th> Hotel Name</th>
                                    <th>location</th>
                                    <th>Room Type</th>
                                    <th>Passcode</th>
                                    <th>Price</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($users as $user)
                                <tr>
                                    <td>
                                        <div class="Profile_name_img">                                            
                                            <div class="Profile_name">
                                                <span>{{$me->fullName}}</span>
                                                <small>{{$user->reservation_no}} </small>
                                            </div>
                                        </div>
                                    </td>
                                    <td>{{$user->createdAt}}</td>
                                    <td class="check_o">
                                        <p>Sunday,{{$user->checkin_date}} <span>02:10 PM</span></p>
                                        <p>Sunday,{{$user->bookingTillDate}} <span>02:10 PM</span></p>
                                    </td>
                                    <td>{{$user->HotelName}}</td>
                            
                                    <td>{{$user->address}}</td>
                                    <td>Lorem
                                        Ipsum
                                        is simply </td>

                                    <td>
                                  
                                        <small>Room No: {{$user->roomId}}</small>
                                    </td>
                                    <td>#</td>
                                    <td>₹6000</td>

                                    <td class="btn_th"><button>Cancel booking </button></td>
                                </tr>
                                <tr>

                                   


                                </tr>

                                <tr>
                                    <td colspan="6" style="display: none;">

                                        <div class="can_tab">
                                            <div class="Booking_content_tab">
                                                <p>"Are you sure? You want to cancel this booking"</p>
                                                <small>Please tell us a reason for cancellation and 3 checkboxes such
                                                    as</small>
                                            </div>
                                            <div class="Checkbox_tables">
                                                <p><input type="checkbox" name="" id=""> <span>So emergency occur</span>
                                                </p>
                                                <p><input type="checkbox" name="" id=""> <span>Change my mind</span></p>
                                                <p><input type="checkbox" name="" id=""> <span>Any other</span></p>
                                            </div>

                                            <div class="Back_btn">
                                                <button>Yes</button>
                                                <button>No</button>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach

                                <div class="_btns">
                   {{$datas->appends($_GET)->links()}}
                    <div class="swiper-button-next">Next</div>
                    <div class="swiper-button-prev">Previous</div>
                   </div>
                            </tbody>

                        </table>

                    </div>






                    <!-- ! Last Table  -->
                    <!-- <div class="Cancelled_Searchbar">
                        <div class="Can_Search">
                            <div class="can_search_box">
                                <ion-icon name="search-outline" role="img" class="md hydrated"></ion-icon>
                                <input type="text" placeholder="Search by booking ID">
                            </div>
                        </div>

                        <div class="Can_list">
                            <div class="cat_list">
                                <img src="./images/shortlisticon.png" alt="">
                            </div>

                            <span>Sort By:</span>
                            <span>Check in date<ion-icon name="chevron-down-outline" role="img"
                                    class="md hydrated"></ion-icon></span>
                        </div>
                    </div>


                    <div class="Booking_cancel_table Booking_active">

                        <table>

                            <thead>

                                <tr>

                                    <th> Hotel Name</th>

                                    <th>location</th>

                                    <th>Room Type</th>

                                    <th>Passcode</th>

                                    <th>Price</th>
                                    <th></th>


                                </tr>

                            </thead>





                            <tbody>

                                <tr>

                                    <td>Lorem Ipsum is simply dummy </td>

                                    <td>Lorem
                                        Ipsum
                                        is simply </td>

                                    <td>
                                        Queen A
                                        <small>Room No: 232</small>
                                    </td>
                                    <td>242498</td>
                                    <td>₹6000</td>

                                    <td class="btn_th"><button>Cancel booking </button></td>



                                </tr>
                                <tr>
                                    <td colspan="6">

                                        <div class="can_tab">
                                            <div class="Booking_content_tab">
                                                <p>"Are you sure? You want to cancel this booking"</p>
                                                <small>Please tell us a reason for cancellation and 3 checkboxes such
                                                    as</small>
                                            </div>
                                            <div class="Checkbox_tables">
                                                <p><input type="checkbox" name="" id=""> <span>So emergency occur</span>
                                                </p>
                                                <p><input type="checkbox" name="" id=""> <span>Change my mind</span></p>
                                                <p><input type="checkbox" name="" id=""> <span>Any other</span></p>
                                            </div>

                                            <div class="Back_btn">
                                                <button>No</button>
                                                <button>Yes</button>
                                            </div>

                                        </div>
                                    </td>
                                </tr>

                                <tr>

                                    <td>Lorem Ipsum is simply dummy </td>

                                    <td>Lorem
                                        Ipsum
                                        is simply </td>

                                    <td>
                                        Queen A
                                        <small>Room No: 232</small>
                                    </td>
                                    <td>242498</td>
                                    <td>₹6000</td>

                                    <td class="btn_th"><button>Cancel booking </button></td>



                                </tr>
                                <tr>

                                    <td>Lorem Ipsum is simply dummy </td>

                                    <td>Lorem
                                        Ipsum
                                        is simply </td>

                                    <td>
                                        Queen A
                                        <small>Room No: 232</small>
                                    </td>
                                    <td>242498</td>
                                    <td>₹6000</td>

                                    <td class="btn_th"><button>Cancel booking </button></td>



                                </tr>
                                <tr>

                                    <td>Lorem Ipsum is simply dummy </td>

                                    <td>Lorem
                                        Ipsum
                                        is simply </td>

                                    <td>
                                        Queen A
                                        <small>Room No: 232</small>
                                    </td>
                                    <td>242498</td>
                                    <td>₹6000</td>

                                    <td class="btn_th"><button>Cancel booking </button></td>



                                </tr>
                                <tr>

                                    <td>Lorem Ipsum is simply dummy </td>

                                    <td>Lorem
                                        Ipsum
                                        is simply </td>

                                    <td>
                                        Queen A
                                        <small>Room No: 232</small>
                                    </td>
                                    <td>242498</td>
                                    <td>₹6000</td>

                                    <td class="btn_th"><button>Cancel booking </button></td>



                                </tr>
                                <tr>

                                    <td>Lorem Ipsum is simply dummy </td>

                                    <td>Lorem
                                        Ipsum
                                        is simply </td>

                                    <td>
                                        Queen A
                                        <small>Room No: 232</small>
                                    </td>
                                    <td>242498</td>
                                    <td>₹6000</td>

                                    <td class="btn_th"><button>Cancel booking </button></td>



                                </tr>






                            </tbody>

                        </table>

                    </div> -->


                </div>

                <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab"
                    tabindex="0">
                    <div class="Cancelled_Searchbar">
                        <div class="Can_Search">
                            <div class="can_search_box">
                                <ion-icon name="search-outline" role="img" class="md hydrated"></ion-icon>
                                <input type="text" placeholder="Search by booking ID">
                            </div>
                        </div>

                        <div class="Can_list">
                            <div class="cat_list">
                                <img src="./images/shortlisticon.png" alt="">
                            </div>

                            <span>Sort By:</span>
                            <span>Check in date<ion-icon name="chevron-down-outline" role="img"
                                    class="md hydrated"></ion-icon></span>
                        </div>
                    </div>



                    <!-- !Completed  -->
                    <div class="Booking_compeleted_table">
                        <table>
                            <thead>
                                <tr>
                                    <th>CheckIn-CheckOut </th>
                                    <th> Hotel Name</th>
                                    <th>location</th>
                                    <th>Room Type</th>
                                    <th>Status</th>
                                    
                                </tr>
                            </thead>


                            <tbody>
                                <tr>
                                    <td>
                                        <div class="Check_in_box">
                                            <div>Sunday,22-06-2023-</div>
                                            <div>Sunday,23-06-2023</div>
                                        </div>
                                        <div class="check_in_time">
                                            <span>02:10 PM</span>
                                            <span>02:10 PM</span>
                                        </div>
                                    </td>
                                   
                                    <td>Lorem
                                        Ipsum
                                        is simply </td>
                                    <td> Dehradun 
                                    </td>
                                    <td>Queen A <br>
                                        <span>Room No: 232</span>
                                    </td>
                                    <td>Lorem
                                        Ipsum
                                        is simply </td>
                                        <th class="btn_th"><button>Book Now</button></th>
                                        <th class="btn_th"><button>Rate Us</button></th>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="Check_in_box">
                                            <div>Sunday,22-06-2023-</div>
                                            <div>Sunday,23-06-2023</div>
                                        </div>
                                        <div class="check_in_time">
                                            <span>02:10 PM</span>
                                            <span>02:10 PM</span>
                                        </div>
                                    </td>
                                   
                                    <td>Lorem
                                        Ipsum
                                        is simply </td>
                                        <td> Dehradun 
                                        </td>
                                    <td>Queen A <br>
                                        <span>Room No: 232</span>
                                    </td>
                                    <td>Lorem
                                        Ipsum
                                        is simply </td>
                                        <th class="btn_th"><button>Book Now</button></th>
                                        <th class="btn_th"><button>Rate Us</button></th>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="Check_in_box">
                                            <div>Sunday,22-06-2023-</div>
                                            <div>Sunday,23-06-2023</div>
                                        </div>
                                        <div class="check_in_time">
                                            <span>02:10 PM</span>
                                            <span>02:10 PM</span>
                                        </div>
                                    </td>
                                   
                                    <td>Lorem
                                        Ipsum
                                        is simply </td>
                                      <td> Dehradun 
                                    </td>
                                 
                                    <td>Queen A <br>
                                        <span>Room No: 232</span>
                                    </td>
                                    <td>Lorem
                                        Ipsum
                                        is simply </td>
                                        <th class="btn_th"><button>Book Now</button></th>
                                        <th class="btn_th"><button>Rate Us</button></th>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="Check_in_box">
                                            <div>Sunday,22-06-2023-</div>
                                            <div>Sunday,23-06-2023</div>
                                        </div>
                                        <div class="check_in_time">
                                            <span>02:10 PM</span>
                                            <span>02:10 PM</span>
                                        </div>
                                    </td>
                                  
                                    <td>Lorem
                                        Ipsum
                                        is simply </td>
                                        <td> Dehradun 
                                        </td>
                                    </td>
                                    <td>Queen A <br>
                                        <span>Room No: 232</span>
                                    </td>
                                    <td>Lorem
                                        Ipsum
                                        is simply </td>
                                        <th class="btn_th"><button>Book Now</button></th>
                                        <th class="btn_th"><button>Rate Us</button></th>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="Check_in_box">
                                            <div>Sunday,22-06-2023-</div>
                                            <div>Sunday,23-06-2023</div>
                                        </div>
                                        <div class="check_in_time">
                                            <span>02:10 PM</span>
                                            <span>02:10 PM</span>
                                        </div>
                                    </td>
                                   
                                    <td>Lorem
                                        Ipsum
                                        is simply </td>
                                        <td> Dehradun 
                                        </td>
                                    <td>Queen A <br>
                                        <span>Room No: 232</span>
                                    </td>
                                    <td>Lorem
                                        Ipsum
                                        is simply </td>
                                        <th class="btn_th"><button>Book Now</button></th>
                                        <th class="btn_th"><button>Rate Us</button></th>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="Check_in_box">
                                            <div>Sunday,22-06-2023-</div>
                                            <div>Sunday,23-06-2023</div>
                                        </div>
                                        <div class="check_in_time">
                                            <span>02:10 PM</span>
                                            <span>02:10 PM</span>
                                        </div>
                                    </td>
                                  
                                    <td>Lorem
                                        Ipsum
                                        is simply </td>
                                        <td> Dehradun 
                                        </td>
                                    <td>Queen A <br>
                                        <span>Room No: 232</span>
                                    </td>
                                    <td>Lorem
                                        Ipsum
                                        is simply </td>
                                        <th class="btn_th"><button>Book Now</button></th>
                                        <th class="btn_th"><button>Rate Us</button></th>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="Check_in_box">
                                            <div>Sunday,22-06-2023-</div>
                                            <div>Sunday,23-06-2023</div>
                                        </div>
                                        <div class="check_in_time">
                                            <span>02:10 PM</span>
                                            <span>02:10 PM</span>
                                        </div>
                                    </td>
                                  
                                    <td>Lorem
                                        Ipsum
                                        is simply </td>
                                        <td> Dehradun 
                                        </td>
                                    <td>Queen A <br>
                                        <span>Room No: 232</span>
                                    </td>
                                    <td>Lorem
                                        Ipsum
                                        is simply </td>
                                        <th class="btn_th"><button>Book Now</button></th>
                                        <th class="btn_th"><button>Rate Us</button></th>
                                </tr>
                            </tbody>
                        </table>
                    </div>


                    <!-- !Completed  -->

                </div>

                <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab"
                    tabindex="0">



                    <div class="Cancelled_Searchbar">

                        <div class="Can_Search">

                            <div class="can_search_box">

                                <ion-icon name="search-outline"></ion-icon>

                                <input type="text" placeholder="Search by booking ID">

                            </div>

                        </div>



                        <div class="Can_list">

                            <div class="cat_list">

                                <img src="./images/shortlisticon.png" alt="">

                            </div>



                            <span>Sort By:</span>

                            <span>Check in date<ion-icon name="chevron-down-outline"></ion-icon></span>

                        </div>

                    </div>



                    <div class="Booking_cancel_table">

                        <table>

                            <thead>

                                <tr>

                                    <th>Status</th>

                                    <th>Cancelled by</th>

                                    <th>Cancelled Reason</th>

                                    <th>Cancelled Date</th>

                                  

                                </tr>

                            </thead>





                            <tbody>

                                <tr>

                                    <td>Lorem

                                        Ipsum

                                        is simply </td>

                                    <td>Lorem

                                        Ipsum

                                        is simply </td>

                                    <td>Lorem

                                        Ipsum

                                        is simply </td>

                                    <td class="date_tab">Sunday,23-06-2023

                                        <span>02:10 PM</span>

                                    </td>


                                </tr>

                                <tr>

                                    <td>Lorem

                                        Ipsum

                                        is simply </td>

                                    <td>Lorem

                                        Ipsum

                                        is simply </td>

                                    <td>Lorem

                                        Ipsum

                                        is simply </td>

                                    <td class="date_tab">Sunday,23-06-2023

                                        <span>02:10 PM</span>

                                    </td>

                           

                                </tr>

                                <tr>

                                    <td>Lorem

                                        Ipsum

                                        is simply </td>

                                    <td>Lorem

                                        Ipsum

                                        is simply </td>

                                    <td>Lorem

                                        Ipsum

                                        is simply </td>

                                    <td class="date_tab">Sunday,23-06-2023

                                        <span>02:10 PM</span>

                                    </td>

                

                                </tr>

                                <tr>

                                    <td>Lorem

                                        Ipsum

                                        is simply </td>

                                    <td>Lorem

                                        Ipsum

                                        is simply </td>

                                    <td>Lorem

                                        Ipsum

                                        is simply </td>

                                    <td class="date_tab">Sunday,23-06-2023

                                        <span>02:10 PM</span>

                                    </td>


                                </tr>

                                <tr>

                                    <td>Lorem

                                        Ipsum

                                        is simply </td>

                                    <td>Lorem

                                        Ipsum

                                        is simply </td>

                                    <td>Lorem

                                        Ipsum

                                        is simply </td>

                                    <td class="date_tab">Sunday,23-06-2023

                                        <span>02:10 PM</span>

                                    </td>

              

                                </tr>

                                <tr>

                                    <td>Lorem

                                        Ipsum

                                        is simply </td>

                                    <td>Lorem

                                        Ipsum

                                        is simply </td>

                                    <td>Lorem

                                        Ipsum

                                        is simply </td>

                                    <td class="date_tab">Sunday,23-06-2023

                                        <span>02:10 PM</span>

                                    </td>

                  

                                </tr>

                                <tr>

                                    <td>Lorem

                                        Ipsum

                                        is simply </td>

                                    <td>Lorem

                                        Ipsum

                                        is simply </td>
                                    <td>Lorem
                                        Ipsum
                                        is simply </td>
                                    <td class="date_tab">Sunday,23-06-2023
                                        <span>02:10 PM</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Lorem
                                        Ipsum
                                        is simply </td>
                                    <td>Lorem
                                        Ipsum
                                        is simply </td>
                                    <td>Lorem
                                        Ipsum
                                        is simply </td>
                                    <td class="date_tab">Sunday,23-06-2023
                                        <span>02:10 PM</span>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
<script src="https://kit.fontawesome.com/72aeadbf11.js" crossorigin="anonymous"></script>
<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

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

<script src="./js/script.js"></script>


<script>
    
    const Room_drop_card = document.querySelector('.Room_drop_card');
      
      const Room_drop_Booking_Book = document.querySelector('#Room_drop_Booking_Book');
      Room_drop_card.addEventListener('click', ()=>{
          Room_drop_Booking_Book.classList.toggle('BookingActive')
      })
      Room_drop_Booking_Book.addEventListener('click', (e)=>{
          e.stopPropagation();
      })
    
    
    
  </script>

<script>
    $(function () {
      $("#datepicker").datepicker();
      $("#datepicker-2").datepicker();
    });
  </script>


@endsection
