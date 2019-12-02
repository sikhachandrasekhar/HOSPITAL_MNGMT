
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
                            <h3>Doctor Register</h3>
                             
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
                                        <input type="text" name="id" placeholder="Emp id">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" name="Username" placeholder="Username">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="password" name="password" placeholder="password">
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
                            $department = ($_REQUEST['department']);
                            $id = ($_REQUEST['id']);
                            $Username = ($_REQUEST['Username']);
                            $password = ($_REQUEST['password']);
                            $query = "INSERT into `register` (name,phone,department,empid,Username,password)
                            VALUES ('$name', '$phone', '$department','$id','$Username','$password')";
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