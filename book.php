<?php
    include('./layout/header.php');
    $prd_id = $_GET['id'];
?>
         <!-- TOP Nav Bar END -->
         <!-- Page Content  -->
         <div id="content-page" class="content-page">
            <div class="container-fluid">
               <div class="row">
                  <div class="col-sm-12">
                     <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                        <div class="iq-card-header d-flex justify-content-between align-items-center">
                           <h4 class="card-title mb-0">Books Description</h4>
                        </div>
                        <div class="iq-card-body pb-0">
                           <div class="description-contens align-items-top row">
                              <?php
                              $sql ="SELECT `prd_id`, `prd_name`, `prd_in_stock`, `prd_in_order`, `prd_price`, `prd_img`, `prd_release`, `publisher_name`, `author_name`, `ctg_name`, `discount_id`, `prd_description` ,author.author_id
                              FROM `product`,author,publisher,category 
                              WHERE product.author_id = author.author_id and product.publisher_id= publisher.publisher_id and product.ctg_id = category.ctg_id and prd_id = '".$prd_id."' limit 16";
                              $ketqua = mysqli_query($conn,$sql);
                              if($ketqua->num_rows>0){
                                 while($book = $ketqua->fetch_assoc()){
                              ?>
                              <div class="col-md-6">
                                    <a href="javascript:void(0);">
                                    <img src="images/book/<?=$book['prd_img']?> " class="img-fluid rounded w-100" alt="">
                                    </a>
                              </div>
                              <div class="col-md-6">
                                 <div class="iq-card-transparent iq-card-block iq-card-stretch iq-card-height">
                                    <div class="iq-card-body p-0">
                                       <h3 class="mb-3"><?=$book['prd_name']?></h3>
                                       <div class="price d-flex align-items-center font-weight-500 mb-2">
                                       <?php
                                       if($book['discount_id']== null){
                                          ?>
                                        <span class="font-size-20 pr-2 "><?=$book['prd_price']?> VND</span>

                                          <?php
                                       }else{
                                          $sql1 = "SELECT `discount_id`, `discount_name`, `discount_content`, `discount_amount` FROM `discount` WHERE discount_id = '".$book['discount_id']."'";
                                          $ketqua1 = mysqli_query($conn,$sql1);
                                          if($ketqua1->num_rows>0){
                                             $discount = $ketqua1->fetch_assoc();
                                             $price = ($book['prd_price']-($book['prd_price']*$discount['discount_amount'])/100);
                                                         ?>
                                                         <span class="font-size-20 pr-2 old-price "><?=$book['prd_price']?> VND</span>
                                                         <span class="font-size-20 pr-2 "><?=$price?> VND</span>
                                                         
                                                      <?php
                                                      }
                                       }
                                       ?>
                           
                                       </div>
                                       <div class="mb-3 d-block">
                                          <span class="font-size-20 text-warning">
                                          <i class="fa fa-star mr-1"></i>
                                          <i class="fa fa-star mr-1"></i>
                                          <i class="fa fa-star mr-1"></i>
                                          <i class="fa fa-star mr-1"></i>
                                          <i class="fa fa-star"></i>
                                          </span>
                                       </div>
                                       <span class="text-dark mb-4 pb-4 iq-border-bottom d-block"><?=$book['prd_description']?></span>
                                       <div class="text-primary mb-4">Author: <span class="text-body"><?=$book['author_name']?></span></div>
                                       <div class="text-primary mb-4">Publisher: <span class="text-body"><?=$book['publisher_name']?></span></div>
                                       <div class="text-primary mb-4">Sold: <span class="text-body"><?=$book['prd_in_order']?></span></div>
                                       <div class="mb-4 d-flex align-items-center">                                       
                                          <a href="./add_to_cart.php?prd_id=<?=$book['prd_id']?>" class="btn btn-primary view-more mr-2">Add To Cart</a>
                                       </div>
                                       <div class="mb-3">
                                          <a href="./add_wishlist.php?prd_id=<?=$book['prd_id']?>" class="text-body text-center"><span class="avatar-30 rounded-circle bg-primary d-inline-block mr-2"><i class="ri-heart-fill"></i></span><span>Add to Wishlist</span></a>
                                       </div>
                                       <div class="iq-social d-flex align-items-center">
                                          <h5 class="mr-2">Share:</h5>
                                          <ul class="list-inline d-flex p-0 mb-0 align-items-center">
                                             <li>
                                                <a href="#" class="avatar-40 rounded-circle bg-primary mr-2 facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                             </li>
                                             <li>
                                                <a href="#" class="avatar-40 rounded-circle bg-primary mr-2 twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                             </li>
                                             <li>
                                                <a href="#" class="avatar-40 rounded-circle bg-primary mr-2 youtube"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                                             </li>
                                             <li >
                                                <a href="#" class="avatar-40 rounded-circle bg-primary pinterest"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a>
                                             </li>
                                          </ul>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-12">
                     <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                        <div class="iq-card-header d-flex justify-content-between align-items-center position-relative">
                           <div class="iq-header-title">
                              <h4 class="card-title mb-0">Similar Books</h4>
                           </div>
                           <div class="iq-card-header-toolbar d-flex align-items-center">
                              <a href="#" class="btn btn-sm btn-primary view-more">View More</a>
                           </div>
                        </div>
                        <div class="iq-card-body single-similar-contens">
                           <ul id="single-similar-slider" class="list-inline p-0 mb-0 row">

                           <?php
                           $sql1 = "SELECT *  FROM product,author where author.author_id = product.author_id limit 6";
                           $ketqua1 = mysqli_query($conn,$sql1);
                           if($ketqua1->num_rows>0){
                              while($same = $ketqua1->fetch_assoc()){
                                 ?>
                                 <li class="col-md-3">
                                 <div class="row align-items-center">
                                    <div class="col-5">
                                       <div class="position-relative image-overlap-shadow">
                                          <a href="javascript:void();"><img class="img-fluid rounded w-100" src="images/book/<?=$same['prd_img']?>" alt=""></a>
                                          <div class="view-book">
                                             <a href="book.php?id=<?=$same['prd_id']?>" class="btn btn-sm btn-white">View Book</a>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-7 pl-0">
                                       <h6 class="mb-2" style="word-wrap: break-word"> <?=$same['prd_name']?></h6>
                                       <p class="text-body">Author : <?=$same['author_name']?></p>
                                       <a href="book.php?id=<?=$same['prd_id']?>" class="text-dark" tabindex="-1">Read Now<i class="ri-arrow-right-s-line"></i></a>
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
               <?php
                               }
                              }
               ?>
            </div>
         </div>
      </div>
    <!-- Wrapper END -->
    <?php
        include('./layout/footer.php');
    ?>
<script>
   var a = document.querySelector('.menu');
   var b = document.querySelector('.home_page');
   a.classList.add('active')
   a.classList.add('active-menu');
   b.classList.add('active')
</script>