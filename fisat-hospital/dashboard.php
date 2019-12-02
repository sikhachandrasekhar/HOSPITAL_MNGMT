
<!doctype html>
<html class="no-js" lang="en">


<!-- Mirrored from irsfoundation.com/tf/html/medytuch-preview/medytuch/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 09 Nov 2018 16:05:52 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>FISAT-HOSPITAL</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/png" href="assets/img/icon/favicon.ico">
    <!-- Place favicon.ico in the root directory -->
    <!-- all css here -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/flaticon.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/slicknav.min.css">
    <link rel="stylesheet" href="assets/css/nice-select.css">
    <link rel="stylesheet" href="assets/css/typography.css">
    <link rel="stylesheet" href="assets/css/default-css.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
    <!-- modernizr css -->
    <script src="assets/js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <!-- preloader area start -->
    <div id="preloader">
        <img src="assets/img/icon/loader.gif" alt="image">
    </div>
    <!-- prealoader area end -->
    <!-- header area start -->
    <header>
        <!-- header top area start -->
        <div class="header-top">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-7 col-sm-6">
                        <ul class="htp-address">
                            <li><i class="fa fa-phone"></i>+91 9539563611</li>
                            <li><i class="fa fa-envelope"></i>sikhakc96@gmail.com</li>

                           
                        </ul>
                    </div>
                    
                         <?php   require('db.php');
                          session_start(); 
                            $a= $_SESSION["username"];
                            $sql1="SELECT * FROM `register` where username='$a';";

	$result1 = mysqli_query($con, $sql1);
	if (mysqli_num_rows($result1) > 0) {
									// output data of each row
		while($row1 = mysqli_fetch_assoc($result1)) {

			$b= $row1["department"];
}
}
                            ?>
                           
                        </ul>
                    </div
                    <div class="col-md-5 col-sm-6">
                        <div class="htp-appoinment btn-style-one">
                            <a href="logout.php"><i class="fa fa-plus"></i>Logout</a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- header top area end -->
        <!-- header bottom area start -->
        <div class="header-bottom">
            <div class="hb_inner">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-3">
                            <div class="logo">
                                <a href="index.html"><img src="assets/img/icon/logo.png" alt="logo"></a>
                            </div>
                        </div>
                        <div class="col-lg-8 d-none d-lg-block">
                            <div class="main-menu">
                                <nav id="nav_mobile_menu">
                                    <ul id="navigation">
                                        <li class="active"><a href="index.php">Home</a>
                                            
                                        </li>
                                        <li><a href="about.php">About us</a></li>
                                        
                                        <li><a href="contact.php">Contact</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="col-12 d-block d-lg-none">
                            <div id="mobile_menu"></div>
                        </div>
                        <div class="col-lg-1">
                            <div class="htp-search">
                                <div class="ht-search-btn d-none d-lg-block"><i class="fa fa-search"></i></div>
                                <form action="#">
                                    <input type="text" name="search" placeholder="Search Here..">
                                    <button type="submit" name="submit" id="search_submit"><i class="fa fa-search"></i></button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- header bottom area end -->
    </header>
    <!-- header area end -->
    <!-- crumbs area start -->
    <div class="crumbs-area">
        <div class="container">
            <div class="crumbs_inner">
                
                <h2>PATIENTS</h2>
                <H3 style="

    line-height: 30px;
    margin-bottom: 0px;
    color: #ffffff;
    font-size: 20px;
    letter-spacing: 0;
    font-weight: 2PX;
    margin-bottom: 19px;
    line-height: 10px;">Doctor :  <?php
                          
                             echo $_SESSION["username"]; ?></H3>
                
                
                <ul>
                    <li><a href="index.html">Home</a></li>
                    <li><span>Contact</span></li>
                </ul>
            </div>
        </div>
    </div>
   <style type="text/css">
	
#myTable


table {
	
	 border: 8px solid #ddd;
    
   

    text-align: left;
}

 td {
    
     border: 8px solid #ddd;
}
th{
	border: 8px solid #ddd;
}
}

</style>
</html>

 
<table class="table" id="myTable" >
	<thead>
		<tr>
			<th>Name</th>
			<th>Phone</th>
			<th>Email</th>
			<th>Date</th>
			<th>Time</th>
			
			
		</tr>
	</thead>
	<?php    

	$sql="SELECT * FROM `patients` where depart='$b';";

	$result = mysqli_query($con, $sql);
	if (mysqli_num_rows($result) > 0) {
		$i=1;
								// output data of each row
		while($row = mysqli_fetch_assoc($result)) {


			echo "<tr>
			<td class=\"username\" name=\"username\">";
				echo $row["name"]."</a></td>";

				echo"     <td>".$row["phone"]."</td>"; 
				echo"     <td>".$row["email"]."</td>"; 

				echo"     <td>".$row["dates"]."</td>"; 
				echo"     <td>".$row["timeso"]."</td>";
				
					
				?>
				

				<?php   
			}
		} else {
			echo "<tr>";
			echo "0 results";

			die;
		}
		?>
	</tr>
</tbody>
</table>

    <!-- contact area end -->
    <!-- gmap area start -->
   
    <!-- gmap area end -->
    <!-- footer area start -->
  
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
    <!-- google map -->
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBO_5h890WNShs_YLGivCBfs2U89qXR-7Y&amp;callback=initMap"></script>
    <script src="assets/js/scripts.js"></script>
</body>


























>