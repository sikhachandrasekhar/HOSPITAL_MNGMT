
<?php include 'header.php'; ?>
<!-- header area end -->
<!-- slider area start -->
<div class="slider-area owl-carousel">
    <div class="slider-item" style="background: url(assets/img/slider/slider-bg1.jpg) center center/cover no-repeat;">
        <div class="container">
            <div class="slider-content text-center">
                <h4>Welcome to our services</h4>
                <h2>Your <span>Smile</span> Is Important to us</h2>
                
                <div class="btn-style-one icon-right">
                    <a href="#">DISCOVER MORE<i class="fa fa-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </div>
    <div class="slider-item" style="background: url(assets/img/slider/slider-bg2.jpg) center center/cover no-repeat;">
        <div class="container">
            <div class="slider-content text-center">
                <h4>Welcome to our services</h4>
                <h2>Your <span>Smile</span> Is Important to us</h2>
                
                <div class="btn-style-one icon-right">
                    <a href="#">DISCOVER MORE<i class="fa fa-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </div>
    <div class="slider-item" style="background: url(assets/img/slider/slider-bg1.jpg) center center/cover no-repeat;">
        <div class="container">
            <div class="slider-content text-center">
                <h4>Welcome to our services</h4>
                <h2>Your <span>Smile</span> Is Important to us</h2>
                
                <div class="btn-style-one icon-right">
                    <a href="#">DISCOVER MORE<i class="fa fa-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- slider area end -->
<!-- appoinment area start -->
<div class="appoinment-area bg-gray pb--100">
    <div class="container">
        <div class="appoinment-box">
            <div class="row">
                <div class="col-md-5">
                    <div class="appoinment-left"></div>
                </div>
                <div class="col-md-7">
                    <div class="appoinment-form">
                        <h3>APPOINTMENT</h3>
                        
                        <form action="" method="post">
                            <div class="row">
                                <div class="col-sm-6">
                                    <input type="text" name="name" placeholder="Name">
                                </div>
                                <div class="col-sm-6">
                                 
                                    <select name="depart" style="    height: 45px;
                                    width: 100%;
                                    margin-bottom: 20px;
                                    border: 2px solid #e1e1e1;
                                    padding-left: 15px;
                                    letter-spacing: 0;
                                    font-size: 13px;
                                    border-radius: 0;">
                                    
                                    <option value="Cardiology">cardiology</option>
                                    <option value="Pathology">pathology</option>
                                    <option value="Dermatology">dermatology</option>

                                </select>
                                
                            </div>
                            <div class="col-sm-6">
                                <input type="text" name="phone" placeholder="Phone No.">
                            </div>
                            <div class="col-sm-6">
                                <input type="text" name="Date" placeholder="Pick a Date">
                            </div>
                            <div class="col-sm-6">
                                <input type="text" name="Email" placeholder="Email">
                            </div>
                            <div class="col-sm-6">
                                <input type="text" name="time" placeholder="Choose Time">
                            </div>
                        </div>
                        <div class="btn-style-one icon-right">
                            <button type="submit" name="submit" id="appnmt-submit"> Submit Now<i class="fa fa-arrow-right"></i></button>
                        </div>
                    </form>
                    <?php 
                    require('db.php');
                    if (isset($_POST['submit'])){
                        

                     
                        $name = ($_REQUEST['name']);
                        $phone = ($_REQUEST['phone']);
                        $dates = ($_REQUEST['Date']);
                        $email = ($_REQUEST['Email']);
                        $timeso = ($_REQUEST['time']);
                        $depart = ($_REQUEST['depart']);
                        $query = "INSERT into `patients` (name,phone,dates,email,depart,timeso)
                        VALUES ('$name', '$phone', '$dates','$email','$depart','$timeso')";
                        $result = mysqli_query($con,$query);
                    }
                    ?>




                </div>
            </div>
        </div>
    </div>
