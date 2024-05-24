<footer id="footer" class="footer">
        <!-- Start Footer Top -->
        <div class="footer-top">
            <div class="container">
                <div class="inner-content">
                    <div class="row">
                        <div class="col-lg-4 col-md-6 col-12">
                            <!-- Single Widget -->
                            <div class="single-footer f-about">
                                <div class="logo">
                                    <a href="index.html">
                                        <img src="{{ asset('assets_main/assets/images/logo/logo-black.png') }}" alt="#">
                                    </a>
                                </div>
                                <p>This independent TEDx event is operated under license from TED.</p>
                                <span class="social-title">
                                    Follow Us On:
                                </span>
                                <ul class="social">
                                    <li>
                                        <a href="{{ $event->facebook }}"><i class="lni lni-facebook-filled"></i></a>
                                    </li>
                                    <li>
                                        <a href="{{ $event->twitter }}"><i class="lni lni-twitter-filled"></i></a>
                                    </li>
                                    <li>
                                        <a href="{{ $event->instagram }}"><i class="lni lni-instagram-filled"></i></a>
                                    </li>
                                    <li>
                                        <a href="{{ $event->linkedin }}"><i class="lni lni-linkedin-original"></i></a>
                                    </li>
                                </ul>
                            </div>
                            <!-- End Single Widget -->
                        </div>
                        <div class="col-lg-2 col-md-6 col-12">
                            <!-- Single Widget -->
                            <div class="single-footer f-link">
                                <h3>Quick Links</h3>
                                <ul>
                                    <li><a href="https://www.google.com/maps/search/Jumeirah+Beach+Park/@25.1489144,55.1750434,14z?entry=ttu" target="_blank">Get Direction</a></li>
                                    <li><a href="{{ route('sponsers') }}">Sponsors</a></li>
                                    <li><a href="{{ route('register') }}">join us as Speaker</a></li>
                                    <li><a href="{{ route('volunteer') }}">join us as Volunteer</a></li>
                                    <li><a href="{{ route('aboutTed') }}">about TED</a></li>
                                </ul>
                            </div>
                            <!-- End Single Widget -->
                        </div>
                        <div class="col-lg-2 col-md-6 col-12">
                            <!-- Single Widget -->
                            <div class="single-footer f-link">
                                <h3>Know More</h3>
                                <ul>
                                    <li><a href="{{ route('about') }}">About Us</a></li>
                                    <li><a href="{{ route('faq') }}">Faq</a></li>
                                    <li>Contact Us <u>{{ $event->phone}}</u></li>
                                </ul>
                            </div>
                            <!-- End Single Widget -->
                        </div>
                        <div class="col-lg-4 col-md-6 col-12">
                            <!-- Single Widget -->
                            <div class="single-footer newsletter">
                                <h3>Subscribe to our newsletter</h3>
                                <form action="#" method="get" target="_blank" class="newsletter-form">
                                    <input name="name" placeholder="Your Name*" required="required" type="text">
                                    <input name="email" placeholder="Email address*" required="required" type="email">
                                    <div class="button">
                                        <button class="btn">Subscribe
                                        </button>
                                    </div>
                                </form>
                            </div>
                            <!-- End Single Widget -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/ End Footer Top -->
        <!-- Start Copyright Area -->
        <div class="copyright">
            <div class="container">
                <div class="inner-content">
                    <div class="row">
                        <div class="col-12">
                            <p class="copyright-text">Designed and Developed by <a href="https://linkedin.com/in/hasan-ismaiel"
                                target="_blank">Hasan_Ismaiel</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Copyright Area -->
    </footer>