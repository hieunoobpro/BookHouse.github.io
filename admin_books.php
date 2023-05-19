<?php
    include('./layout/admin_header.php')
?>
         <!-- Page Content  -->
         <div id="content-page" class="content-page">
            <div class="container-fluid">
               <div class="row">
                  <div class="col-sm-12">
                     <div class="iq-card">
                        <div class="iq-card-header d-flex justify-content-between">
                           <div class="iq-header-title">
                              <h4 class="card-title">Book Lists</h4>
                           </div>
                           <div class="iq-card-header-toolbar d-flex align-items-center">
                              <a href="admin_add_book.php" class="btn btn-primary">Add New book</a>
                           </div>
                        </div>
                        <div class="iq-card-body">
                           <div class="table-responsive">
                              <table class="data-tables table table-striped table-bordered" style="width:100%">
                                <thead>
                                    <tr>
                                        <th style="width: 3%;">No</th>
                                        <th style="width: 12%;"> Image</th>
                                        <th style="width: 15%;"> Name</th>
                                        <th style="width: 12%;"> Catergory</th>
                                        <th style="width: 12%;"> Author</th>
                                        <th style="width: 15%;"> Publisher</th>
                                        <th style="width: 18%;"> Description</th>
                                        <th style="width: 7%;"> Price</th>
                                        <th style="width: 7%;">Stock</th>
                                        <th style="width: 7%;">Order</th>
                                        <th style="width: 15%;">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $sql ="SELECT `prd_id`, `prd_name`, `prd_in_stock`, `prd_in_order`, `prd_price`, `prd_img`, `prd_release`, `publisher_name`, `author_name`,
                                     `ctg_name`, `discount_id`, `prd_description` 
                                     FROM `product`,category,author,publisher 
                                     WHERE product.ctg_id = category.ctg_id and product.author_id = author.author_id and product.publisher_id = publisher.publisher_id";
                                     $ketquatruyvan = mysqli_query($conn, $sql);
                                     if($ketquatruyvan->num_rows>0){
                                       $i=1;
                                       while($book = $ketquatruyvan->fetch_assoc()){
                                          ?>
                                          <tr>
                                        <td><?=$i?></td>
                                        <td><img class="img-fluid rounded" src="images/book/<?=$book['prd_img']?>" alt=""></td>
                                        <td><?=$book['prd_name']?></td>
                                        <td><?=$book['ctg_name']?></td>
                                        <td><?=$book['author_name']?></td>
                                        <td><?=$book['publisher_name']?></td>
                                        <td><p class="mb-0"><?=$book['prd_description']?></p></td>
                                        <td><?=$book['prd_price']?> VND</td>
                                        <td><?=$book['prd_in_stock']?></td>
                                        <td><?=$book['prd_in_order']?></td>                                    
                                        <td>
                                           <div class="flex align-items-center list-user-action">
                                             <a class="bg-primary" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit" href="admin_fix_book.php?id=<?=$book['prd_id']?>"><i class="ri-pencil-line"></i></a>
                                             <a class="bg-primary" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete" href="./admin_handle/admin_delete_book.php?id=<?=$book['prd_id']?>"><i class="ri-delete-bin-line"></i></a>
                                          </div>
                                        </td>
                                    </tr>
                                          <?php
                                          $i++;
                                       }
                                     }
                                    ?>
                                    
                                </tbody>
                            </table>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- Wrapper END -->
<?php
    include('./layout/admin_footer.php')
?>
      <script>
         var a = document.querySelector('.book');
         a.classList.add('active')

         var namePage = document.querySelectorAll('.name_page');
         namePage.forEach((e)=>{
            e.innerHTML = 'Books';
         })
      </script>