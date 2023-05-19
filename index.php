<?php
include('./layout/header.php');
?>
<!-- Page Content  -->
<div id="content-page" class="content-page">
            <div class="container-fluid">
               <div class="row">
                  <div class="col-lg-12">
                     <div class="iq-card-transparent iq-card-block iq-card-stretch iq-card-height rounded">
                        <div class="newrealease-contens">
                           <ul id="newrealease-slider" class="list-inline p-0 m-0 d-flex align-items-center">
                           <?php
                              $sql = "SELECT prd_img FROM `product` WHERE 1  order by prd_in_order DESC LIMIT 10";
                              $ketqua = mysqli_query($conn, $sql);
                              if($ketqua->num_rows>0){
                                 while($img = $ketqua->fetch_assoc()){
                                    ?>
                                    <li class="item">
                                 <a href="javascript:void(0);">
                                    <img src="images/book/<?=$img['prd_img']?>" class="img-fluid w-100 rounded" alt="">
                                 </a>
                              </li>
                                    <?php
                                 }
                              }
                           ?>
                           </ul>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-12">
                     <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                        <div class="iq-card-header d-flex justify-content-between align-items-center position-relative">
                           <div class="iq-header-title">
                              <h4 class="card-title mb-0">Books</h4>
                           </div>
                           <div class="iq-card-header-toolbar d-flex align-items-center">                              
                              <a href="catergory.php" class="btn btn-sm btn-primary view-more">View More</a>
                           </div>
                        </div> 
                        <div class="iq-card-body">  
                           <div class="row">
                              <?php
                                 $sql ="SELECT `prd_id`, `prd_name`, `prd_in_stock`, `prd_in_order`, `prd_price`, `prd_img`, `prd_release`, `publisher_name`, `author_name`, `ctg_name`, `discount_id`, `prd_description` 
                                 FROM `product`,author,publisher,category 
                                 WHERE product.author_id = author.author_id and product.publisher_id= publisher.publisher_id and product.ctg_id = category.ctg_id limit 16";
                                 $ketqua = mysqli_query($conn,$sql);
                                 if($ketqua->num_rows>0){
                                    while($book = $ketqua->fetch_assoc()){
                                       ?>
                                                <!-- sách -->
                                    <div class="col-sm-6 col-md-4 col-lg-3">
                                       <div class="iq-card iq-card-block iq-card-stretch iq-card-height browse-bookcontent">
                                          <div class="iq-card-body p-0">
                                             <div class="d-flex align-items-center">
                                                <div class="col-6 p-0 position-relative image-overlap-shadow">
                                                   <a href="javascript:void();"><img class="img-fluid rounded w-100" src="images/book/<?=$book['prd_img']?>" alt=""></a>
                                                   <div class="view-book">
                                                      <a href="book.php?id=<?=$book['prd_id']?>" class="btn btn-sm btn-white">View Book</a>
                                                   </div>
                                                   
                                                   <!-- <p style="font-size: 14px; text-align: center;">Ordered: <?=$book['prd_in_order']?></p> -->
                                                </div>
                                                <div class="col-6">
                                                   <div class="mb-2">
                                                      <h6 class="mb-1"><?=$book['prd_name']?></h6>
                                                      <p class="font-size-13 line-height mb-1"><?=$book['author_name']?></p>
                                                      <div class="d-block line-height">
                                                         <span class="font-size-11 text-warning">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                         </span>                                             
                                                      </div>
                                                   </div>
                                                   <div class="price d-flex align-items-center">
                                                      <?php
                                                      if($book['discount_id']== null){
                                                         ?>
                                                      <span class="product-price font-size-12"><b><?=$book['prd_price']?> VND</b></span>
                                                         <?php
                                                      }else{
                                                         $sql1 = "SELECT `discount_id`, `discount_name`, `discount_content`, `discount_amount` FROM `discount` WHERE discount_id = '".$book['discount_id']."'";
                                                         $ketqua1 = mysqli_query($conn,$sql1);
                                                         if($ketqua1->num_rows>0){
                                                            $discount = $ketqua1->fetch_assoc();
                                                            $price = ($book['prd_price']-($book['prd_price']*$discount['discount_amount'])/100);
                                                                      ?>
                                                               <span class="pr-1 old-price"><?=$book['prd_price']?></span>
                                                               <span class="product-price font-size-12"><b><?=$price?> VND</b></span>
                                                                     <?php
                                                                     }
                                                      }
                                                      ?>
                                                   </div>
                                                   <div class="iq-product-action">
                                                      <a href="./add_to_cart.php?prd_id=<?=$book['prd_id']?>"><i class="ri-shopping-cart-2-fill text-primary"></i></a>
                                                      
                                                      <a href="./add_wishlist.php?prd_id=<?=$book['prd_id']?>" class="ml-2"><i class="ri-heart-fill text-danger"></i></a>
                                                   </div>                                      
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <!--  -->
                                       <?php
                                    }
                                 }
                              ?>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-6">
                     <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                        <div class="iq-card-header d-flex justify-content-between mb-0">
                           <div class="iq-header-title">
                              <h4 class="card-title">Featured Books</h4>
                           </div>
                           <div class="iq-card-header-toolbar d-flex align-items-center">
                              <div class="dropdown">
                                 <span class="dropdown-toggle p-0 text-body" id="dropdownMenuButton2" data-toggle="dropdown">
                                 This Week
                                 </span>
                              </div>
                           </div>
                        </div>
                        <?php
                           $sql2 ="SELECT `prd_id`, `prd_name`, `prd_in_stock`, `prd_in_order`, `prd_price`, `prd_img`, `prd_release`, `publisher_id`, `author_name`, `ctg_id`, `discount_id`, `prd_description` 
                           FROM `product`, author WHERE product.author_id = author.author_id order by prd_in_order DESC limit 1";

                           $ketqua2 = mysqli_query($conn,$sql2);
                           if($ketqua2->num_rows>0){
                              $feature_book = $ketqua2->fetch_assoc();
                           }
                        ?>
                        <div class="iq-card-body">
                           <div class="row align-items-center">
                              <div class="col-sm-5 pr-0">
                                 <a href="javascript:void();"><img class="img-fluid rounded w-100" src="images/book/<?=$feature_book['prd_img']?>" width="100%" alt=""></a>
                              </div>
                              <div class="col-sm-7 mt-3 mt-sm-0">
                                 <h4 class="mb-2"><?=$feature_book['prd_name']?></h4>
                                 <p class="mb-2">Author: <?=$feature_book['author_name']?></p>
                                 <div class="mb-2 d-block">
                                    <span class="font-size-12 text-warning">
                                       <i class="fa fa-star"></i>
                                       <i class="fa fa-star"></i>
                                       <i class="fa fa-star"></i>
                                       <i class="fa fa-star"></i>
                                       <i class="fa fa-star"></i>
                                    </span>
                                 </div>
                                 <span class="text-dark mb-3 d-block limited_text" style="display: inline-block; overflow: hidden; text-overflow: ellipsis; height :150px;"><?=$feature_book['prd_description']?></span>
                                 <a href="./book.php?id=<?=$feature_book['prd_id']?>" class="btn btn-primary learn-more">Learn More</a>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-6">
                     <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                        <div class="iq-card-header d-flex justify-content-between mb-0">
                           <div class="iq-header-title">
                              <h4 class="card-title">Featured Writer</h4>
                           </div>
                           <div class="iq-card-header-toolbar d-flex align-items-center">
                              <div class="dropdown">
                                 <span class="dropdown-toggle p-0 text-body" id="dropdownMenuButton3" data-toggle="dropdown">
                                 This Week
                                 </span>
                              </div>
                           </div>
                        </div>
                        <div class="iq-card-body">
                           <ul class="list-inline row mb-0 align-items-center iq-scrollable-block">

                           <?php
                           $sql3="SELECT count(`prd_id`) as quantity,product.author_id ,author_name,author_img FROM `product`,author
                            WHERE author.author_id = product.author_id GROUP by author_id, author_name,author_img limit 10";
                           $ketqua3 = mysqli_query($conn,$sql3);
                           if($ketqua3->num_rows>0){
                              while($author = $ketqua3->fetch_assoc()){
                                 ?>
                                 <li class="col-sm-6 d-flex mb-3 align-items-center">
                                 <div class="icon iq-icon-box mr-3">
                                    <a href="javascript:void();"><img class="img-fluid avatar-60 rounded-circle" src="images/author/<?=$author['author_img']?>" alt=""></a>
                                 </div>
                                 <div class="mt-1">
                                    <h6><?=$author['author_name']?></h6>
                                    <p class="mb-0 text-primary">Publish Books: <span class="text-body"><?=$author['quantity']?></span></p>
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
                  <div class="col-lg-12">
                     <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                        <div class="iq-card-header d-flex justify-content-between align-items-center position-relative">
                           <div class="iq-header-title">
                              <h4 class="card-title mb-0">Sale Books</h4>
                           </div>
                           <div class="iq-card-header-toolbar d-flex align-items-center">
                              <a href="./catergory.php" class="btn btn-sm btn-primary view-more">View More</a>
                           </div>
                        </div>                         
                        <div class="iq-card-body favorites-contens">
                           <ul id="favorites-slider" class="list-inline p-0 mb-0 row">
                           <?php
                           $sql4="SELECT `prd_id`, `prd_name`, `prd_in_stock`, `prd_in_order`, `prd_price`, `prd_img`, `prd_release`, `publisher_id`, `author_name`, `ctg_id`, product.discount_id, `prd_description` ,discount_amount
                           FROM `product`, author,discount WHERE product.author_id = author.author_id and product.discount_id = discount.discount_id and prd_id in (select prd_id from product where discount_id is not null) limit 10;";
                           $ketqua4 = mysqli_query($conn,$sql4);
                           if($ketqua4->num_rows>0){
                              while($sale_book = $ketqua4->fetch_assoc()){
                                 ?>
                                   <li class="col-md-4">
                                 <div class="d-flex align-items-center">
                                    <div class="col-5 p-0 position-relative">
                                       <a href="javascript:void();">
                                          <img src="images/book/<?=$sale_book['prd_img']?>" class="img-fluid rounded w-100" alt="">
                                       </a>                                
                                    </div>
                                    <div class="col-7">
                                       <h5 class="mb-2"><?=$sale_book['prd_name']?></h5>
                                       <p class="mb-2">Author : <?=$sale_book['author_name']?></p>                                          
                                       <div class="d-flex justify-content-between align-items-center text-dark font-size-13">
                                          <span>Sale</span>
                                          <span class="mr-4"><?=$sale_book['discount_amount']?>%</span>
                                       </div>
                                       <div class="iq-progress-bar-linear d-inline-block w-100">
                                          <div class="iq-progress-bar iq-bg-primary">
                                             <span class="bg-primary" data-percent="<?=$sale_book['discount_amount']?>"></span>
                                          </div>
                                       </div>
                                       <a href="./book.php?id=<?=$sale_book['prd_id']?>" class="text-dark">Read Now<i class="ri-arrow-right-s-line"></i></a>
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