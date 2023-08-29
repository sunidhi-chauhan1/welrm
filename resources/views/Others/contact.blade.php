@extends('front.layouts.app')
@section('content')
<!--! Contact  -->
<div class="Contact_banner">
    <div class="contact_content">
        <h2>Contact Us</h2>
        <p>WELRM as the name says “Welcome Rooms”. We started our journey in 2019, with the motive of providing the best hotels to our customers. We are the best providers of hotels and rooms in the hospitality industry </p>

        <!-- <span>LET'S CONTACT US</span> -->
        <h5>Get in Touch with Us</h5>
    </div>
</div>

<div class="Facilities_content">
    <div class="container">
        <div class="contact_title_box">
            <!-- <h2>Visit Our Famous Facilities</h2> -->
            <!-- <p>A wonderful serenity has taken possession of my entire soul, like these <br>
                    sweet mornings of spring which I enjoy with my whole heart.</p> -->
        </div>
        <p>We at WELRM are available to provide you with assistance 24/7. In case of any doubt or queries regarding our privacy policy, please feel free to contact us at +91 9584290842 or info@welrm.com </p>

        <img src="./images/Hotelroom.png" alt="" loading="lazy">

        <div class="contact_para">
            <p>Managing a hotel can be a challenging task, but the WELRM App is here to help make things easier. With our platform, you'll have all the tools you need to manage your bookings, prices, and availability. Our user-friendly interface makes it easy to edit your hotel and room details as often as you need to. And with our affordable subscription plans, you can enjoy increased visibility to potential customers without breaking the bank.
            </p>
            <p>At WELRM, we believe that travel should be accessible to everyone. That's why we work tirelessly to bring you the best selection of hotels at the most competitive prices. And with our commitment to sustainability and social responsibility, you can feel good about booking with us. So why wait? Download WELRM Hotel Booking App today and start planning your next adventure. We're here to help you every step of the way.
            </p>
        </div>
    </div>


</div>


<!--! Contact  -->




<!-- !Map  -->
<div class="Map_sec">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <form id="contactForm">
                    @csrf
                    <div class="contact_details_container">
                        <div class="con_Name_input">
                            <input name="name" id="name" type="text" placeholder="Enter Your Name">
                        </div>
                        <div class="con_Name_input">
                            <input name="email" id="email" type="text" placeholder="Enter Your Email Address">
                        </div>

                        <div class="Number_box">
                            <label for="">Phone:</label>
                            <div class="con_Name_input">
                                <input name="phone" id="phone" type="text" placeholder="Enter Your Phone Number">
                            </div>
                        </div>

                        <div class="text_area">
                            <label for="Message">Message</label>
                            <textarea name="message" id="message" cols="30" rows="10" placeholder="Enter You Comment"></textarea>
                        </div>

                        <div class="submit_btn">
                            <input type="submit" id="submitBtn">
                        </div>

                    </div>
                </form>
            </div>
            <div class="col-md-6">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d77957.14267147206!2d77.94566579454556!3d30.286900681298025!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m3!3e6!4m0!4m0!5e0!3m2!1sen!2sin!4v1687767175536!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </div>

</div>

<!-- !Map  -->
@endsection
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>

<script>
    document.addEventListener('DOMContentLoaded', function() {

        const submitBtn = document.getElementById('submitBtn');

        submitBtn.addEventListener('click', function(e) {
            e.preventDefault();
            const formData = new FormData(document.getElementById('contactForm'));

            console.log(formData);
            // Send the AJAX request
            axios.post('{{ route('contact') }}', formData)
                .then(response => {
                    console.log(response.data);









                    

                    if (response.status == 200) {
                        toastr.options = {
                            "closeButton": true,
                            "progressBar": true
                        }
                        toastr.success("Your message has been submitted successfully.");

                        document.getElementById('contactForm').reset();
                    }
                    // Here you can handle the response, show a success message, or redirect the user.
                })
                .catch(error => {

                    toastr.options = {
                        "closeButton": true,
                        "progressBar": true
                    }
                    toastr.error("Please fill in all the required fields.");

                    // Handle errors if necessary.
                });
        });
    });
</script>