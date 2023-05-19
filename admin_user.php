<?php
    include('./layout/admin_header.php');
?>
         <!-- Page Content  -->
         <div id="content-page" class="content-page">
            <div class="container-fluid">
               <div class="row">
                  <div class="col-sm-12">
                     <div class="iq-card">
                        <div class="iq-card-header d-flex justify-content-between">
                           <div class="iq-header-title">
                              <h4 class="card-title">User Lists</h4>
                           </div>
                        </div>
                        <div class="iq-card-body">
                           <div class="table-responsive">
                              <table class="data-tables table table-striped table-bordered" style="width:100%">
                                <thead>
                                    <tr>
                                        <th >No</th>
                                        <th >User Name</th>
                                        <th >Email</th>
                                        <th>Phone</th>
                                        <th>Active</th>
                                    </tr>
                                </thead>
                                <tbody>
                                  <?php
                                    $sql ="SELECT * FROM `user` WHERE 1";
                                    $ketQuaTruyVan = mysqli_query($conn,$sql);
                                    if($ketQuaTruyVan->num_rows>0){
                                      $i=1;
                                      while($user = $ketQuaTruyVan->fetch_assoc()){
                                        ?>
                                        <tr>
                                        <td><?=$i?></td>
                                        <td><?=$user['user_name']?></td>
                                        <td><?=$user['user_email']?></td>
                                        <td><?=$user['user_phone']?></td>
                                        <td>
                                           <div class="flex align-items-center list-user-action">
                                             <a class="bg-primary" data-toggle="tooltip" data-placement="top" title="" data-original-title="View" href="admin_user_detail.php?id=<?=$user['user_id']?>"><i class="fa fa-plus-square" aria-hidden="true"></i></a>
                                             <!-- <a class="bg-primary" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete" href="./admin_handle/admin_delete_user.php?id=<?=$user['user_id']?>"><i class="ri-delete-bin-line"></i></a> -->
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
         var a = document.querySelector('.user');
         a.classList.add('active')

         var namePage = document.querySelectorAll('.name_page');
         namePage.forEach((e)=>{
            e.innerHTML = 'User';
         })
      </script>