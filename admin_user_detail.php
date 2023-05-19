<?php
    include('./layout/admin_header.php');
    $id = $_GET['id'];
    $sql ="SELECT * FROM `user` WHERE 1";
    $ketQuaTruyVan = mysqli_query($conn,$sql);
    if($ketQuaTruyVan->num_rows>0){
        $user = $ketQuaTruyVan->fetch_assoc();
    }
       
?>
         <!-- Page Content  -->
         <div id="content-page" class="content-page">
            <div class="container-fluid">
               <div class="row profile-content">
                  <div class="col-12 col-md-12 col-lg-4">
                     <div class="iq-card">
                        <div class="iq-card-body profile-page">
                           <div class="profile-header">
                              <div class="cover-container text-center">
                                 <img src="images/user/vô danh.png" alt="profile-bg" class="rounded-circle img-fluid">
                                 <div class="profile-detail mt-3">
                                    <h3><?=$user['user_name']?></h3>
                                    <!-- <p class="text-primary">Web designer</p> -->
                                    <p>Hello, customer</p>
                                 </div>
                                 <div class="iq-social d-inline-block align-items-center">
                                    <ul class="list-inline d-flex p-0 mb-0 align-items-center">
                                       <li>
                                          <a href="#" class="avatar-40 rounded-circle bg-primary mr-2 facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                       </li>
                                       <li>
                                          <a href="#" class="avatar-40 rounded-circle bg-primary mr-2 twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                       </li>
                                       <li>
                                          <a href="#" class="avatar-40 rounded-circle bg-primary mr-2 youtube"><i class="fa fa-youtube-play" aria-hidden="true"></i></a>
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
                     <div class="iq-card">
                        <div class="iq-card-header d-flex justify-content-between align-items-center mb-0">
                           <div class="iq-header-title">
                              <h4 class="card-title mb-0">Personal Details</h4>
                           </div>
                        </div> 
                        <div class="iq-card-body">
                           <ul class="list-inline p-0 mb-0">
                              <li>
                                 <div class="row align-items-center justify-content-between mb-3">
                                    <div class="col-sm-4">
                                       <h6>Birthday</h6>                                       
                                    </div>
                                    <div class="col-sm-8">
                                       <p class="mb-0"><?=$user['user_birthday']?></p>                                       
                                    </div>
                                 </div>
                              </li>
                              <li>
                                 <div class="row align-items-center justify-content-between mb-3">
                                    <div class="col-sm-4">
                                       <h6>Address</h6>                                       
                                    </div>
                                    <div class="col-sm-8">
                                       <p class="mb-0"><?=$user['user_address']?></p>                                       
                                    </div>
                                 </div>
                              </li>
                              <li>
                                 <div class="row align-items-center justify-content-between mb-3">
                                    <div class="col-sm-4">
                                       <h6>Phone</h6>                                       
                                    </div>
                                    <div class="col-sm-8">
                                       <p class="mb-0"><?=$user['user_phone']?></p>                                       
                                    </div>
                                 </div>
                              </li>
                              <li>
                                 <div class="row align-items-center justify-content-between mb-3">
                                    <div class="col-sm-4">
                                       <h6>Email</h6>                                       
                                    </div>
                                    <div class="col-sm-8">
                                       <p class="mb-0" style="word-wrap: break-word "><?=$user['user_email']?></p>                                       
                                    </div>
                                 </div>
                              </li>         
                           </ul>
                        </div>
                     </div>
                  </div>
                  <div class="col-12 col-md-12 col-lg-8">
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
                                              <th >No</th>
                                              <th >Order Date</th>
                                              <th >Total</th>
                                              <th >Status</th>
                                          </tr>
                                      </thead>
                                      <tbody>
                                       <?php
                                       $sql = "SELECT `order_id`, `order_date`, `user_id`, `total_money`, `status_name` FROM `order`,`status` 
                                       WHERE user_id = '".$user['user_id']."' and order.status_id = status.status_id";
                                       $ketQuaTruyVan = mysqli_query($conn,$sql);
                                       if($ketQuaTruyVan->num_rows>0){
                                          while($order = $ketQuaTruyVan->fetch_assoc()){
                                             ?>
                                          <tr>
                                             <td><a href="#"><?=$order['order_id']?></a></td>
                                             <td><?=$order['order_date']?></td>
                                             <td><?=$order['total_money']?></td>
                                             <td><?=$order['status_name']?></td>
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
         </div>
      <!-- Wrapper END -->

<?php
    include('./layout/admin_footer.php')
?>
      <script>
         var a = document.querySelector('.user');
         a.classList.add('active')
      </script>