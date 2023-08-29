<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
<link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">


<div class="city_details_container">
  <div class="container">
    <form action="{{route('hotelSearch')}}" method="GET">
      <div class="details_cards_container">
        <div class="location_card">
          <div class="Hotel_list_search">
            <input type="text" class="form-control city_input" placeholder="Enter City name, Location or Specific hotel" name="search" value="">
          </div>
          <div class="Hotel_list_book">
            <div class="Hotel_book">
              <img src="./images/HouseIcon.png" alt="">
              <img src="./images/HouseIcon.png" alt="">
            </div>
          </div>
        </div>
        <div class="location_card">
          @php
          $timezone = new DateTimeZone('Asia/Kolkata'); $bookingTillDate = new DateTime(NULL, $timezone);
          $formattedDay = $bookingTillDate->format(' F j, Y'); $nextDay = clone $bookingTillDate;
          $nextDay->modify('+1 day'); $formattedNextDay = $nextDay->format('l, F j, Y');
          @endphp

          <span>Check-In </span>
          <div class="date_section">
            <p>{{$formattedDay}}</p>
            <label for="datepickerB-0">
              <img src="./images/date-icon2.png" alt="">
            </label>
            <input type="text" id="datepickerB-0" style="width: 1px; height: 1px; border: 0px; outline: 0px;"></input>
          </div>
        </div>
        <div class="location_card">
          <span>Check-Out </span>
          <div class="date_section">


            <p>{{$formattedNextDay}}</p>
            <label for="datepickerB-1">
              <img src="./images/date-icon2.png" alt="">
            </label>
            <input type="text" id="datepickerB-1" style="width: 1px; height: 1px; border: 0px; outline: 0px;"></input>
          </div>
        </div>
        <div class="location_card Room_drop_card">
          <p>Rooms & Guests</p>
          <p>
            <span id="roomCount"></span> Room|
            <span id="adultCount"></span> Adults | <span id="childCount">No</span> Child
            <input type="number" name="total_guest" id="to_memb" value="" hidden>

          </p>




          <div class="Room_dropdwon" id="Room_drop_Booking">
            <div class="Room_drop_card">
              <div class="Room">
                <div class="Rooom_tilte">
                  <p>Rooms</p>
                </div>
                <div class="Count">
                  <ion-icon name="remove-circle-outline" role="img" class="md hydrated inc" id="decrement-count"></ion-icon>
                  <div>
                    <p id="total-count"></p><input type="number" id="WRooms" name="roomcounttt" value="" hidden>
                  </div>


                  <ion-icon name="add-circle-outline" role="img" class="md hydrated dec" id="increment-count"></ion-icon>
                </div>
              </div>

              <div class="Room">
                <div class="Rooom_tilte_1">
                  <p>Adults</p>
                  <p>Age 12+</p>
                </div>
                <div class="Count">
                  <ion-icon name="remove-circle-outline" role="img" class="md hydrated inc" id="decrement-adult"></ion-icon>
                  <div>
                    <p id="total-adult"></p>
                    <input type="number" id="adult" name="adult" value="" hidden>
                  </div>

                  <ion-icon name="add-circle-outline" role="img" class="md hydrated dec" id="increment-adult"></ion-icon>
                </div>
              </div>
              <div class="Room">
                <div class="Rooom_tilte_1">
                  <p>Child</p>
                  <p>Ages 0-12</p>
                </div>
                <div class="Count">

                  <ion-icon name="remove-circle-outline" role="img" class="md hydrated inc" id="decrement-child">
                  </ion-icon>

                  <p id="total-Child"></p>
                  <input type="number" id="child" name="child" value="" hidden>
                  <ion-icon name="add-circle-outline" role="img" class="md hydrated dec" id="increment-child"></ion-icon>
                </div>
              </div>

              <div class="Room updated_val">
                <button type='button-btn'>Done</button>
              </div>
              <!-- <div class="A_child">
                                                <p>Ages of Child 1</p>
                                                <div class="a_down">
                                                    <p>6</p>
                                                    <ion-icon name="chevron-down-outline" role="img" class="md hydrated"></ion-icon>
                                                </div>
                                            </div> -->
            </div>
          </div>

        </div>

        <div class="offer_btn_1">
          <button onclick="totalPeo()" type="submit">Search </button>
        </div>
      </div>
    </form>
  </div>
</div>



