@extends('front.layouts.app')
@section('content')

    <div class="Mywishtlist">
        <div class="container">
            <div class="Wishlist_header">
                <p>My Wishlist</p>
                <p>Wishlist Privacy</p>
            </div>
            
            <div class="row">
               <div class="Wishlist_main_container">
                 @foreach($wishlists as $wish)
                 {{-- @foreach($wishlist as $wish) --}}
                              
                        <div class="Wishlist_card">
                            <div class="Wishlist_img"><img src="{{$wish->fileName}}" alt=""></div>  
                            <div class="Wishlist_content">
                                <div class="Wish_left">
                                    <span><small>{{$wish->roomId}}</small></span>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                    <button>5   <ion-icon name="star"></ion-icon></button>
                                    <p>₹ {{$wish->hour24Price}} <span>₹ 3,000 </span></p>
                                </div>
                                <div class="Wish_ryt">
                                    <div class="bin">
                                       <a href="{{route('remove_wishlist',$wish->roomId )}}"> <img src="./images/recycle_bin.png" alt=""></a>
                                    </div>
                                    <a href="{{route('bookhotel',$wish->roomId)}}" class="button-btn">
                                </div>
                            </div>
                        </div>
                @endforeach
                {{-- @endforeach --}}
                
               </div>
            </div>
        </div>
    </div>

@endsection