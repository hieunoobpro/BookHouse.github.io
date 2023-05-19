<?php
require_once('./db/connect.php');
   if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email_post = $_POST['email'];
    $password_post = md5($_POST['password']);
    $sql1 = "SELECT `user_id`, `user_name`, `user_phone`, `user_email`, `user_password`, `user_address`, `user_sex`, `user_birthday`,'user_img'
    FROM `user` WHERE user_email = '".$email_post."'";
   $ketQuaTruyVan = mysqli_query($conn,$sql1);
   if($ketQuaTruyVan->num_rows>0){
    while($login = $ketQuaTruyVan->fetch_assoc()){
        $idUser = $login['user_id'];
        $name = $login['user_name']; 
        $img = $login['user_img']; 
        $email = $login['user_email'];
        $pass = $login['user_password'];
        $address = $login['user_address'];
        $phone = $login['user_phone'];
        if($password_post == $pass){
            session_start();
            $_SESSION['login_user']=1;
            $_SESSION['user_id']= $idUser;
            $_SESSION['user_name']= $name;
            $_SESSION['user_img']= $img;
            $_SESSION['user_email']= $email;
            $_SESSION['user_address']= $address;
            $_SESSION['user_phone']= $phone;
            echo "  <script>
            alert('Login successfully!');
            window.location = './index.php';
            </script>";
        }else{
            echo " 
                <script>
                alert('Incorrect password!');
                window.location = './sign_in.php';
                </script>";
        }
    }
}else{
    $sql2 ="SELECT `ad_id`, `ad_name`, `ad_phone`, `ad_email`, `ad_password` FROM `admin` WHERE ad_email ='".$email_post."'";
    $ketQuaTruyVan1 = mysqli_query($conn,$sql2);
   if($ketQuaTruyVan1->num_rows>0){
    while($login_ad = $ketQuaTruyVan1->fetch_assoc()){
        $idAdmin = $login_ad['ad_id'];
        $nameAdmin = $login_ad['ad_name'];
        $email_ad = $login_ad['ad_email'];
        $pass_ad = $login_ad['ad_password'];
        if($password_post == $pass_ad){
            session_start();
            $_SESSION['login_admin']=1;
            $_SESSION['ad_id']= $idAdmin;
            $_SESSION['ad_name']= $nameAdmin;
            echo "  <script>
            alert('Login succesfully!');
            window.location = './admin_dashboard.php';
            </script>";
        }else{
            echo " 
                <script>
                alert('Incorrect password!');
                window.location = './sign_in.php';
                </script>";
        }
    }
}
    else{
    echo " 
    <script>
    alert('User not exist!');
    window.location = './sign_in.php';
    </script>";
}
    }}
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
                              <h3 class="mb-0 text-center text-white">Sign in</h3>
                              <p class="text-center text-white">Enter your email address and password .</p>
                              <form class="mt-4 form-text" action="./sign_in.php" method="POST">
                                  <div class="form-group">
                                      <label for="exampleInputEmail1">Email address</label>
                                      <input type="email" name="email" class="form-control mb-0" id="exampleInputEmail1" placeholder="Enter email">
                                  </div>
                                  <div class="form-group">
                                      <label for="exampleInputPassword1">Password</label>
                                      <a href="#" class="float-right text-dark">Forgot password?</a>
                                      <input type="password" name="password" class="form-control mb-0" id="exampleInputPassword1" placeholder="Password">
                                  </div>
                                  <div class="d-inline-block w-100">
                                      <div class="custom-control custom-checkbox d-inline-block mt-2 pt-1">
                                          <input type="checkbox" class="custom-control-input" id="customCheck1">
                                          <label class="custom-control-label" for="customCheck1">Remember Me</label>
                                      </div>
                                  </div>
                                  <div class="sign-info text-center">
                                      <button type="submit" class="btn btn-white d-block w-100 mb-2">Sign in</button>
                                      <span class="text-dark dark-color d-inline-block line-height-2">Don't have an account? <a href="sign_up.php" class="text-white">Sign up</a></span>
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
      <!-- Apexcharts JavaScript -->
      <script src="js/apexcharts.js"></script>
      <!-- lottie JavaScript -->
      <script src="js/lottie.js"></script>
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
      
   </body>
</html>