<!-- <div class="Filter_hotel_section">
        <div class="container">
            <div class="fiter_sec">
                <div class="filter_heading">
                    <p><span>Home</span><ion-icon name="chevron-forward-outline" role="img"
                            class="md hydrated"></ion-icon> Bangalore, India Hotels
                        (1993)</p>
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
                            <a href="#"><img src="{{asset('/images/hotelGrid1.png')}}" alt=""></a>
                        </div>
                        <div class="menu1">
                            <a href="#"><img src="{{asset('/images/Hotelmenu1.png')}}" alt=""></a>
                        </div>
                    </div>

                    <div class="show_result">
                        <p><span>Showing</span> 1-20 of 100 results</p>
                    </div>

                </div>
            </div>
        </div>
    </div> -->




<script src="https://kit.fontawesome.com/72aeadbf11.js" crossorigin="anonymous"></script>

<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script> -->

<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>




<!-- <script defer src="https://code.jquery.com/jquery-3.6.0.js"></script> -->
<script defer src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>


<script>
  const incrementCount = document.getElementById("increment-count");
  const decrementCount = document.getElementById("decrement-count");
  const totalCount = document.getElementById("total-count");
  const totalRoom = document.getElementById("WRooms");

  var count = 1;
  totalCount.innerHTML = count;
  totalRoom.value = count;
  $('#roomCount').html(count);


  const handleIncrement = () => {
    count++;
    totalCount.innerHTML = count;
    totalRoom.value = count;
    $('#roomCount').html(count);
  };

  const handleDecrement = () => {
    if (count > 0) {
      count--;
      totalCount.innerHTML = count;
      totalRoom.value = count;
      $('#roomCount').html(count);

    }

  };

  incrementCount.addEventListener("click", handleIncrement);
  decrementCount.addEventListener("click", handleDecrement);

  const incrementAdultBtn = document.getElementById("increment-adult");
  const decrementAdultBtn = document.getElementById("decrement-adult");
  const totalAdult = document.getElementById("total-adult");
  const numAdult = document.getElementById("adult");

  var countAdult = 2;
  totalAdult.innerHTML = countAdult;
  numAdult.value = countAdult;
  $('#adultCount').html(countAdult);


  const incrementAdult = () => {
    countAdult++;
    totalAdult.innerHTML = countAdult;
    numAdult.value = countAdult;
    $('#adultCount').html(countAdult);

  };

  const decrementAdult = () => {
    if (countAdult > 0) {
      countAdult--;
      totalAdult.innerHTML = countAdult;
      numAdult.value = countAdult;
      $('#adultCount').html(countAdult);
    }
  };

  incrementAdultBtn.addEventListener("click", incrementAdult);
  decrementAdultBtn.addEventListener("click", decrementAdult);

  const ChildBtnpls = document.getElementById("increment-child");
  const childBtnmins = document.getElementById("decrement-child");
  const totalChild = document.getElementById("total-Child");
  const numChild = document.getElementById("child");

  var countChild = 0;
  totalChild.innerHTML = countChild;
  numChild.value = countChild;


  const incChild = () => {
    countChild++;
    totalChild.innerHTML = countChild;
    numChild.value = countChild;
    $('#childCount').html(countChild);

  };

  const decChild = () => {
    if (countChild > 0) {
      countChild--;
      totalChild.innerHTML = countChild;
      numChild.value = countChild;
      $('#childCount').html(countChild);
    }
  };

  ChildBtnpls.addEventListener("click", incChild);
  childBtnmins.addEventListener("click", decChild);



  function totalPeo() {
    var TotalPeoples = countAdult + countChild;
    document.getElementById("to_memb").value = TotalPeoples;
  }
</script>


<script>
  $(function() {
    $("#datepickerB-0").datepicker();
    $("#datepickerB-1").datepicker();
    $("#dates2").html.datepicker();
  });

  const Room_drop_card = document.querySelector('.Room_drop_card');

  const Room_drop_Booking = document.querySelector('#Room_drop_Booking');
  Room_drop_card.addEventListener('click', () => {
    Room_drop_Booking.classList.toggle('BookingActive')
  })
  Room_drop_Booking.addEventListener('click', (e) => {
    e.stopPropagation();
  })
  const updated_val_btn = document.querySelector('.Room.updated_val button');
  updated_val_btn.addEventListener('click', (e) => {
    e.preventDefault()
    Room_drop_Booking.classList.remove('BookingActive')
  })
</script>


<script src="./js/script.js"></script>