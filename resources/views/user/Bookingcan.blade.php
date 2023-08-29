<style>
    .cancel_pop {
        display: none;
    }

    .Booking_active {
        overflow-y: hidden;
    }
    #buttn-id {
    /* box-shadow: 0 0 5px black; */
    padding: 0px 0px;
    font-size: 15px;
    /* border: 1px solid black; */
    background: #c80000;
    color: white;
    margin-right: 5px;
}
</style>


@extends('front.layouts.app')
@section('content')
@include('front.layouts.updateCalender')

<div class="Bookingcan">

    <div class="container">

        <nav>

            <div class="nav nav-tabs" id="nav-tab" role="tablist">

                <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">Active Booking</button>

                <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Completed</button>

                <button class="nav-link" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-contact" type="button" role="tab" aria-controls="nav-contact" aria-selected="false">Cancelled</button>



            </div>

        </nav>

        <div class="tab-content" id="nav-tabContent">

            <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab" tabindex="0">


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
                        <span>Check in date<ion-icon name="chevron-down-outline" role="img" class="md hydrated"></ion-icon></span>
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
                                            <span>{{$me->fullName}}</span><br>
                                            <small>{{$user->reservation_no}} </small>
                                        </div>
                                    </div>
                                </td>
                                <?php 
                                 $createdAt = \Carbon\Carbon::parse($user->createdAt); 
                                 $bookingDate = \Carbon\Carbon::parse($user->bookingFromDate);
                                 $bookingToDate = \Carbon\Carbon::parse($user->bookingToDate);
                                 ?>
                                <td>{{ $createdAt->format('d/M/Y h:i A') }}</td>

                                <td class="check_o">                                  
                                    <p><span>{{ $bookingDate->format('d M') }}</span> - <span>{{ $bookingToDate->format('d M, Y') }}</span></p>
                                </td>
                                <td>{{$user->HotelName}}</td>

                                <td>{{$user->address}}</td>
                                <td>{{$user->name}}<br><small>Room No: {{$user->roomId}}</small></td>
                                <td>₹{{$user->price}}</td>

                                <td class="btn_th"><button>Cancel booking </button></td>
                            </tr>
                            <tr>
                                <td colspan="6" class="cancel_pop">
                                    <div class="can_tab">
                                        <form action= "{{route('cancleroom', $user->roomId)}}" method="POST">
                                            @csrf
                                        <div class="Booking_content_tab">
                                            <p>"Are you sure? You want to cancel this booking"</p>
                                            <small>Please tell us a reason for cancellation and 3 checkboxes such
                                                as</small>
                                        </div>
                                        <div class="Checkbox_tables">
                                            <p><input type="radio" name="reason" id="" value="So emergency occur"> <span>So emergency occur</span>
                                            </p>
                                            <p><input type="radio" name="reason" id="" value="Change my mind"> <span>Change my mind</span></p>
                                            <p><input type="radio" name="reason" id="" value="Any other"> <span>Any other</span></p>
                                            <input type="text" name="number"  value="{{$user->reservation_no}}" hidden> 
                                        </div>

                                        <div class="Back_btn">
                                            <button >Yes</button>
                                        </div>
                                    </form>
                                    <div class="Back_btn">
                                        <button>No</button>
                                    </div>
                                    </div>
                                </td>
                            </tr>
                            @endforeach

                            <div class="_btns">
                                {{$users->appends($_GET)->links()}}
                            </div>
                        </tbody>
                    </table>
                </div>
                </div>

            <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab" tabindex="0">
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
                        <span>Check in date<ion-icon name="chevron-down-outline" role="img" class="md hydrated"></ion-icon></span>
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
                            @foreach($completed as $user)
                            <tr>
                                    <div class="Check_in_box">
                                    <?php 
                                 $createdAt = \Carbon\Carbon::parse($user->createdAt); 
                                 $bookingDate = \Carbon\Carbon::parse($user->bookingFromDate);
                                 $bookingToDate = \Carbon\Carbon::parse($user->bookingToDate);
                                 ?>

                                <td class="check_o">                                  
                                    <p><span>{{ $bookingDate->format('d M') }}</span> - <span>{{ $bookingToDate->format('d M, Y') }}</span></p>
                                    <div class="check_in_time">
                                    </div>
                                </td>
                                        
                                    </div>
                                  
                                </td>

                                <td>{{$user->HotelName}}</td>
                                <td>{{$user->address}}</td>
                                <td>{{$user->name}}<br><small>Room No: {{$user->roomId}}</small></td>
                                <td>Lorem Ipsumis simply </td>
                                <th class="btn_th"><a href="{{route('bookhotel',$user->roomId)}}" type= "button" class ="btn" id="buttn-id">Book Now</a></th>
                                
                                <th class="btn_th"><button>Rate Us</button></th>
                            </tr>
                            @endforeach

                            <div class="_btns">
                                {{$users->appends($_GET)->links()}}
                            </div>
                        </tbody>
                    </table>
                </div>


                <!-- !Completed  -->

            </div>

            <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab" tabindex="0">



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
                                <th>Hotesl</th>
                                <th>Status</th>
                                <th>Cancelled by</th>
                                <th>Cancelled Reason</th>
                                <th>Cancelled Date</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                @foreach($cancels as $cancle)
                                @php 
                                $cancelledBy = $cancle->cancelled_by; 
                                $sayMyName = DB::table('users')->where('id', $cancelledBy)->first();
                                @endphp

                                <td> {{$cancle->HotelName}} <br> <small>Room No:{{$cancle->roomId}}</small></td>
                                <td>{{$cancle->status}} </td>
                                <td>{{$sayMyName->fullName??'Not Available'}} <small>({{$sayMyName->userType?? ''}})</small> </td> 
                                <td>{{$cancle->cancelation_reason}} </td>
                                <td>{{$cancle->cancelation_date}} </td>
                                </td>
                                @endforeach

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

<script src="./js/script.js"></script>


<script>
    const btn_th = document.querySelectorAll('.btn_th button');
    const cancel_pop = document.querySelector('.cancel_pop');

    btn_th.forEach((item, index) => {
        console.log(item);

        item.addEventListener('click', () => {
            cancel_pop.style.display = 'block';
        })
    })
</script>


<script>
    const Room_drop_card = document.querySelector('.Room_drop_card');

    const Room_drop_Booking_Book = document.querySelector('#Room_drop_Booking_Book');
    Room_drop_card.addEventListener('click', () => {
        Room_drop_Booking_Book.classList.toggle('BookingActive')
    })
    Room_drop_Booking_Book.addEventListener('click', (e) => {
        e.stopPropagation();
    })
</script>

<script>
    $(function() {
        $("#datepicker").datepicker();
        $("#datepicker-2").datepicker();
    });
</script>


@endsection