</div>
</div>
<!-- appoinment area end -->
<!-- service area start -->
<div class="service-area pt--100 pb--70">
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="section-title">
                    <h2>OUR <span>SERVICES</span></h2>
                    <div class="icon-bar"><img src="assets/img/icon/sc-title-btm.png" alt="shape"></div>
                    <p>Duis aliquet metus vel nunc convallis placerat. Maecenas erat dui rhoncus a est vel,</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="single-service">
                    <div class="icon"><span class="flaticon-brain"></span></div>
                    <h2>NEWROLOGICAL</h2>
                    <p>Duis aliquet metus vel nunc convallis placea Maecenas erat dui, rhoncus a est vel,que metus vel nunc convallis.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single-service">
                    <div class="icon"><span class="flaticon-heart-checkup"></span></div>
                    <h2>CARDIOLOGICAL</h2>
                    <p>Duis aliquet metus vel nunc convallis placea Maecenas erat dui, rhoncus a est vel,que metus vel nunc convallis.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single-service">
                    <div class="icon"><span class="flaticon-scissors"></span></div>
                    <h2>SURGICAL</h2>
                    <p>Duis aliquet metus vel nunc convallis placea Maecenas erat dui, rhoncus a est vel,que metus vel nunc convallis.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single-service">
                    <div class="icon"><span class="flaticon-kidneys"></span></div>
                    <h2>PULMONARY</h2>
                    <p>Duis aliquet metus vel nunc convallis placea Maecenas erat dui, rhoncus a est vel,que metus vel nunc convallis.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single-service">
                    <div class="icon"><span class="flaticon-brain"></span></div>
                    <h2>GYNAECOLOGICAL</h2>
                    <p>Duis aliquet metus vel nunc convallis placea Maecenas erat dui, rhoncus a est vel,que metus vel nunc convallis.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single-service">
                    <div class="icon"><span class="flaticon-ambulance"></span></div>
                    <h2>Emergency Care</h2>
                    <p>Duis aliquet metus vel nunc convallis placea Maecenas erat dui, rhoncus a est vel,que metus vel nunc convallis.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- service area end -->
<!-- about area start -->
<div class="about-area bg-gray ptb--100">
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="section-title">
                    <h2>ABOUT <span>US</span></h2>
                    <div class="icon-bar bg-gray-icon"><img src="assets/img/icon/sc-title-btm.png" alt="shape"></div>
                    <p>Duis aliquet metus vel nunc convallis placerat. Maecenas erat dui rhoncus a est vel,</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <div class="abt-left-thumb">
                    <a class="expand-video" href="https://www.youtube.com/watch?v=-Q-dejszc1I"><span class="flaticon-play-button"></span></a>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="abt-right">
                    <h2 class="abt-title">WHY CHOOSE US</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur fermentumLorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur fermentumadipiscing elit. Curabitur fermentum.</p>
                    <div class="abt-feature-list">
                        <div class="abt-ft-item">
                            <div class="icon">
                                <span class="flaticon-bottle"></span>
                            </div>
                            <div class="abt-ft-contact">
                                <h2>BEST MEDICINE</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adip</p>
                            </div>
                        </div>
                        <div class="abt-ft-item">
                            <div class="icon">
                                <span class="flaticon-ophthalmologist"></span>
                            </div>
                            <div class="abt-ft-contact">
                                <h2>QUALIFIED DOCTORS</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adip</p>
                            </div>
                        </div>
                        <div class="abt-ft-item">
                            <div class="icon">
                                <span class="flaticon-kidneys-1"></span>
                            </div>
                            <div class="abt-ft-contact">
                                <h2>HEALTH CARE</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adip</p>
                            </div>
                        </div>
                        <div class="abt-ft-item">
                            <div class="icon">
                                <span class="flaticon-ambulance"></span>
                            </div>
                            <div class="abt-ft-contact">
                                <h2>BEST SERVICES</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adip</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- about area end -->
