<?php
include('./layout/header.php');
$per_page_record = 12;  // Number of entries to show in a page.
// Look for a GET variable page if not found default is 1.
if (isset($_GET['page'])) {
$page  = $_GET['page'];
}
else {
$page=1;
}
$start_from = ($page-1) * $per_page_record;
?>
 <!-- Page Content  -->
 <div id="content-page" class="content-page">
            <div class="container-fluid">
               <div class="row">
                  <div class="col-lg-12">
                     <div class="iq-card-transparent mb-0">
                        <div class="d-block text-center">
                           <!--<h2 class="mb-3">Tìm kiếm sách</h2>   --> 
                           <div class="w-100 iq-search-filter">
                              <ul class="list-inline p-0 m-0 row justify-content-center search-menu-options">
                                 <li class="search-menu-opt">
                                    <div class="iq-dropdown">
                                       <div class="form-group mb-0">
                                          <select class="form-control form-search-control bg-white border-0" id="exampleFormControlSelect1">
                                             <option selected="">Category</option>
                                             <?php
                                                $sql ="SELECT * FROM `category` WHERE 1";
                                                $ketqua = mysqli_query($conn,$sql);
                                                if($ketqua->num_rows>0){
                                                   while($ctg =$ketqua->fetch_assoc()){
                                                      echo "<option value=".$ctg['ctg_id'].">".$ctg['ctg_name']."</option>";
                                                   }
                                                }
                                             ?>
                                          </select>
                                       </div>
                                    </div>
                                 </li>
                                 <li class="search-menu-opt">
                                    <div class="iq-dropdown">
                                       <div class="form-group mb-0">
                                          <select class="form-control form-search-control bg-white border-0" id="exampleFormControlSelect2">
                                             <option selected="">Author</option>
                                             <?php
                                                $sql ="SELECT * FROM `author` WHERE 1";
                                                $ketqua = mysqli_query($conn,$sql);
                                                if($ketqua->num_rows>0){
                                                   while($author =$ketqua->fetch_assoc()){
                                                      echo "<option value=".$author['author_id'].">".$author['author_name']."</option>";
                                                   }
                                                }
                                             ?>
                                          </select>
                                       </div>
                                    </div>
                                 </li>
                                 <li class="search-menu-opt">
                                    <div class="iq-dropdown">
                                       <div class="form-group mb-0">
                                          <select class="form-control form-search-control bg-white border-0" id="exampleFormControlSelect3">
                                             <option selected="">Rating</option>
                                             <option>5*</option>
                                             <option>4* & up </option>
                                             <option>3* & up</option>
                                          </select>
                                       </div>
                                    </div>
                                 </li>
                                 <li class="search-menu-opt">
                                    <div class="iq-dropdown">
                                       <div class="form-group mb-0">
                                          <select class="form-control form-search-control bg-white border-0" id="exampleFormControlSelect4">
                                             <option style="word-wrap: break-word " selected="">Publisher</option>
                                             <?php
                                                $sql ="SELECT * FROM `publisher` WHERE 1";
                                                $ketqua2 = mysqli_query($conn,$sql);
                                                if($ketqua2->num_rows>0){
                                                   while($publisher =$ketqua2->fetch_assoc()){
                                                      echo "<option value=".$publisher['publisher_id'].">".$publisher['publisher_name']."</option>";
                                                   }
                                                }
                                             ?>
                                          </select>
                                       </div>
                                    </div>
                                 </li>
                                 
                              </ul>
                           </div> 
                           <div class="w-100 iq-search-filter">
                              <ul class="list-inline p-0 m-0 row justify-content-center search-menu-options">
                                 <li class="search-menu-opt">
                                    <div class="iq-search-bar search-book d-flex align-items-center">
                                       <form action="#" class="searchbox">
                                          <input type="text" class="text search-input" placeholder="Tìm kiếm...">
                                          <a class="search-link" href="#"><i class="ri-search-line"></i></a>
                                       </form>
                                       <button type="submit" class="btn btn-primary search-data ml-2">Search</button>
                                    </div>
                                 </li>
                              </ul>
                           </div> 
                        </div>
                     </div>
                     <div class="iq-card">
                        <div class="iq-card-body">
                           <div class="row"> 
                              <?php
                                 $sql ="SELECT `prd_id`, `prd_name`, `prd_in_stock`, `prd_in_order`, `prd_price`, `prd_img`, `prd_release`, `publisher_name`, `author_name`, `ctg_name`, `discount_id`, `prd_description` 
                                 FROM `product`,author,publisher,category 
                                 WHERE product.author_id = author.author_id and product.publisher_id= publisher.publisher_id and product.ctg_id = category.ctg_id limit $start_from,$per_page_record";
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
                        <div class="pagination-area">
                        <nav>
                        <ul class="page-numbers">
                        <?php
                              $query = "SELECT COUNT(*) FROM product";
                              $rs_result = mysqli_query($conn, $query);
                              $row = mysqli_fetch_row($rs_result);
                              $total_records = $row[0];
                              echo "</br>";
                              // Number of pages required.
                              $total_pages = ceil($total_records / $per_page_record);
                              $pagLink = "";
                              if($page>=2)
                              {
                                 echo "<li> <a class='page-number' href='catergory.php?page=".($page-1)."'>  Prev </a> </li>";
                              }
                              for ($i=1; $i<=$total_pages; $i++)
                              {
                              if ($i == $page) {
                              $pagLink .= "<li> <a class='page-number active_page' href='catergory.php?page=".$i."'>".$i." </a> </li>";
                              }
                              else  {
                              $pagLink .= "<li> <a class='page-number' href='catergory.php?page=".$i."'>".$i." </a></li>";
                              }
                              };
                              echo $pagLink;
                              if($page<$total_pages){
                              echo "<li><a class='page-number' href='catergory.php?page=".($page+1)."'>  Next </a></li>";
                              }
                              ?>
                              </ul>
                        </nav>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- Wrapper END -->
<?php
include('./layout/footer.php')
?>
      <script>
         var a = document.querySelector('.menu');
         var b = document.querySelector('.category_page');
         a.classList.add('active')
         a.classList.add('active-menu');
         b.classList.add('active')

         
      </script>