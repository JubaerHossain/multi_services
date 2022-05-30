<!--Start Header -->
<!-- <header class="nav-bg-b main-header navfix fixed-top menu-white"> -->
<style>
    .nx-dropdown.menu-dorpdown.cus-menu-dropdown {
    width: 380px;
    margin: 0 auto;
}
.services-nav-list li .nav-item-wrapper a{
    text-indent: 0px;
    line-height: 20px;
}

@php $header_text_color = "white" @endphp

</style>
<header class="<?php if (@$header_text_color == 'white') echo 'nav-bg-b' ?> main-header navfix fixed-top menu-white">
    <div class="container-fluid m-pad">
        <div class="menu-header">
            <div class="dsk-logo"><a class="nav-brand" href="./">
                    <img src="{{ asset('/public/client/') }}/images/white-logo.png" alt="Logo" class="mega-white-logo" />
                    <img src="{{ asset('/public/client/') }}/images/logo.png" alt="Logo" class="mega-darks-logo" />
                </a>
            </div>
            <div class="custom-nav" role="navigation">
                <ul class="nav-list">
                    <li class="sbmenu">
                        <a href="index.php" class="menu-links">Home</a>
                    </li>
                    <li class="sbmenu rpdropdown">
                        <a href="portfolio.php" class="menu-links">Portfolio</a>
                    </li>
                    <li class="sbmenu rpdropdown">
                        <a href="blog.php" class="menu-links">Blog</a>
                    </li>
                    <li class="sbmenu rpdropdown">
                        <a href="#" class="menu-links">Services</a>
                        <div class="nx-dropdown menu-dorpdown cus-menu-dropdown">
                            <div class="sub-menu-section">
                                <div class="sub-menu-center-block">
                                    <div class="sub-menu-column smfull">
                                        <ul>
                                            <li><a href="services.php#desktop-software">Desktop Software Development</a></li>
                                            <li><a href="services.php#mobile-software">Mobile Software Development</a></li>
                                            <li><a href="services.php#web-based-software">Web-Based Software Development</a></li>
                                            <li><a href="services.php#custom-software">Custom Software Development</a></li>
                                            <li><a href="services.php#software-product">Software Product Development</a></li>
                                            <li><a href="services.php#enterprise-software">Enterprise Software Development</a></li>
                                            <li><a href="services.php#startup-software">Startup Software Development</a></li>
                                            <li><a href="services.php#mvp-software">Mvp Software Development</a></li>
                                            <li><a href="services.php#cybersecurity-software">Cybersecurity Software Development</a></li>
                                            <li><a href="services.php#iot-software">Iot Software Development</a></li>
                                            <li><a href="services.php#software-testing">Software Testing & QA Services</a></li>
                                            <li><a href="services.php#erp-software">ERP & CRM System Software Development</a></li>
                                            <li><a href="services.php#hr-software">HR Software Development</a></li>
                                            <li><a href="services.php#ecommerce-software">E-commerce Software Development</a></li>
                                            <li><a href="services.php#elearning-software">E-learning Software Development</a></li>
                                            <li><a href="services.php#industrial-software">Industrial Software Development</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="sbmenu rpdropdown">
                        <a href="#" class="menu-links">About</a>
                        <div class="nx-dropdown menu-dorpdown">
                            <div class="sub-menu-section">
                                <div class="sub-menu-center-block">
                                    <div class="sub-menu-column smfull d-flex justify-content-inline">
                                        <ul>
                                            <li><a href="about.php">About Us</a></li>
                                            <li><a href="why-us.php">Why Us</a></li>
                                            <li><a href="mission-vision.php">Mission & Vision</a></li>
                                            <li><a href="clients.php">Our Clients</a></li>
                                            <li><a href="career.php">Careers</a> </li>
                                            <li><a href="contact-us.php">Contact Us</a> </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
                <!-- mobile + desktop - sidebar menu- dark mode witch and button -->
                <ul class="nav-list right-end-btn">
                    <li class="hidemobile"><a data-bs-toggle="offcanvas" href="#offcanvasExample" class="btn-round- btn-br bg-btn2"><i class="fas fa-bars"></i></a></li>

                    <li class="contact-show hidemobile">
                        <a href="#" class="btn-round- trngl btn-br bg-btn"><i class="fas fa-phone-alt"></i></a>
                        <div class="contact-inquiry">
                            <div class="contact-info-">
                                <div class="contct-heading">Honest Contacts</div>
                                <div class="inquiry-card-nn hrbg">
                                    <div class="title-inq-c">FOR HR DEPARTMENT</div>
                                    <ul>
                                        <li class="mb0"><img src="{{ asset('/public/client/') }}/images/flags/us.svg" alt="us office" class="flags-size"> <a href="tel:1111111111">+1-123-456-7890</a></li>
                                    </ul>
                                </div>
                                <div class="inquiry-card-nn">
                                    <div class="title-inq-c">FOR SALES DEPARTMENT</div>
                                    <ul>
                                        <li><a href="tel:1111111111"><img src="{{ asset('/public/client/') }}/images/flags/us.svg" alt="us office" class="flags-size"> +1-123-456-7890</a></li>
                                        <li><a href="tel:1111111111"><img src="{{ asset('/public/client/') }}/images/flags/au.svg" alt="australia office" class="flags-size"> +1-123-456-7890</a></li>
                                        <li><i class="fab fa-skype"></i><a href="skype:Honest.company?call">Honest.company</a></li>
                                        <li><i class="fas fa-envelope"></i><a href="mailto:honesttradersbd@gmail.com">honesttradersbd@gmail.com</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </li>

                    <li class="hidemobile"><a href="get-quote.php" class="btn-br bg-btn3 btshad-b2 lnk">Request A Quote<span class="circle"></span></a> </li>
                    <li class="hidedesktop darkmodeswitch">
                        <div class="switch-wrapper"> <label class="switch" for="Honest"> <input type="checkbox" id="Honest" /> <span class="slider round"></span> </label> </div>
                    </li>

                    <li class="navm- hidedesktop"> <a class="toggle" href="#"><span></span></a></li>
                </ul>
            </div>
        </div>

        <!--Mobile Menu-->
        <nav id="main-nav">
            <ul class="first-nav">
                <li>
                    <a href="index.php">Home</a>
                </li>
                <li>
                    <a href="portfolio.php">Portfolio</a>
                </li>
                <li>
                    <a href="blog.php">Blog</a>
                </li>
                <li>
                    <a href="#">Services</a>
                    <ul class="services-nav-list">
                        <li><a href="services.php#desktop-software">Desktop Software Development</a></li>
                                            <li><a href="services.php#mobile-software">Mobile Software Development</a></li>
                                            <li><a href="services.php#web-based-software">Web-Based Software Development</a></li>
                                            <li><a href="services.php#custom-software">Custom Software Development</a></li>
                                            <li><a href="services.php#software-product">Software Product Development</a></li>
                                            <li><a href="services.php#enterprise-software">Enterprise Software Development</a></li>
                                            <li><a href="services.php#startup-software">Startup Software Development</a></li>
                                            <li><a href="services.php#mvp-software">Mvp Software Development</a></li>
                                            <li><a href="services.php#cybersecurity-software">Cybersecurity Software Development</a></li>
                                            <li><a href="services.php#iot-software">Iot Software Development</a></li>
                                            <li><a href="services.php#software-testing">Software Testing & QA Services</a></li>
                                            <li><a href="services.php#erp-software">ERP & CRM System Software Development</a></li>
                                            <li><a href="services.php#hr-software">HR Software Development</a></li>
                                            <li><a href="services.php#ecommerce-software">E-commerce Software Development</a></li>
                                            <li><a href="services.php#elearning-software">E-learning Software Development</a></li>
                                            <li><a href="services.php#industrial-software">Industrial Software Development</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#">About</a>
                    <ul>
                        <li><a href="about.php">About Us</a></li>
                        <li><a href="why-us.php">Why Us</a></li>
                        <li><a href="mission-vision.php">Mission & Vision</a></li>
                        <li><a href="clients.php">Our Clients</a></li>
                        <li><a href="career.php">Careers</a> </li>
                        <li><a href="contact-us.php">Contact Us</a> </li>
                    </ul>
                </li>
            </ul>
            <ul>
                <li class="contact-show">
                    <a href="#" class="">Call</a>
                        <div class="contact-inquiry">
                            <div class="contact-info-">
                                <div class="contct-heading">Honest Contacts</div>
                                <div class="inquiry-card-nn hrbg">
                                    <div class="title-inq-c">FOR HR DEPARTMENT</div>
                                        <ul>
                                            <li class="mb0"><img src="{{ asset('/public/client/') }}/images/flags/us.svg" alt="us office" class="flags-size"> <a href="tel:1111111111">+1-123-456-7890</a></li>
                                        </ul>
                                    </div>
                                    <div class="inquiry-card-nn">
                                        <div class="title-inq-c">FOR SALES DEPARTMENT</div>
                                        <ul>
                                            <li><a href="tel:1111111111"><img src="{{ asset('/public/client/') }}/images/flags/us.svg" alt="us office" class="flags-size"> +1-123-456-7890</a></li>
                                            <li><a href="tel:1111111111"><img src="{{ asset('/public/client/') }}/images/flags/au.svg" alt="australia office" class="flags-size"> +1-123-456-7890</a></li>
                                            <li><i class="fab fa-skype"></i><a href="skype:Honest.company?call">Honest.company</a></li>
                                            <li><i class="fas fa-envelope"></i><a href="mailto:honesttradersbd@gmail.com">honesttradersbd@gmail.com</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                </li>
                <li class="hidedesktop"><a data-bs-toggle="offcanvas" href="#offcanvasExample" class="">Request Quote</a></li>
            </ul>
            <ul class="bottom-nav">
                <li class="prb">
                    <a href="tel:+11111111111">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 384">
                            <path d="M353.188,252.052c-23.51,0-46.594-3.677-68.469-10.906c-10.719-3.656-23.896-0.302-30.438,6.417l-43.177,32.594
                                c-50.073-26.729-80.917-57.563-107.281-107.26l31.635-42.052c8.219-8.208,11.167-20.198,7.635-31.448
                                c-7.26-21.99-10.948-45.063-10.948-68.583C132.146,13.823,118.323,0,101.333,0H30.813C13.823,0,0,13.823,0,30.813
                                C0,225.563,158.438,384,353.188,384c16.99,0,30.813-13.823,30.813-30.813v-70.323C384,265.875,370.177,252.052,353.188,252.052z" />
                        </svg>
                    </a>
                </li>
                <li class="prb">
                    <a href="mailto:honesttradersbd@gmail.com">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                            <path d="M20 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z" />
                            <path d="M0 0h24v24H0z" fill="none" />
                        </svg>
                    </a>
                </li>
                <li class="prb">
                    <a href="">
                        <svg enable-background="new 0 0 24 24" height="18" viewBox="0 0 24 24" width="18" xmlns="http://www.w3.org/2000/svg">
                            <path d="m23.309 14.547c1.738-7.81-5.104-14.905-13.139-13.543-4.362-2.707-10.17.352-10.17 5.542 0 1.207.333 2.337.912 3.311-1.615 7.828 5.283 14.821 13.311 13.366 5.675 3.001 11.946-2.984 9.086-8.676zm-7.638 4.71c-2.108.867-5.577.872-7.676-.227-2.993-1.596-3.525-5.189-.943-5.189 1.946 0 1.33 2.269 3.295 3.194.902.417 2.841.46 3.968-.3 1.113-.745 1.011-1.917.406-2.477-1.603-1.48-6.19-.892-8.287-3.483-.911-1.124-1.083-3.107.037-4.545 1.952-2.512 7.68-2.665 10.143-.768 2.274 1.76 1.66 4.096-.175 4.096-2.207 0-1.047-2.888-4.61-2.888-2.583 0-3.599 1.837-1.78 2.731 2.466 1.225 8.75.816 8.75 5.603-.005 1.992-1.226 3.477-3.128 4.253z" />
                        </svg>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</header>
