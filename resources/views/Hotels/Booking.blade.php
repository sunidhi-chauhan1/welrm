<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
@extends('front.layouts.app')
@section('content')
@include('front.layouts.updateCalender')

<div class="Filter_hotel_section">
	<div class="container">
		<div class="fiter_sec">
			<div class="filter_heading">
				<p>
					<span>Home</span>
					<ion-icon name="chevron-forward-outline"></ion-icon>
					{{$hotel->hotelName}}
				</p>
			</div>
		</div>
	</div>
</div>
<div class="B_main">
	<div class="container">
		<div class="Booking_main_sec">
			<div class="B_main_slider">
				<div class="hotel_title_container Discount_slider_title">
					<h2>{{$hotel->hotelName}} <br> {{$hotel->city_Name}}</h2>
					<div class="Start_content">
						<div>
							<ion-icon name="star"></ion-icon>
							<ion-icon name="star"></ion-icon>
							<ion-icon name="star"></ion-icon>
							<ion-icon name="star"></ion-icon>
							<ion-icon name="star"></ion-icon>
						</div>
						<p>HOTEL</p>
					</div>
				</div>
				<div class="H_booking_slider">
					<div style="--swiper-navigation-color: #fff; --swiper-pagination-color: #fff" class="swiper MainBookingSlider">
						<div class="swiper-wrapper Hotel_b_m">
							<div class="swiper-slide">
								<img src="{{$bookRums->roomImage}}" />
							</div>
							<div class="swiper-slide">
								<img src="{{$bookRums->roomImage}}" />
							</div>
							<div class="swiper-slide">
								<img src="{{$bookRums->roomImage}}" />
							</div>
							<div class="swiper-slide">
								<img src="{{$bookRums->roomImage}}" />
							</div>
							<div class="swiper-slide">
								<img src="{{$bookRums->roomImage}}" />
							</div>
							<div class="swiper-slide">
								<img src="{{$bookRums->roomImage}}" />
							</div>
							<div class="swiper-slide">
								<img src="{{$bookRums->roomImage}}" />
							</div>
							<div class="swiper-slide">
								<img src="{{$bookRums->roomImage}}" />
							</div>
							<div class="swiper-slide">
								<img src="{{$bookRums->roomImage}}" />
							</div>
							<div class="swiper-slide">
								<img src="{{$bookRums->roomImage}}" />
							</div>
						</div>
						<div class="swiper-button-next"></div>
						<div class="swiper-button-prev"></div>
					</div>
					<div thumbsSlider="" class="swiper M_booking">
						<div class="swiper-wrapper MultinewSlider">
							<div class="swiper-slide">
								<img src="{{$bookRums->roomImage}}" />
							</div>
							<div class="swiper-slide">
								<img src="{{$bookRums->roomImage}}" />
							</div>
							<div class="swiper-slide">
								<img src="{{$bookRums->roomImage}}" />
							</div>
							<div class="swiper-slide">
								<img src="{{$bookRums->roomImage}}" />
							</div>
							<div class="swiper-slide">
								<img src="{{$bookRums->roomImage}}" />
							</div>
							<div class="swiper-slide">
								<img src="{{$bookRums->roomImage}}" />
							</div>
							<div class="swiper-slide">
								<img src="{{$bookRums->roomImage}}" />
							</div>
							<div class="swiper-slide">
								<img src="{{$bookRums->roomImage}}" />
							</div>
							<div class="swiper-slide">
								<img src="{{$bookRums->roomImage}}" />
							</div>
							<div class="swiper-slide">
								<img src="{{$bookRums->roomImage}}" />
							</div>
						</div>
					</div>
				</div>
				<!-- <div class="Room_details">
				<p>Room Photo and Details</p>
				
				</div> -->
			</div>

			<form action="{{route('confirmBooking', $bookRums->room_id)}}" method="get">
				<div class="Booking_container_1">
					<div class="B_contaner_cards Low_price_box">
						<p class="for_para">Benefits</p>
						<div class="Benifit_container">
							<p class="Lowest_price">Lowest price available!</p>
							<div class="Food_details_con">
								<p>Your price includes:</p>
								<div class="Cancellation_check_box">
									<div class="P_cancellation">
										<input type="radio" name="Cancellation" id="">
										<span>Cancellation policy</span>
									</div>
									<div class="P_cancellation">
										@if($bookRums->breakfast_available == 1)
										<input type="checkbox" name="Cancellation" id="" checked>
										<span>Breakfast for ₹ {{$bookRums->breakfast_price}} <small>Included</small> </span>
										@else
										<span>Breakfast <small>Not Available</small> </span>
										@endif
									</div>
									<div class="P_cancellation">
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
								<div class="Rewarads">
									<p>Other rewards & discounts</p>
									<div class="h_sale">
										<button>24HOURSALE</button>
										<span>Coupon Code 24HOURSALE applied-₹. 623 off!</span>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="B_contaner_cards">
						<p class="for_para">Sleeps</p>
						<div class="Sleep_box">
							<span>1 kid under
								13 years
								stays FREE</span>
						</div>
					</div>
					<div class="B_contaner_cards">
						<p class="for_para">Payment & cancellation</p>
						<div class="Payment_can">
							<p>Cancellation</p>
							<div><input type="radio" name="Pay" id="Paymin1" checked> <span>Cancellation policy</span></div>
							<p>Payment</p>
							<div><input type="radio" name="Pay" id="Paymin" checked> <span>Pay at Hotel</span></div>
						</div>
					</div>
					<div class="B_contaner_cards">
						<p class="for_para">Price Per Night</p>
						<div class="P_nyt">
							<button>Save {{$bookRums->discount}}% Today!</button>
							<div class="price">
								<?php $discountedprice = $bookRums->hour24Price - ($bookRums->hour24Price * $bookRums->discount / 100); ?>
								<p>₹ {{$discountedprice}} -/only</p>
								<input type='text' name='price' value="{{$discountedprice}}" hidden>
							</div>
							<div class="Wishlist_btns">
								<button type="submit">Book Now</button>

								@if(Auth::user())
								@php $wishlisted = DB::table('WishLists')->where('userId', Auth::user()->id)->where('roomId', $bookRums->room_id)->first(); @endphp


								@if(( $wishlisted) != '')
								<a href="{{route('wishlist', $bookRums->room_id)}}">Add Wishlist</a>
								@else
								<a href="{{route('wishlist', $bookRums->room_id)}}">Remove Wishlist</a>
								@endif
								@endif
							</div>
						</div>
					</div>
				</div>
			</form>
		</div>
	</div>


	<script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
	<script>
		var swiper = new Swiper('.M_booking', {
			spaceBetween: 10,
			slidesPerView: 4,
			freeMode: true,
			watchSlidesProgress: true,
		});
		var swiper10 = new Swiper('.MainBookingSlider', {
			spaceBetween: 10,
			navigation: {
				nextEl: '.swiper-button-next',
				prevEl: '.swiper-button-prev',
			},
			thumbs: {
				swiper: swiper,
			},
		});
	</script>


	<!-- <script>
		$(function() {
			$("#datepicker").datepicker();
			$("#datepicker-2").datepicker();
		});
		const Room_drop_card = document.querySelector('.Room_drop_card');



		const Room_drop_Booking_Book = document.querySelector('#Room_drop_Booking_Book');

		Room_drop_card.addEventListener('click', () => {

			Room_drop_Booking_Book.classList.toggle('BookingActive')

		})

		Room_drop_Booking_Book.addEventListener('click', (e) => {

			e.stopPropagation();

		})
	</script> -->

	@endsection