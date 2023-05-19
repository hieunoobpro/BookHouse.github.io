<?php
    include('./layout/header.php')
?>
         <!-- Page Content  -->
         <?php if(isset($_SESSION['login_user']) && $_SESSION['login_user'] == 1){
         ?>
         <div id="content-page" class="content-page">
            <div class="container-fluid checkout-content">
               <div class="row">
                  <div class="col-sm-12">
                     <div class="iq-card">
                        <div class="iq-card-header d-flex justify-content-between iq-border-bottom mb-0">
                           <div class="iq-header-title">
                              <h4 class="card-title">Wishlist</h4>
                           </div>
                        </div>
                        <div class="iq-card-body">
                           <ul class="list-inline p-0 m-0">
                           <?php
                              $sql = "SELECT prd_name, prd_in_order, prd_img, prd_price,author_name,product.prd_id
                              FROM wishlist, product , author
                              WHERE author.author_id=product.author_id and product.prd_id=wishlist.prd_id and wishlist.user_id ='".$_SESSION['user_id']."' ";
                              $ketQuaTruyVan = mysqli_query($conn,$sql);
                              if ( isset($ketQuaTruyVan->num_rows) && $ketQuaTruyVan->num_rows >0) {
                                 while($wishlist = $ketQuaTruyVan->fetch_assoc()){
                              ?>
                              <li class="checkout-product">
                                 <div class="row align-items-center">
                                    <div class="col-sm-3 col-lg-2">
                                       <div class="row align-items-center">
                                          <div class="col-sm-3">
                                             <a href="remove_wishlist.php?prd_id=<?=$wishlist['prd_id']?>" class="badge badge-danger"><i class="ri-close-fill"></i></a>
                                          </div>
                                          <div class="col-sm-9">
                                             <span class="checkout-product-img">
                                             <a href="javascript:void();"><img class="img-fluid rounded" src="images/book/<?=$wishlist['prd_img']?>" alt=""></a>
                                             </span>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-sm-3 col-lg-4">
                                       <div class="checkout-product-details">
                                          <h5><?=$wishlist['prd_name']?></h5>
                                          
                                          <p >Author : <?=$wishlist['author_name']?></p>
                                          
                                          <div class="price">
                                             <h6>Price: <?=$wishlist['prd_price']?> VND</h6>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-sm-6 col-lg-6">
                                       <div class="row">
                                          <div class="col-sm-8">
                                             <div class="row align-items-center mt-2">
                                                <div class="col-sm-7 col-lg-6">
                                                   <!--<span class ="product-price"> Author :<?=$wishlist['author_name']?></span>   -->
                                                </div>
                                                <div class="product_price">
                                                   <span class ="product-price"> Sold: <?=$wishlist['prd_in_order']?></span>
                                                   <div>
                                                   <span class="font-size-11 text-warning"> Review:
                                                      <i class="fa fa-star"></i>
                                                      <i class="fa fa-star"></i>
                                                      <i class="fa fa-star"></i>
                                                      <i class="fa fa-star"></i>
                                                      <i class="fa fa-star"></i>
                                                   </span> 
                                                   </div>                                         
                                                </div>
                                                <div class="col-sm-5 col-lg-6">
                                                   <span class="product-price"></span>
                                                </div>
                                             </div>
                                          </div>
                                          <div class="col-sm-4">
                                             <a href="add_to_cart.php?prd_id=<?=$wishlist['prd_id']?>"><button type="submit" class="btn btn-primary view-more">Add To Cart</button></a>
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
    include('./layout/footer.php')
?>
      <script>
         var a = document.querySelector('.menu');
         var b = document.querySelector('.wishlist');
         a.classList.add('active')
         a.classList.add('active-menu');
         b.classList.add('active')
      </script>