<!--End Header -->


    <!--Start quate -->
    <!--Start sidebar -->
<div class="Honestofcanvas offcanvas offcanvas-end" tabindex="-1" id="offcanvasExample">
    <div class="offcanvas-body">
        <div class="cbtn animation">
            <div class="btnclose"> <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button></div>
        </div>
        <div class="form-block sidebarform">
            <h4>Request A Quote</h4>
            <form id="contactForm" data-bs-toggle="validator" class="shake mt20">
                <div class="row">
                    <div class="form-group col-sm-12">
                        <input type="text" id="name" placeholder="Enter name" required data-error="Please fill Out">
                        <div class="help-block with-errors"></div>
                    </div>
                    <div class="form-group col-sm-12">
                        <input type="email" id="email" placeholder="Enter email" required>
                        <div class="help-block with-errors"></div>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-sm-12">
                        <input type="text" id="mobile" placeholder="Enter mobile" required data-error="Please fill Out">
                        <div class="help-block with-errors"></div>
                    </div>
                    <div class="form-group col-sm-12">
                        <select name="Dtype" id="Dtype" required>
                            <option value="">Select Requirement</option>
                            <option value="web">web</option>
                            <option value="graphic">app</option>
                            <option value="video">graphics</option>
                        </select>
                        <div class="help-block with-errors"></div>
                    </div>
                </div>
                <div class="form-group">
                    <textarea id="message" rows="5" placeholder="Enter your message" required></textarea>
                    <div class="help-block with-errors"></div>
                </div>
                <button type="submit" id="form-submit" class="btn lnk btn-main bg-btn">Submit <span class="circle"></span></button>
                <div id="msgSubmit" class="h3 text-center hidden"></div>
                <div class="clearfix"></div>
            </form>
        </div>
        <div class="getintouchblock mt30">
            <h4>Get In Touch</h4>
            <p class="mt10">Please fill out the form below if you have a plan or project in mind that you'd like to
                share with us.</p>
            <div class="media mt15">
                <div class="icondive"><img src="{{ asset('/public/client/') }}/images/icons/call.svg" alt="icon"></div>
                <div class="media-body getintouchinfo">
                    <a href="tel:123456790">+8801234567890 <span>Mon-Fri 9am - 6pm</span></a>
                </div>
            </div>
            <div class="media mt15">
                <div class="icondive"><img src="{{ asset('/public/client/') }}/images/icons/whatsapp.svg" alt="icon"></div>
                <div class="media-body getintouchinfo">
                    <a href="tel:123456790">+8801234567890 <span>Mon-Fri 9am - 6pm</span></a>
                </div>
            </div>
            <div class="media mt15">
                <div class="icondive"><img src="{{ asset('/public/client/') }}/images/icons/mail.svg" alt="icon"></div>
                <div class="media-body getintouchinfo">
                    <a href="mailto:honesttradersbd@sookh.com">honesttradersbd@sookh.com <span>Online Support</span></a>
                </div>
            </div>
            <div class="media mt15">
                <div class="icondive"><img src="{{ asset('/public/client/') }}/images/icons/map.svg" alt="icon"></div>
                <div class="media-body getintouchinfo">
                    <a href="mailto:honesttradersbd@sookh.com">Banani, Dhaka, Bangladesh<span>Visit Our Office</span></a>
                </div>
            </div>
        </div>
        <div class="contact-data mt30">
            <h4>Follow Us On:</h4>
            <div class="social-media-linkz mt10">
                <a href="javascript:void(0)" target="blank"><i class="fab fa-facebook"></i></a>
                <a href="javascript:void(0)" target="blank"><i class="fab fa-twitter"></i></a>
                <a href="javascript:void(0)" target="blank"><i class="fab fa-instagram"></i></a>
                <a href="javascript:void(0)" target="blank"><i class="fab fa-linkedin"></i></a>
                <a href="javascript:void(0)" target="blank"><i class="fab fa-youtube"></i></a>
                <a href="javascript:void(0)" target="blank"><i class="fab fa-pinterest-p"></i></a>
            </div>
        </div>
    </div>
</div>
<!--end sidebar -->
    <!--End quote -->