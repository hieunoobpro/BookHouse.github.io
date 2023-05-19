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
                              <h4 class="card-title">Author Lists</h4>
                           </div>
                           <div class="iq-card-header-toolbar d-flex align-items-center">
                              <a href="admin_add_author.php" class="btn btn-primary">Add New Author</a>
                           </div>
                        </div>
                        <div class="iq-card-body">
                           <div class="table-responsive">
                              <table class="data-tables table table-striped table-bordered" style="width:100%">
                                 <thead>
                                    <tr>
                                       <th style="width: 5%;">No</th>
                                       <th style="width: 5%;">Profile</th>
                                       <th style="width: 20%;">Author Name</th>
                                       <th style="width: 20%;">Author Email</th>
                                       <th style="width: 60%;">Author Description</th>
                                       <th style="width: 10%;">Action</th>
                                    </tr>
                                 </thead>
                                 <tbody>
                                 <?php
                                    $sql ="SELECT `author_id`, `author_name`, `author_description`, `author_img`, `author_email` FROM `author` WHERE 1";
                                    $ketQuaTruyVan = mysqli_query($conn,$sql);
                                    if($ketQuaTruyVan->num_rows>0){
                                      $i=1;
                                      while($author = $ketQuaTruyVan->fetch_assoc()){
                                        ?>
                                       <tr>
                                       <td><?=$i?></td>
                                       <td>
                                          <img src="./images/author/<?=$author['author_img']?>" class="img-fluid avatar-50 rounded" alt="author-profile">
                                       </td>
                                       <td><?=$author['author_name']?></td>
                                       <td><?=$author['author_email']?></td>
                                       <td>
                                          <p class="mb-0"><?=$author['author_description']?></p>
                                       </td>
                                       <td>
                                          <div class="flex align-items-center list-user-action">
                                             <a class="bg-primary" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit" href="./admin_fix_author.php?id=<?=$author['author_id']?>"><i class="ri-pencil-line"></i></a>
                                             <a class="bg-primary" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete" href="./admin_handle/admin_delete_author.php?id=<?=$author['author_id']?>"><i class="ri-delete-bin-line"></i></a>
                                          </div>
                                       </td>
                                    </tr>
                                        <?php
                                        $i+=1;
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
         var a = document.querySelector('.author');
         a.classList.add('active')

         var namePage = document.querySelectorAll('.name_page');
         namePage.forEach((e)=>{
            e.innerHTML = 'Author';
         })
      </script>