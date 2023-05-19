<?php
    include('./layout/admin_header.php');
    $id = $_GET['id'];
    $sql = "SELECT `publisher_id`, `publisher_name` FROM `publisher` WHERE publisher_id = '".$id."'";
    $ketQuaTruyVan = mysqli_query($conn,$sql);
    if($ketQuaTruyVan->num_rows>0){
      $publisher = $ketQuaTruyVan->fetch_assoc();
    }
?>
         <!-- Page Content  -->
         <div id="content-page" class="content-page">
            <div class="container-fluid">
               <div class="row">
                  <div class="col-sm-12">
                     <div class="iq-card">
                        <div class="iq-card-header d-flex justify-content-between">
                           <div class="iq-header-title">
                              <h4 class="card-title">Edit Publisher</h4>
                           </div>
                        </div>
                        <div class="iq-card-body">
                           <form action="./admin_handle/admin_fix_publisher.php" method="POST">
                           <input type="hidden" name="id" class="form-control" value="<?=$publisher['publisher_id']?>">
                              <div class="form-group">
                                 <label>Publisher Name:</label>
                                 <input type="text" name="name" class="form-control" value="<?=$publisher['publisher_name']?>">
                              </div>
                              <button type="submit" class="btn btn-primary">Submit</button>
                              <button type="reset" class="btn btn-danger">Reset</button>
                           </form>
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
