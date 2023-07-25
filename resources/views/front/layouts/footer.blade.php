<!-- ! Footer Section  -->
<footer class="footer">
    <div class="custom-shape-divider-top-1687276519">
        <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
            <path
                d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z"
                class="shape-fill"></path>
        </svg>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="footer_content">
                    <div class="logo">
                        <img src="./images/Logo.png" alt="" />
                    </div>
                    <p>
                        Lorem Ipsum is simply dummy text of the printing and typesetting
                        industry.It is a long established fact that a reader will be
                        distracted by the readable content of a page when looking at its
                        layout.
                    </p>
                </div>
            </div>
            <div class="col-md-2">
                <h3>Popular Locations</h3>
                <ul class="footer_list">
                    <li><a href="#">Kolkata</a></li>
                    <li><a href="#">Mumbai</a></li>
                    <li><a href="#">Chennai</a></li>
                    <li><a href="#">Pune</a></li>
                </ul>
            </div>
            <div class="col-md-2">
                <h3>Navigation Links</h3>
                <ul class="footer_list">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">About Us</a></li>
                    <li><a href="#">Hotels</a></li>
                    <li><a href="#">Our Terms</a></li>
                    <li><a href="#">Blog</a></li>
                </ul>
            </div>
            <div class="col-md-4">
                <div class="Footer_title">
                    <h3>Instagram Story</h3>
                </div>
                <div class="Insta_stroy">
                    <img src="./images/FooterStory.png" alt="" />
                    <img src="./images/FooterStory.png" alt="" />
                    <img src="./images/FooterStory.png" alt="" />
                    <img src="./images/FooterStory.png" alt="" class="Footer_insta_img" />
                    <img src="./images/FooterStory.png" alt="" class="Footer_insta_img" />
                    <img src="./images/FooterStory.png" alt="" class="Footer_insta_img" />
                </div>

                <div class="Footer_download">
                    <a href="#"><img src="./images/GooglePlay.png" alt="" /></a>
                    <a href="#"><img src="./images/AppStore.png" alt="" /></a>
                </div>
            </div>
        </div>

        <div class="row footer-after">
            <div class="col-md-6">
                <div class="copyright">
                    <p>© 2023 Welrm.com, Inc. All rights reserved.</p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="footer_social_link">
                    <span>Follow Us</span>
                    <div class="Footer_icons">
                        <a href="#"><img src="./images/Insta.png" alt="" /></a>
                        <a href="#"><img src="./images/fb.png" alt="" /></a>
                        <a href="#"><img src="./images/Twitter.png" alt="" /></a>
                        <a href="#"><img src="./images/Whatapp.png" alt="" /></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- ! Footer Section  -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
@if (session()->has('signup') || session()->has('login-error'))
    <script>
        $(function() {

            $('#Sign_modal').modal('show');
        });
    </script>
@endif
