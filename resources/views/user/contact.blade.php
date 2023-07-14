
@extends('front.layouts.app')
@section('content')
    <!--! Contact  -->
    <div class="Contact_banner">
        <div class="contact_content">
            <h2>Contact Us</h2>
            <p>Lorem Ipsum is simply dummy text of the <br> printing and typesetting industry. </p>
            <button>Home - <span>Contact Us</span></button>
            <span>LET'S CONTACT US</span>
            <h5>Get in Touch with Us</h5>
        </div>
    </div>

    <div class="Facilities_content">
        <div class="container">
            <div class="contact_title_box">
                <h2>Visit Our Famous Facilities</h2>
                <p>A wonderful serenity has taken possession of my entire soul, like these <br>
                    sweet mornings of spring which I enjoy with my whole heart.</p>
            </div>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the <br>
                industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type <br>
                and scrambled it to make a type specimen book. </p>

            <img src="./images/Hotelroom.png" alt="" loading="lazy">

            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the 
                industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type 
                and scrambled it to make a type specimen book. </p>
            <p>It is a long established fact that a reader will be distracted by the readable content of a page when
                 looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal
                distribution of letters, as opposed to using 'Content here, content here', making it look like
                readable English.
            </p>
        </div>


    </div>

    <section class="hotel_owner">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <img src="./images/Hotelroom1.png" alt="" loading="lazy">
                </div>
                <div class="col-md-6">
                    <button>Hotel Owner</button>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                        the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley
                        of type and scrambled it to make a type specimen book. </p>
                    <a href="#">Lorem Ipsum</a>
                </div>
            </div>
        </div>
    </section>


    <section class="hotel_owner_2">
        <div class="container">
            <div class="row">
                <div class="col-md-6 Customer_content">
                    <button class="coustomer">Onboard Coustomer</button>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                        the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley
                        of type and scrambled it to make a type specimen book. </p>
                    <a href="#">Lorem Ipsum</a>
                </div>
                <div class="col-md-6">
                    <img src="./images/Hotelroom1.png" alt="" loading="lazy">
                </div>

            </div>
        </div>
    </section>

    <!--! Contact  -->

    <!--  !Out Tean  -->

    <div class="OurTeam_container">
        <div class="out_team_btn"><button>Our Team</button></div>
    <div class="Our_team_imgs">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <img src="./images/OurTeam4.png" alt="" loading="lazy">
                </div>
                <div class="col-md-6">
                    <img src="./images/OurTeam2.png" alt="" loading="lazy">
                </div>
            </div>

            <div class="row">
                <div class="col-md-7">
                    <img src="./images/OurTeam3.png" alt="">
                </div>
                <div class="col-md-5">
                    <img src="./images/OurTeam1.png" alt="" loading="lazy">

                </div>
            </div>
        </div>
    </div>
    </div>
    
    
    <!--  !Out Tean  -->


    <!-- !Map  -->
    <div class="Map_sec">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="contact_details_container">
                        <div class="Name_input">
                            <input type="text" placeholder="Enter Your Name">
                        </div>
                        <div class="Name_input">
                            <input type="text" placeholder="Enter Your Email Address">
                        </div>
                        
                        <div class="Number_box">
                            <label for="">Phone:</label>
                        <div class="Name_input">
                            <input type="text" placeholder="Enter Your Email Address">
                        </div>
                        </div>
    
                        <div class="text_area">
                            <label for="Message">Message</label>
                            <textarea name="" id="" cols="30" rows="10" placeholder="Enter You Comment"></textarea>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d77957.14267147206!2d77.94566579454556!3d30.286900681298025!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m3!3e6!4m0!4m0!5e0!3m2!1sen!2sin!4v1687767175536!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </div>
    
    <!-- !Map  -->
    @endsection



    