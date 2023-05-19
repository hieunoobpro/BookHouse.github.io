<?php
include('./layout/header.php');

    if(isset($_SESSION['login_user']) && $_SESSION['login_user'] ==1){

      $sql = "SELECT `user_id`, `user_name`, `user_phone`, `user_email`, `user_password`, `user_address`, `user_sex`, `user_birthday`, `user_img`
      FROM `user` WHERE user_id = '".$_SESSION['user_id']."'";
      $ketqua = mysqli_query($conn,$sql);
      if($ketqua->num_rows>0){
         $user = $ketqua->fetch_assoc();
         ?>
                               
      <!-- Page Content  -->
      <div id="content-page" class="content-page">
         <div class="container-fluid">
            <div class="row">
               <div class="col-lg-12">
                  <div class="iq-card">
                     <div class="iq-card-body p-0">
                        <div class="iq-edit-list">
                           <ul class="iq-edit-profile d-flex nav nav-pills">
                              <li class="col-md-3 p-0">
                                 <a class="nav-link active" data-toggle="pill" href="#personal-information">
                                    Personal Information
                                 </a>
                              </li>
                              <li class="col-md-3 p-0">
                                 <a class="nav-link" data-toggle="pill" href="#chang-pwd">
                                    Change Password
                                 </a>
                              </li>   
                              </li>
                              <li class="col-md-3 p-0">
                                 <a class="nav-link" data-toggle="pill" href="#manage-contact">
                                    Manage Contact
                                 </a>
                              </li>
                           </ul>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-lg-12">
                  <div class="iq-edit-list-data">
                     <div class="tab-content">
                        <div class="tab-pane fade active show" id="personal-information" role="tabpanel">
                           <div class="iq-card">
                              <div class="iq-card-header d-flex justify-content-between">
                                 <div class="iq-header-title">
                                    <h4 class="card-title">Personal Information</h4>
                                 </div>
                              </div>
                              <div class="iq-card-body">
                                 <form action="./user_profile_fix.php" method="post">
                                    <input type="hidden" name="user_id" value="<?=$user['user_id']?>">
                                    <div class="form-group row align-items-center">
                                       <div class="col-md-12">
                                          <div class="profile-img-edit">
                                             <img class="profile-pic" style ="width: 150px;height: 150px;" src="images/user/vô danh.png" alt="profile-pic">
                                             
                                             
                                             
                                             
                                          </div>
                                       </div>
                                    </div>
                                    <div class=" row align-items-center">
                                       <div class="form-group col-sm-6">
                                          <label for="fname">Name</label>
                                          <input type="text" class="form-control" name="name" id="fname" value="<?=$user['user_name']?>">
                                       </div>
                                       <div class="form-group col-sm-6">
                                          <label for="uname">Email</label>
                                          <input type="text" class="form-control" name="email" id="uname" value="<?=$user['user_email']?>">
                                       </div>
                                       <div class="form-group col-sm-6">
                                          <label for="cname">Phone</label>
                                          <input type="text" class="form-control" name="phone" id="cname" value="<?=$user['user_phone']?>">
                                       </div>
                                       <div class="form-group col-sm-6">
                                          <label class="d-block">Gender:</label>
                                          <div class="custom-control custom-radio custom-control-inline">
                                             <input type="radio" id="customRadio6" name="customRadio1" class="custom-control-input" checked="">
                                             <label class="custom-control-label" for="customRadio6"> Male </label>
                                          </div>
                                          <div class="custom-control custom-radio custom-control-inline">
                                             <input type="radio" id="customRadio7" name="customRadio1" class="custom-control-input">
                                             <label class="custom-control-label" for="customRadio7"> Female </label>
                                          </div>
                                       </div>
                                       <div class="form-group col-sm-6">
                                          <label for="dob">Date Of Birth:</label>
                                          <input  class="form-control" id="dob" type="date" name="birthday" value="<?=$user['user_birthday']?>">
                                       </div>
                                       
                                       <div class="form-group col-sm-12">
                                          <label>Address:</label>
                                          <input type="text" class="form-control" name="address"  value="<?=$user['user_address']?>">

                                       </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary mr-2">Submit</button>
                                    <button type="reset" class="btn iq-bg-danger">Cancel</button>
                                 </form>
                              </div>
                           </div>
                        </div>
                        <div class="tab-pane fade" id="chang-pwd" role="tabpanel">
                           <div class="iq-card">
                              <div class="iq-card-header d-flex justify-content-between">
                                 <div class="iq-header-title">
                                    <h4 class="card-title">Change Password</h4>
                                 </div>
                              </div>
                              <div class="iq-card-body">
                                 <form action="./user_password_fix.php" method="Post">
                                    <input type="hidden" value="<?=$_SESSION['user_id']?>" name="user_id1" id="">
                                    <div class="form-group">
                                       <label for="cpass">Current Password:</label>
                                       <a href="javascripe:void();" class="float-right">Forgot Password</a>
                                       <input type="Password" class="form-control" name="password_old" id="cpass" value="">
                                    </div>
                                    <div class="form-group">
                                       <label for="npass">New Password:</label>
                                       <input type="Password" class="form-control" name="password_new" id="npass" value="">
                                    </div>
                                    <div class="form-group">
                                       <label for="vpass">Verify Password:</label>
                                       <input type="Password" class="form-control" name="repassword_new" id="vpass" value="">
                                    </div>
                                    <button type="submit" class="btn btn-primary mr-2">Submit</button>
                                    <button type="reset" class="btn iq-bg-danger">Cancel</button>
                                 </form>
                              </div>
                           </div>
                        </div>
                        <div class="tab-pane fade" id="manage-contact" role="tabpanel">
                           <div class="iq-card">
                              <div class="iq-card-header d-flex justify-content-between">
                                 <div class="iq-header-title">
                                    <h4 class="card-title">Manage Contact</h4>
                                 </div>
                              </div>
                              <div class="iq-card-body">
                                 <form>
                                    <div class="form-group">
                                       <label for="cno">Facebook:</label>
                                       <input type="text" class="form-control" id="fb" value="https://facebook.com">
                                    </div>
                                    <div class="form-group">
                                       <label for="email">Twitter:</label>
                                       <input type="text" class="form-control" id="ins" value="https://twitter.com">
                                    </div>
                                    <div class="form-group">
                                       <label for="url">Youtube:</label>
                                       <input type="text" class="form-control" id="ytb" value="https://youtube.com">
                                    </div>
                                    <button type="submit" class="btn btn-primary mr-2">Submit</button>
                                    <button type="reset" class="btn iq-bg-danger">Cancel</button>
                                 </form>
                              </div>
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
   }
    }
      ?>
      
      


<?php
    include('./layout/footer.php')
?>

<script>
         var a = document.querySelector('.userinfo');
         var b = document.querySelector('.user_edit');
         a.classList.add('active')
         a.classList.add('active-menu');
         b.classList.add('active')
      </script>