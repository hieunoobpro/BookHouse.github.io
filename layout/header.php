<?php
session_start();
include('./db/connect.php');
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

      <style>
         .page-numbers{
            display: flex;
            justify-content: center;
            align-items: center;
            list-style: none;
            padding: 20px 0px;
         }
         .page-number{
            padding: 10px;
            background-color: #676966;
            margin: 10px;
            color: var(--iq-primary);
            border-radius: 5px;
         }
         .page-number:hover{
            background-color:  var(--iq-primary);
            color: #000;
         }
         .active_page{
            background-color:  var(--iq-primary);
            color: #000;
         }
      </style>
   </head>
   <body>
      <!-- loader Start -->
      <div id="loading">
         <div id="loading-center">
         </div>
      </div>
      <!-- loader END -->
      <!-- Wrapper Start -->
      <div class="wrapper">
           <!-- Sidebar  -->
           <div class="iq-sidebar">
            <div class="iq-sidebar-logo d-flex justify-content-between">
               <a href="index.php" class="header-logo">
                  <img src="images/logo.png" class="img-fluid rounded-normal" alt="">
                  <div class="logo-title">
                     <span class="text-primary text-uppercase">Booktopia</span>
                  </div>
               </a>
               <div class="iq-menu-bt-sidebar">
                  <div class="iq-menu-bt align-self-center">
                     <div class="wrapper-menu">
                        <div class="main-circle"><i class="las la-bars"></i></div>
                     </div>
                  </div>
               </div>
            </div>
            <div id="sidebar-scrollbar">
               <nav class="iq-sidebar-menu">
                  <ul id="iq-sidebar-toggle" class="iq-menu">
                     <li class="menu" >
                        <a href="#dashboard" class="iq-waves-effect" data-toggle="collapse" aria-expanded="true"><span class="ripple rippleEffect"></span><i class="las la-home iq-arrow-left"></i><span>Shop</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                        <ul id="dashboard" class="iq-submenu collapse show" data-parent="#iq-sidebar-toggle">
                           <li class="home_page"><a href="./index.php"><i class="las la-house-damage"></i>Home Page</a></li>
                           <li class="category_page"><a href="./catergory.php"><i class="ri-function-line"></i>Product</a></li>
                           <li class="checkout"><a href="./checkout.php"><i class="ri-checkbox-multiple-blank-line"></i>Checkout</a></li>
                          <li class="wishlist"><a href="./wishlist.php"><i class="ri-heart-line"></i>Wishlist</a></li>
                        </ul>
                     </li>
                  </ul>
               </nav>
               <div id="sidebar-bottom" class="p-3 position-relative">
                  <div class="iq-card">
                     <div class="iq-card-body">
                        <div class="sidebarbottom-content">
                           <div class="image"><img src="images/page-img/side-bkg.png" alt=""></div>                           
                           <button type="submit" class="btn w-100 btn-primary mt-4 view-more">Become Membership</button>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!-- TOP Nav Bar -->
         <div class="iq-top-navbar">
            <div class="iq-navbar-custom">
               <nav class="navbar navbar-expand-lg navbar-light p-0">
                  <div class="iq-menu-bt d-flex align-items-center">
                     <div class="wrapper-menu">
                        <div class="main-circle"><i class="las la-bars"></i></div>
                     </div>
                     <div class="iq-navbar-logo d-flex justify-content-between">
                        <a href="index.php" class="header-logo">
                           <img src="images/logo.png" class="img-fluid rounded-normal" alt="">
                           <div class="logo-title">
                              <span class="text-primary text-uppercase">Booktopia</span>
                           </div>
                        </a>
                     </div>
                  </div>
                  <div class="navbar-breadcrumb">
                     <h5 class="mb-0">Shop</h5>
                     <nav aria-label="breadcrumb">
                        <ul class="breadcrumb">
                           <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                           <li class="breadcrumb-item active" aria-current="page">Home Page</li>
                        </ul>
                     </nav>
                  </div>
                  <div class="iq-search-bar">
                     <form action="#" class="searchbox">
                        <input type="text" class="text search-input" placeholder="Search Here...">
                        <a class="search-link" href="#"><i class="ri-search-line"></i></a>
                     </form>
                  </div>
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"  aria-label="Toggle navigation">
                  <i class="ri-menu-3-line"></i>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarSupportedContent">
                     <ul class="navbar-nav ml-auto navbar-list">
                        <li class="nav-item nav-icon search-content">
                           <a href="#" class="search-toggle iq-waves-effect text-gray rounded">
                              <i class="ri-search-line"></i>
                           </a>
                           <form action="#" class="search-box p-0">
                              <input type="text" class="text search-input" placeholder="Type here to search...">
                              <a class="search-link" href="#"><i class="ri-search-line"></i></a>
                           </form>
                        </li>

                        <!-- đã login -->
                        <?php
                           if(isset($_SESSION['login_user']) && $_SESSION['login_user'] ==1){
                              $img = $_SESSION['user_img'];
                              ?>
               <!-- thong báo -->
                        <li class="nav-item nav-icon dropdown">
                           <a href="#" class="search-toggle iq-waves-effect text-gray rounded">
                           <i class="ri-mail-line"></i>
                           <span class="bg-primary dots"></span>
                           </a>
                           <div class="iq-sub-dropdown">
                              <div class="iq-card shadow-none m-0">
                                 <div class="iq-card-body p-0 ">
                                    <div class="bg-primary p-3">
                                       <h5 class="mb-0 text-white">All Messages<small class="badge  badge-light float-right pt-1"></small></h5>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </li>

                        <?php
                        $sql ="SELECT count(prd_id) as all_cart from product where prd_id in (SELECT `prd_id` FROM `cart` WHERE user_id = '".$_SESSION['user_id']."' )";
                        $ketqua = mysqli_query($conn,$sql);
                        if($ketqua->num_rows>0){
                           $all = $ketqua->fetch_assoc();
                           ?>
                        <li class="nav-item nav-icon dropdown">
                           <a href="#" class="search-toggle iq-waves-effect text-gray rounded">
                           <i class="ri-shopping-cart-2-line"></i>
                           <span class="badge badge-danger count-cart rounded-circle"><?=$all['all_cart']?></span>
                           </a>
                           <div class="iq-sub-dropdown">
                              <div class="iq-card shadow-none m-0">
                                 <div class="iq-card-body p-0 toggle-cart-info">
                                    <div class="bg-primary p-3">
                                       <h5 class="mb-0 text-white">All Carts<small class="badge  badge-light float-right pt-1"><?=$all['all_cart']?></small></h5>
                                    </div>
                                    <?php
                        }
                        ?>

                        <?php
                        $sql = "SELECT `user_id`,cart.prd_id, `prd_name`,prd_img,prd_price, sum(`cart_quantity`) as quantity FROM `cart` , product
                        WHERE user_id = '".$_SESSION['user_id']."' and cart.prd_id = product.prd_id 
                        group by cart.prd_id";
                        $ketqua = mysqli_query($conn,$sql);
                        if($ketqua->num_rows>0){
                           while($cart = $ketqua->fetch_assoc()){
                        ?>
                           <a href="book.php?id=<?=$cart['prd_id']?>" class="iq-sub-card">
                           <div class="media align-items-center">
                              <div class="">
                                 <img class="rounded" src="./images/book/<?=$cart['prd_img']?>" alt="">
                              </div>
                                 <div class="media-body ml-3">
                                    <h6 class="mb-0 "><?=$cart['prd_name']?></h6>
                                    <p class="mb-0"><?=$cart['prd_price']?> VNĐ</p>
                                    <p class="mb-0">Quantity: <?=$cart['quantity']?></p>
                                 </div>
                              <div class="float-right font-size-24 text-danger"><i class="ri-close-fill"></i></div>
                           </div>
                           </a>
                        <?php
                           }
                        }
                        ?>
                           <div class="d-flex align-items-center text-center p-3">
                              <a class="btn btn-primary mr-2 iq-sign-btn" href="./checkout.php" role="button">View Cart</a>
                              <a class="btn btn-primary iq-sign-btn" href="index.php" role="button">Shop now</a>
                           </div>
                           </div>
                           </div>
                           </div>
                        </li>
                        <li class="line-height pt-3">
                           
                           <a href="#" class="search-toggle iq-waves-effect d-flex align-items-center">

                              <?php
                              if($_SESSION['user_img'] == null){
                                 echo '<img src="https://i1-dulich.vnecdn.net/2021/07/16/8-1626444967.jpg?w=1200&h=0&q=100&dpr=1&fit=crop&s=GfgGn4dNuKZexy1BGkAUNA" class="img-fluid rounded-circle mr-3" alt="user">';
                              }else{
                                 ?>

                                 <img src="images/user/vô danh.png" class="img-fluid rounded-circle mr-3" >
                                 <?php
                              }
                              ?>
                              

                              <div class="caption">   
                                 <h6 class="mb-1 line-height"><?=$_SESSION['user_name']?></h6>
                                 <!-- <p class="mb-0 text-primary">$20.32</p> -->
                              </div>
                           </a>
                           <div class="iq-sub-dropdown iq-user-dropdown">
                              <div class="iq-card shadow-none m-0">
                                 <div class="iq-card-body p-0 ">
                                    <div class="bg-primary p-3">
                                       <h5 class="mb-0 text-white line-height">Hello <?=$_SESSION['user_name']?></h5>
                                       <!-- <span class="text-white font-size-12">Available</span> -->
                                    </div>
                                    <a href="profile.php" class="iq-sub-card iq-bg-primary-hover">
                                       <div class="media align-items-center">
                                          <div class="rounded iq-card-icon iq-bg-primary">
                                             <i class="ri-file-user-line"></i>
                                          </div>
                                          <div class="media-body ml-3">
                                             <h6 class="mb-0 ">My Profile</h6>
                                             <p class="mb-0 font-size-12">View personal profile details.</p>
                                          </div>
                                       </div>
                                    </a>
                                    <a href="profile_edit.php" class="iq-sub-card iq-bg-primary-hover">
                                       <div class="media align-items-center">
                                          <div class="rounded iq-card-icon iq-bg-primary">
                                             <i class="ri-profile-line"></i>
                                          </div>
                                          <div class="media-body ml-3">
                                             <h6 class="mb-0 ">Edit Profile</h6>
                                             <p class="mb-0 font-size-12">Modify your personal details.</p>
                                          </div>
                                       </div>
                                    </a>
                                    <div class="d-inline-block w-100 text-center p-3">
                                       <a class="bg-primary iq-sign-btn" href="./sign_out.php" role="button">Sign out<i class="ri-login-box-line ml-2"></i></a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </li>
                              <?php
                           }else{
                              ?>
                              <!-- khi chưa login -->
                              <li class="nav-item nav-icon dropdown">
                           <a href="#" class="search-toggle iq-waves-effect text-gray rounded">
                           <i class="ri-shopping-cart-2-line"></i>
                           <span class="badge badge-danger count-cart rounded-circle"></span>
                           </a>
                           <div class="iq-sub-dropdown">
                              <div class="iq-card shadow-none m-0">
                                 <div class="iq-card-body p-0 toggle-cart-info">
                                    <div class="bg-primary p-3">
                                       <h5 class="mb-0 text-white" style="text-align: center;">Cart<small class="badge  badge-light float-right pt-1"></small></h5>
                                    </div>
                                    <p style="text-align:center; padding:60px 20px">You are not logged in!</p>
                                    <div class="d-flex align-items-center text-center p-3">
                                       <a class="btn btn-primary mr-2 iq-sign-btn" href="./sign_in.php" role="button">Sign in</a>
                                       <a class="btn btn-primary iq-sign-btn" href="./sign_up.php" role="button">Sign up</a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </li>
                        <li class="line-height pt-3">
                           <a href="#" class="search-toggle iq-waves-effect d-flex align-items-center">
                              <img src="https://www.shutterstock.com/image-vector/user-profile-icon-trendy-flat-260nw-1923506948.jpg" class="img-fluid rounded-circle mr-3" alt="user">
                              <div class="caption">
                                 <h6 class="mb-1 line-height">User</h6>
                              </div>
                           </a>
                           <div class="iq-sub-dropdown iq-user-dropdown">
                              <div class="iq-card shadow-none m-0">
                                 <div class="iq-card-body p-0 ">
                                    <div class="bg-primary p-3">
                                       <h5 class="mb-0 text-white line-height">Hello User</h5>
                                    </div>
                                    <p style="text-align:center; padding:60px 20px">You are not logged in!</p>
                                    <div class="d-flex align-items-center text-center p-3">
                                       <a class="btn btn-primary mr-2 iq-sign-btn" href="./sign_in.php" role="button">Sign in</a>
                                       <a class="btn btn-primary iq-sign-btn" href="./sign_up.php" role="button">Sign up</a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </li>
                        <!--  -->
                              <?php
                           }
                        ?>
                        
                        
                     </ul>
                  </div>
               </nav>
            </div>
         </div>
         <!-- TOP Nav Bar END -->