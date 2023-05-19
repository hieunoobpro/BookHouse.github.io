<?php
include('./layout/header.php')
?>
         <!-- Page Content  -->
         <?php if(isset($_SESSION['login_user']) && $_SESSION['login_user'] == 1){
         ?>
         <div id="content-page" class="content-page">
            <div class="container-fluid checkout-content">
               <div class="row">
                  <div id="cart" class="card-block show p-0 col-12">
                     <div class="row align-item-center">
                        <div class="col-lg-8">
                           <div class="iq-card">
                              <div class="iq-card-header d-flex justify-content-between iq-border-bottom mb-0">
                                 <div class="iq-header-title">
                                    <h4 class="card-title">Shopping Cart</h4>
                                 </div>
                              </div>
                              <div class="iq-card-body">
                                 <ul class="list-inline p-0 m-0">
                                 <?php
                        $sql = "SELECT `user_id`,cart.prd_id, `prd_name`,prd_img,prd_price, sum(`cart_quantity`) as quantity,author_name FROM `cart` , product,author
                        WHERE user_id = '".$_SESSION['user_id']."' and cart.prd_id = product.prd_id and product.author_id = author.author_id 
                        group by cart.prd_id";
                        $ketqua = mysqli_query($conn,$sql);
                        if($ketqua->num_rows>0){
                           while($cart = $ketqua->fetch_assoc()){
                              ?>
                                    <li class="checkout-product">
                                       <div class="row align-items-center">
                                          <div class="col-sm-2">
                                             <span class="checkout-product-img">
                                             <a href="javascript:void();"><img class="img-fluid rounded" src="images/book/<?=$cart['prd_img']?>" alt=""></a>
                                             </span>
                                          </div>
                                          <div class="col-sm-4">
                                             <div class="checkout-product-details">
                                                <h5><?=$cart['prd_name']?></h5>
                                                <p class="text-success"><?=$cart['author_name']?></p> 
                                                <div class="price">
                                                   <span class="product-price">Price: <?=$cart['prd_price']?> VND</span>
                                                </div>
                                             </div>
                                          </div>
                                          <div class="col-sm-6">
                                             <div class="row">
                                                <div class="col-sm-10">
                                                   <div class="row align-items-center mt-2">
                                                      <div class="col-sm-7 col-md-6">
                                                         <!-- <button type="button" class="fa fa-minus qty-btn" id="btn-minus"></button> -->
                                                         <!-- <input type="text" id="quantity" value=""> -->
                                                         <span>Quantity: <?=$cart['quantity']?></span>
                                                         <!-- <button type="button" class="fa fa-plus qty-btn" id="btn-plus"></button> -->
                                                      </div>
                                                      <div class="col-sm-5 col-md-6">
                                                         <span class="product-price"><?=$cart['prd_price']*$cart['quantity']?> VND</span>
                                                      </div>
                                                   </div>
                                                </div>
                                                <div class="col-sm-2">
                                                   <a href="./delete_to_cart.php ?id=<?=$cart['prd_id']?>" class="text-dark font-size-20"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </li>    
                              <?php
                           }
                        }

                        ?>
                                 </ul>
                              </div>
                           </div>
                        </div>
                        <div class="col-lg-4">
                           <div class="iq-card">
                              <div class="iq-card-body">
                                 <p>Options</p>
                                 <div class="d-flex justify-content-between">
                                    <span>Coupons</span>
                                    <span><a href="#"><strong>Apply</strong></a></span>
                                 </div>
                                 <hr>
                                 <?php
                                 $sql = "SELECT `user_id`, prd_price, `cart_quantity` FROM `cart`,product WHERE cart.prd_id = product.prd_id and user_id ='".$_SESSION['user_id']."'";
                                 $ketqua = mysqli_query($conn,$sql);
                                 $total = 0;
                                 if($ketqua->num_rows>0){
                                    while($price = $ketqua->fetch_assoc()){
                                       $money  = $price['prd_price'] * $price['cart_quantity'];
                                       $total = $total+$money;
                                    }
                                 }
                                 ?>
                                 <p><b>Price Details</b></p>
                                 <div class="d-flex justify-content-between mb-1">
                                    <span>Total </span>
                                    <span><?=$total?> VND</span>
                                 </div>
                                 <div class="d-flex justify-content-between mb-1">
                                    <span>Estimated Tax</span>
                                    <span>5%</span>
                                 </div>
                                 <div class="d-flex justify-content-between">
                                    <span>Delivery Charges</span>
                                    <span class="text-success">Free</span>
                                 </div>
                                 <hr>
                                 <div class="d-flex justify-content-between">
                                    <span class="text-dark"><strong>Total</strong></span>
                                    <span class="text-dark"><strong><?=$total - $total * 5/100?> VND</strong></span>
                                 </div>
                                 <a id="place-order" href="javascript:void();" class="btn btn-primary d-block mt-3 next">Place order</a>
                              </div>
                           </div>
                           <div class="iq-card ">
                              <div class="card-body iq-card-body p-0 iq-checkout-policy">
                                 <ul class="p-0 m-0">
                                    <li class="d-flex align-items-center">
                                       <div class="iq-checkout-icon">
                                          <i class="ri-checkbox-line"></i>
                                       </div>
                                       <h6>Security policy (Safe and Secure Payment.)</h6>
                                    </li>
                                    <li class="d-flex align-items-center">
                                       <div class="iq-checkout-icon">
                                          <i class="ri-truck-line"></i>
                                       </div>
                                       <h6>Delivery policy (Home Delivery.)</h6>
                                    </li>
                                    <li class="d-flex align-items-center">
                                       <div class="iq-checkout-icon">
                                          <i class="ri-arrow-go-back-line"></i>
                                       </div>
                                       <h6>Return policy (Easy Return.)</h6>
                                    </li>
                                 </ul>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div id="address" class="card-block p-0 col-12">
                     <div class="row align-item-center">
                        <div class="col-lg-8">
                           <div class="iq-card">
                              <div class="iq-card-header d-flex justify-content-between">
                                 <div class="iq-header-title">
                                    <h4 class="card-title">Add New Address</h4>
                                 </div>
                              </div>
                              <div class="iq-card-body">
                                 <form onsubmit="required()">
                                    <div class="row mt-3">
                                       <div class="col-md-6">
                                          <div class="form-group">
                                             <label>Full Name: *</label> 
                                             <input type="text" class="form-control" name="fname" required="">
                                          </div>
                                       </div>
                                       <div class="col-md-6">
                                          <div class="form-group"> 
                                             <label>Mobile Number: *</label> 
                                             <input type="text" class="form-control" name="mno" required="">
                                          </div>
                                       </div>
                                       <div class="col-md-6">
                                          <div class="form-group"> 
                                             <label>Address: *</label> 
                                             <input type="text" class="form-control" name="state" required="">
                                          </div>
                                       </div>
                                       <div class="col-md-6">                                          
                                       </div>
                                       <div class="col-md-6">
                                          <button id="savenddeliver" type="submit" class="btn btn-primary">Save And Deliver Here</button>
                                       </div>
                                    </div>
                                 </form>
                              </div>
                           </div>
                        </div>
                        <div class="col-lg-4">
                           <div class="iq-card">
                              <div class="iq-card-body">
                                 <h4 class="mb-2"><?=$_SESSION['user_name']?></h4>
                                 <div class="shipping-address">
                                    <p class="mb-0">Address: <?=$_SESSION['user_address']?></p>
                                    <p>Phone Number: <?=$_SESSION['user_phone']?></p>
                                    
                                    
                                 </div>
                                 <hr>
                                 <a id="deliver-address" href="javascript:void();" class="btn btn-primary d-block mt-1 next">Deliver To this Address</a>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>    
                     <!-- ADDRESSS END--> 
                  <div id="payment" class="card-block p-0 col-12">
                     <div class="row align-item-center">
                        <div class="col-lg-8">
                           <div class="iq-card">
                              <div class="iq-card-header d-flex justify-content-between">
                                 <div class="iq-header-title">
                                    <h4 class="card-title">Payment Options</h4>
                                 </div>
                              </div>
                              <div class="iq-card-body">
                                 <form class="mt-3" action="buy.php" method="post">
                                    <div class="card-lists">
                                       <div class="form-group">
                                          <div class="custom-control custom-radio">
                                             <input type="radio" id="netbaking" name="customRadio" class="custom-control-input">
                                             <label class="custom-control-label" for="netbaking"> Internet Banking</label>
                                          </div>
                                          <div class="custom-control custom-radio">
                                             <input type="radio" id="cod" name="cod" class="custom-control-input">
                                             <label class="custom-control-label" for="cod"> Cash On Delivery</label>
                                          </div>
                                          <button type="submit" class="btn btn-primary">Continue</button>
                                       </div>
                                    </div>
                                    <hr>
                                    </div>
                                    </div>
                                    </div>
                           <div class="col-lg-4">
                           <div class="iq-card">
                              <div class="iq-card-body">
                              <?php
                                 $sql = "SELECT `user_id`, prd_price, `cart_quantity` FROM `cart`,product WHERE cart.prd_id = product.prd_id and user_id ='".$_SESSION['user_id']."'";
                                 $ketqua = mysqli_query($conn,$sql);
                                 if($ketqua->num_rows>0){
                                    $total = 0;
                                    while($price = $ketqua->fetch_assoc()){
                                       $money  = $price['prd_price'] * $price['cart_quantity'];
                                       $total = $total+$money;
                                    }
                                 }
                                 ?>
                                 <p><b>Price Details</b></p>
                                 <div class="d-flex justify-content-between mb-1">
                                    <span>Total Money</span>
                                    <span><?=$total?> VNĐ</span>
                                 </div>
                                 <div class="d-flex justify-content-between mb-1">
                                    <span>Estimated Tax</span>
                                    <span>5%</span>
                                 </div>
                                 <div class="d-flex justify-content-between">
                                    <span>Delivery Charges</span>
                                    <span class="text-success">Free</span>
                                 </div>
                                 <hr>
                                 <div class="d-flex justify-content-between">
                                    <span class="text-dark"><strong>Total</strong></span>
                                    <span class="text-dark"><strong><?=$total - $total * 5/100?> VNĐ</strong></span>
                                 </div>
                              </div>
                           </div>
                           </form>
                           
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <?php
         } else {
       echo " 
       <script>
       alert('You are not logined!');
       window.location = './sign_in.php';
       </script>";
      }?>                                                                            
    <!-- Wrapper END -->
<?php
    include('./layout/footer.php');
?>
      <script>
         var a = document.querySelector('.menu');
         var b = document.querySelector('.checkout');
         a.classList.add('active')
         a.classList.add('active-menu');
         b.classList.add('active')
      </script>