<!-- gallery area start -->
<div class="gallery-area pt--100 pb--70">
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="section-title">
                    <h2>OUR <span>GALLARY</span></h2>
                    <div class="icon-bar"><img src="assets/img/icon/sc-title-btm.png" alt="shape"></div>
                    <p>Duis aliquet metus vel nunc convallis placerat. Maecenas erat dui rhoncus a est vel,</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-6 offset-xl-3 col-lg-8 offset-lg-2">
                <div class="gallery-filter">
                    <button class="active" data-filter="*">All</button>
                    <button data-filter=".event">EVENT</button>
                    <button data-filter=".hospital">HOSPITAL</button>
                    <button data-filter=".dental">DENTAL</button>
                    <button data-filter=".sergeries">SERGERIES</button>
                    <button data-filter=".medicine">MEDICINE</button>
                </div>
            </div>
        </div>
        <div class="gallery-masonray row">
            <div class="glry-grid event sergeries col-md-4 col-sm-6">
                <div class="gallery-item">
                    <img src="assets/img/gallery/glry-img1.jpg" alt="gallery image">
                    <div class="glry-item-info">
                        <h4>Best Sergery</h4>
                        <div class="expnd-link">
                            <a class="expand-img" href="assets/img/gallery/glry-img1.jpg"><i class="fa fa-link"></i></a>
                            <a href="#"><i class="fa fa-arrows-alt"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="glry-grid event sergeries hospital col-md-4 col-sm-6">
                <div class="gallery-item">
                    <img src="assets/img/gallery/glry-img2.jpg" alt="gallery image">
                    <div class="glry-item-info">
                        <h4>Best Sergery</h4>
                        <div class="expnd-link">
                            <a class="expand-img" href="assets/img/gallery/glry-img2.jpg"><i class="fa fa-link"></i></a>
                            <a href="#"><i class="fa fa-arrows-alt"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="glry-grid hospital medicine col-md-4 col-sm-6">
                <div class="gallery-item">
                    <img src="assets/img/gallery/glry-img3.jpg" alt="gallery image">
                    <div class="glry-item-info">
                        <h4>Best Sergery</h4>
                        <div class="expnd-link">
                            <a class="expand-img" href="assets/img/gallery/glry-img3.jpg"><i class="fa fa-link"></i></a>
                            <a href="#"><i class="fa fa-arrows-alt"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="glry-grid event dental medicine col-md-4 col-sm-6">
                <div class="gallery-item">
                    <img src="assets/img/gallery/glry-img4.jpg" alt="gallery image">
                    <div class="glry-item-info">
                        <h4>Best Sergery</h4>
                        <div class="expnd-link">
                            <a class="expand-img" href="assets/img/gallery/glry-img4.jpg"><i class="fa fa-link"></i></a>
                            <a href="#"><i class="fa fa-arrows-alt"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="glry-grid hospital sergeries col-md-4 col-sm-6">
                <div class="gallery-item">
                    <img src="assets/img/gallery/glry-img5.jpg" alt="gallery image">
                    <div class="glry-item-info">
                        <h4>Best Sergery</h4>
                        <div class="expnd-link">
                            <a class="expand-img" href="assets/img/gallery/glry-img5.jpg"><i class="fa fa-link"></i></a>
                            <a href="#"><i class="fa fa-arrows-alt"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="glry-grid event dental medicine col-md-4 col-sm-6">
                <div class="gallery-item">
                    <img src="assets/img/gallery/glry-img6.jpg" alt="gallery image">
                    <div class="glry-item-info">
                        <h4>Best Sergery</h4>
                        <div class="expnd-link">
                            <a class="expand-img" href="assets/img/gallery/glry-img6.jpg"><i class="fa fa-link"></i></a>
                            <a href="#"><i class="fa fa-arrows-alt"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- gallery area end -->
<!-- call to action area start -->
<div class="callto-action-area">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-9">
                <div class="cta-content">
                    <h2>Feel Free to Speak With Our Doctors</h2>
                    <p>Suspendisse gravida sed est non convallis. Vestibulum elementum ex non eleifend lacinia. Aenean malesuada cursus hendrerit. Proin ac nunc neque. Mauris aliquet et ipsum sed iaculis. </p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="cta-btn btn-style-one icon-right">
                    <a href="#">Book Appointment <i class="fa fa-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- call to action area end -->
