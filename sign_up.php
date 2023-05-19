<?php
    require_once("./db/connect.php");
?>
<!doctype html>
<html lang="en">
   <head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <title>Booktopia</title>
      <!-- Favicon -->
      <link rel="shortcut icon" href="images/favicon.ico" />
      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <!-- Typography CSS -->
      <link rel="stylesheet" href="css/typography.css">
      <!-- Style CSS -->
      <link rel="stylesheet" href="css/style.css">
      <!-- Responsive CSS -->
      <link rel="stylesheet" href="css/responsive.css">
   </head>
   <body>
      <!-- loader Start -->
      <div id="loading">
         <div id="loading-center">
         </div>
      </div>
      <!-- loader END -->
        <!-- Sign in Start -->
        <section class="sign-in-page">
            <div class="container p-0">
                <div class="row no-gutters height-self-center">
                  <div class="col-sm-12 align-self-center page-content rounded">
                    <div class="row m-0">
                      <div class="col-sm-12 sign-in-page-data">
                          <div class="sign-in-from bg-primary rounded">
                              <h3 class="mb-0 text-center text-white">Sign Up</h3>
                              <p class="text-center text-white">Enter your information to register account.</p>
                              <form class="mt-4 form-text form" action="sign_up_do.php" method="post">
                                  <div class="form-group">
                                      <label >Your name</label>
                                      <input type="text" class="form-control mb-0 name" id="exampleInputEmail1" name="name" placeholder="Your Full Name">
                                      <span class= "form-message"></span>
                                  </div>
                                  <div class="form-group">
                                      <label >Your email</label>
                                      <input type="text" class="form-control mb-0 email" id="exampleInputEmail2" name="email" placeholder="Enter email">
                                      <span class= "form-message"></span>
                                  </div>
                                    <?php
                                        $sql = "SELECT user_email FROM user";
                                        $ketQuaTruyVan = mysqli_query($conn,$sql);
                                        if(isset($ketQuaTruyVan->num_rows) && $ketQuaTruyVan->num_rows >0)
                                        {   
                                            while($trangThai = $ketQuaTruyVan->fetch_assoc())
                                            {
                                            echo "<input class='form-control mb-0 emailed' type='hidden' value='".$trangThai['user_email']."'>";
                                            }
                                        }
                                    ?>
                                  <div class="form-group">
                                      <label >Password</label>
                                      <input type="text" class="form-control mb-0 password" id="exampleInputPassword1" name="password" placeholder="Password">
                                      <span class= "form-message"></span>
                                  </div>
                                  <div class="form-group">
                                        <label >Confirm password</label>
                                        <input type="text" class="form-control mb-0 re_password" id="exampleInputPassword1" name="re_password" placeholder="Password">
                                        <span class= "form-message"></span>
                                  </div>
                                  <div class="sign-info text-center">
                                      <button type="submit" class="btn btn-white d-block w-100 mb-2 ">Sign Up</button>
                                      <span class="text-dark d-inline-block line-height-2">Already Have Account ? <a href="sign_in.php" class="text-white">Sign In</a></span>
                                  </div>
                              </form>
                          </div>
                      </div>
                    </div>
                  </div>
                </div>
            </div>
        </section>
    

        <!-- Sign in END -->

      <!-- Optional JavaScript -->
      <!-- jQuery first, then Popper.js, then Bootstrap JS -->
      <script src="js/jquery.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.min.js"></script>
      <!-- Appear JavaScript -->
      <script src="js/jquery.appear.js"></script>
      <!-- Countdown JavaScript -->
      <script src="js/countdown.min.js"></script>
      <!-- Counterup JavaScript -->
      <script src="js/waypoints.min.js"></script>
      <script src="js/jquery.counterup.min.js"></script>
      <!-- Wow JavaScript -->
      <script src="js/wow.min.js"></script>
      <!-- lottie JavaScript -->
      <script src="js/lottie.js"></script>
      <!-- Apexcharts JavaScript -->
      <script src="js/apexcharts.js"></script>
      <!-- Slick JavaScript -->
      <script src="js/slick.min.js"></script>
      <!-- Select2 JavaScript -->
      <script src="js/select2.min.js"></script>
      <!-- Owl Carousel JavaScript -->
      <script src="js/owl.carousel.min.js"></script>
      <!-- Magnific Popup JavaScript -->
      <script src="js/jquery.magnific-popup.min.js"></script>
      <!-- Smooth Scrollbar JavaScript -->
      <script src="js/smooth-scrollbar.js"></script>
      <!-- Style Customizer -->
      <script src="js/style-customizer.js"></script>
      <!-- Chart Custom JavaScript -->
      <script src="js/chart-custom.js"></script>
      <!-- Custom JavaScript -->
      <script src="js/custom.js"></script>

      <script src="js/log.js"></script>
   </body>
</html>