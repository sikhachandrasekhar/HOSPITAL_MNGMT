<?php

include ('aut.php');
                        require('db.php');
                        if (isset($_POST['login'])){
        // removes backslashes
                            $username = ($_REQUEST['username']);

                            $password = ($_REQUEST['password']);

                            $query = "SELECT * FROM `register` WHERE username='$username'
                            and password='$password'";
                            $result = mysqli_query($con,$query) or die(mysql_error());
                            $rows = mysqli_num_rows($result);
                            if($rows==1){
                                $_SESSION['username'] = $username;

                                header("Location: dashboard.php");
                            }else{ $_SESSION['logged']=false;
                            echo "error";
             // echo "<script>".        "swal('error login');".        "</script>";
                           }
                       }
                            ?>



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
                        <h3>Log in</h3>

                        <form  method="post" style="align:center;">
                            <div class="row">


                                <div class="col-sm-6" " style="margin-left: 159px;margin-top: 10px;">
                                    <input type="text" name="username" placeholder="Username"></br>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6" style="margin-left: 159px;">
                                    <input type="password" name="password" placeholder="Password">
                                </div>
                            </div>

                            
                            <div class="btn-style-one icon-right" style="margin-top: 10px;">
                                <button type="submit" name="login" > login<i class="fa fa-arrow-right"></i></button>
                            </div>
                            <div class="btn-style-one icon-right" style="margin-top: 10px;">
                                <button type="submit" name="register" id="appnmt-submit"><a href="register.php">Register<i class="fa fa-arrow-right"></i></a></button>
                            </div>
                        </form>
                        





                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- appoinment area end -->
    <!-- service area start -->

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