<!-- doctors area start -->
<div class="our-doctors bg-gray pt--100 pb--70">
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="section-title">
                    <h2>OUR EXPERT <span>DOCTORS</span></h2>
                    <div class="icon-bar bg-gray-icon"><img src="assets/img/icon/sc-title-btm.png" alt="shape"></div>
                    <p>Duis aliquet metus vel nunc convallis placerat. Maecenas erat dui rhoncus a est vel,</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-6">
                <div class="single-doctor">
                    <div class="doctor-thumb">
                        <img src="assets/img/doctors/doctor-img1.jpg" alt="image">
                        <div class="dctor-hover-info">
                            <h2><a href="#">MAKE APPOINTMENT</a></h2>
                            <div class="dctr-social-link">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-linkedin"></i></a>
                                <a href="#"><i class="fa fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="doctor-meta">
                        <h4>Elizabeth Jane</h4>
                        <p>Chief Doctor</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="single-doctor">
                    <div class="doctor-thumb">
                        <img src="assets/img/doctors/doctor-img2.jpg" alt="image">
                        <div class="dctor-hover-info">
                            <h2><a href="#">MAKE APPOINTMENT</a></h2>
                            <div class="dctr-social-link">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-linkedin"></i></a>
                                <a href="#"><i class="fa fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="doctor-meta">
                        <h4>Steven Fance</h4>
                        <p>Hygienist</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="single-doctor">
                    <div class="doctor-thumb">
                        <img src="assets/img/doctors/doctor-img3.jpg" alt="image">
                        <div class="dctor-hover-info">
                            <h2><a href="#">MAKE APPOINTMENT</a></h2>
                            <div class="dctr-social-link">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-linkedin"></i></a>
                                <a href="#"><i class="fa fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="doctor-meta">
                        <h4>Darcy Steven</h4>
                        <p>Chief Dentist</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="single-doctor">
                    <div class="doctor-thumb">
                        <img src="assets/img/doctors/doctor-img4.jpg" alt="image">
                        <div class="dctor-hover-info">
                            <h2><a href="#">MAKE APPOINTMENT</a></h2>
                            <div class="dctr-social-link">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-linkedin"></i></a>
                                <a href="#"><i class="fa fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="doctor-meta">
                        <h4>Lily Brown</h4>
                        <p>Chief Doctor</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- doctors area end -->
<!-- testimonial area start -->
<div class="testimonial-area ptb--100">
    <div class="container">
        <div class="testimonial-carousel owl-carousel">
            <div class="tst-item">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
                <div class="tst-thumb">
                    <img src="assets/img/author/tst-thumb1.jpg" alt="image">
                </div>
                <h4>Daniel Kristin</h4>
                <span>Dallar, US</span>
            </div>
            <div class="tst-item">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
                <div class="tst-thumb">
                    <img src="assets/img/author/tst-thumb1.jpg" alt="image">
                </div>
                <h4>Daniel Kristin</h4>
                <span>Dallar, US</span>
            </div>
            <div class="tst-item">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
                <div class="tst-thumb">
                    <img src="assets/img/author/tst-thumb1.jpg" alt="image">
                </div>
                <h4>Daniel Kristin</h4>
                <span>Dallar, US</span>
            </div>
        </div>
    </div>
