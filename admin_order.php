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
                              <h4 class="card-title">Order Lists</h4>
                           </div>
                        </div>
                        <div class="iq-card-body">
                           <div class="table-responsive">
                              <table class="data-tables table table-striped table-bordered" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>User Name</th>
                                        <th>Order Date</th>
                                        <th>Total</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                  <?php
                                    $sql ="SELECT `order_id`, `order_date`,order.user_id, `user_name`, `total_money`, `status_name` FROM `order`,`status`,user 
                                    WHERE order.status_id = status.status_id and user.user_id = order.user_id";
                                       $ketQuaTruyVan = mysqli_query($conn,$sql);
                                       if($ketQuaTruyVan->num_rows>0){
                                          while($order = $ketQuaTruyVan->fetch_assoc()){
                                             ?>
                                          <tr>
                                             <td><?=$order['order_id']?></td>
                                             <td><?=$order['user_name']?></td>
                                             <td><?=$order['order_date']?></td>
                                             <td><?=$order['total_money']?></td>
                                             <td><?=$order['status_name']?></td>
                                             <td>
                                           <div class="flex align-items-center list-user-action">
                                             <a class="bg-primary" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit" href="admin_order_detail.php?order_id=<?=$order['order_id']?>"><i class="fa fa-plus-square" aria-hidden="true"></i></a>
                                             <!-- <a class="bg-primary" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete" href="./admin_handle/admin_delete_user.php?id=<?=$user['user_id']?>"><i class="ri-delete-bin-line"></i></a> -->
                                          </div>
                                        </td>
                                          </tr>
                                             <?php
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
         var a = document.querySelector('.order');
         a.classList.add('active')

         var namePage = document.querySelectorAll('.name_page');
         namePage.forEach((e)=>{
            e.innerHTML = 'Order';
         })
      </script>