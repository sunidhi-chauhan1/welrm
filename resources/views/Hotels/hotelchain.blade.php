@extends('front.layouts.app')
@section('content')

<!--! Contact  -->
<div class="Contact_banner">
    <div class="contact_content">
        <h2>Hotel Chain</h2>
        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>

    </div>
</div>

<div class="cities_slider">
    <div class="container">
        <h2 class="cities_title">Popular Cities</h2>
        <div class="swiper cities">
            <form action ="{{route('hotellist')}}" method= "GET"> 
                    <div class="swiper-wrapper">
                        @foreach($cities as $citi)          
                        <button type="submit" name ="cityName"  value="{{$citi->city_name}}" type="text" class="swiper-slide">{{$citi->city_name}}</button>
                        @endforeach
                    </div>
            </form>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>


    </div>
</div>

<div class="Hotel_cards_slider">
    <div class="container">
        <div class="row">
            <div class="Hotel_cards_slid">
                <div class="owl-stage-outer">
                    <div class="slider_outer">
                        <div class="Main_items">
                            @foreach( $hotelsLists as $hotelsList)
                            <div class="item">
                                <div class="news-wrapper">
                                    <div class="news-img">
                                        <img src="{{$hotelsList->fileName}}" alt="">
                                    </div>
                                    <div class="news-text">


                                        @if(Auth::user())
                                        <a href="{{route('hotelsrooms',$hotelsList->id)}}" class="news-title">{{$hotelsList->hotelName}}</a>
                                        @else
                                        <a href="javascript:void(0)" class="news-title">{{$hotelsList->hotelName}}</a>
                                        @endif
                                        <span>Contact No: {{$hotelsList->telephone}}</span><br>
                                        <span>Address: {{$hotelsList->address}}</span><br>
                                        <span>Stars: {{$hotelsList->avgRating}}</span><br>
                                        <span>book just @ {{$hotelsList->price_started}}</span><br>
                                        <a href="#" class="btn_slider ">READ MORE</a>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                        <div class="Blog_pagination">
                            {{$hotelsLists->links()}}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection