<?php
    $title = "Contact || Best Digi Solutions";
    include "header.php";
?>
    <section class="rafaa-section r-breadcurmbs">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="wrap_breadcrumbs_col">
                        <h1 class="l-head"> Contact Us
                            </h1>
                        <!-- <ul class="breadcrumbs_content ">
                            <li><a href="#" title="home">Home</a> /</li>
                            <li><span>About Us</span></li>
                        </ul> -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="rafaa-section contactus-page">
        <div class="container pb-120">
            <div class="row">
                <div class="col-lg-5 col-md-5 col-sm-5 col-12">
                    <div class="wrap_contact_page">
                        <ul class="contact_list mt-55">
                            <!-- <li>
                                <span class="contact_icon"><i class="fas fa-phone"></i></span>
                                <h3>Call us</h3>
                                <p><a href="tel: +x-xxx-xxx-xxxx">+x-xxx-xxx-xxxx</p>
                            </li> -->
                            <li>
                                <span class="contact_icon"><i class="fas fa-envelope"></i></span>
                                <h3>Mail Us</h3>
                                <p><a href="mailto: contact@bestdigisolutions.com">contact@bestdigisolutions.com</a></p>
                            </li>
                            <!-- <li>
                                <span class="contact_icon"><i class="fas fa-map-marker"></i></span>
                                <h3>Address</h3>
                                <p>20c NewYork City, USA</p>
                            </li> -->
                        </ul>
                    </div>
                </div>


                <div class="col-lg-7 col-md-7 col-sm-7 col-12">
                    <div class="wrap_contact_page">
                        <div class="rq-wrap-form ">
                            <form action="mailsend.php" method="post" class="tp-form-1">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-12 col-form-left">
                                        <p class="tp-form-el">
                                            <input type="text" name="name" id="tp-username" class="tp-feild tp-user-name" required="" placeholder="Full Name *">
                                        </p>
                                       </div>
                                        <div class="col-lg-6 col-md-6 col-12 col-form-right">
                                         <p class="tp-form-el">
                                            <input type="text" id="tp-phone" name="phone" class="tp-feild tp-phone" placeholder="Your Phone *">
                                        </p>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-12 col-form-left">
                                        <p class="tp-form-el">
                                            <input type="email" name="email" class="tp-feild tp-email" id="tp-email" required="" placeholder="Your Email *">
                                        </p>
                                        
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-12 col-form-left">
                                        <p class="tp-form-el">
                                            <input type="text" name="subject" class="tp-feild tp-email" id="tp-email" required="" placeholder="Enter Your Subject *">
                                        </p>
                                        
                                    </div>
                                    <div class="col-12">
                                        <p class="tp-form-el">
                                            <textarea name="message" class="tp-message" placeholder="Write Your Message."></textarea>
                                        </p>
                                    </div>
                                    <div class="col-12 ">
                                        <div class="tp-wrap-btn">
                                            <button type="submit" class=" sendmessage_btn" name="submit">Submit</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        
    </section>
    <?php
        include 'common.php';
        include 'footer.php';
    ?>