</div>
<!-- testimonial area end -->
<!-- feature blog area start -->
<div class="feature-blog-area bg-gray ptb--100">
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="section-title">
                    <h2>LATEST <span>NEWS</span></h2>
                    <div class="icon-bar bg-gray-icon"><img src="assets/img/icon/sc-title-btm.png" alt="shape"></div>
                    <p>Duis aliquet metus vel nunc convallis placerat. Maecenas erat dui rhoncus a est vel,</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="ft-blog">
                    <div class="ftb-thumb">
                        <img src="assets/img/blog/blog-thumb1.jpg" alt="image">
                        <a href="blog.html"><i class="fa fa-link"></i></a>
                    </div>
                    <div class="blog-content">
                        <h2><a href="blog.html">We Provide the best Treatment</a></h2>
                        <div class="blog-meta">
                            <p><i class="fa fa-user"></i>By Admin <span><i class="fa fa-calendar"></i>10 Jan 2018 </span></p>
                        </div>
                        <p>Quisque vulputate vestibulum libero, aliquet nibh feugiat quis. Donec et nisi augue Cras dolor dolor, rhoncus ac mattis eu, congue vel nulla. Suspendisse gravida sed est non convallis. </p>
                    </div>
                    <div class="blog-meta blg-btm-meta">
                        <p><i class="fa fa-comments-o"></i> 13 Comments <span><i class="fa fa-thumbs-up"></i>415 Likes</span></p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="ft-blog">
                    <div class="ftb-thumb">
                        <img src="assets/img/blog/blog-thumb2.jpg" alt="image">
                        <a href="blog.html"><i class="fa fa-link"></i></a>
                    </div>
                    <div class="blog-content">
                        <h2><a href="blog.html">We Provide the best Treatment</a></h2>
                        <div class="blog-meta">
                            <p><i class="fa fa-user"></i>By Admin <span><i class="fa fa-calendar"></i>10 Jan 2018 </span></p>
                        </div>
                        <p>Quisque vulputate vestibulum libero, aliquet nibh feugiat quis. Donec et nisi augue Cras dolor dolor, rhoncus ac mattis eu, congue vel nulla. Suspendisse gravida sed est non convallis. </p>
                    </div>
                    <div class="blog-meta blg-btm-meta">
                        <p><i class="fa fa-comments-o"></i> 13 Comments <span><i class="fa fa-thumbs-up"></i>415 Likes</span></p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="ft-blog">
                    <div class="ftb-thumb">
                        <img src="assets/img/blog/blog-thumb3.jpg" alt="image">
                        <a href="blog.html"><i class="fa fa-link"></i></a>
                    </div>
                    <div class="blog-content">
                        <h2><a href="blog.html">We Provide the best Treatment</a></h2>
                        <div class="blog-meta">
                            <p><i class="fa fa-user"></i>By Admin <span><i class="fa fa-calendar"></i>10 Jan 2018 </span></p>
                        </div>
                        <p>Quisque vulputate vestibulum libero, aliquet nibh feugiat quis. Donec et nisi augue Cras dolor dolor, rhoncus ac mattis eu, congue vel nulla. Suspendisse gravida sed est non convallis. </p>
                    </div>
                    <div class="blog-meta blg-btm-meta">
                        <p><i class="fa fa-comments-o"></i> 13 Comments <span><i class="fa fa-thumbs-up"></i>415 Likes</span></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- feature blog area end -->
<!-- footer area start -->
<?php include'footer.php' ;?>
<!-- footer area end -->

<!-- jquery latest version -->
<script src="assets/js/vendor/jquery-2.2.4.min.js"></script>
<!-- bootstrap 4 js -->
<script src="assets/js/bootstrap.min.js"></script>
<!-- others plugins -->
<script src="assets/js/owl.carousel.min.js"></script>
<script src="assets/js/jquery.slicknav.min.js"></script>
<script src="assets/js/counterup.min.js"></script>
<script src="assets/js/waypoints.js"></script>
<script src="assets/js/imagesloaded.pkgd.min.js"></script>
<script src="assets/js/isotope.pkgd.min.js"></script>
<script src="assets/js/jquery.magnific-popup.min.js"></script>
<script src="assets/js/nice-select-plugin.js"></script>
<script src="assets/js/medituch-cube.js"></script>
<script src="assets/js/plugins.js"></script>
<script src="assets/js/jQuery.scrollSpeed.js"></script>
<script src="assets/js/jQuery.scrollSpeed.js"></script>
<script src="assets/js/scripts.js"></script>
</body>


<!-- Mirrored from irsfoundation.com/tf/html/medytuch-preview/medytuch/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 09 Nov 2018 16:10:05 GMT -->
</html>