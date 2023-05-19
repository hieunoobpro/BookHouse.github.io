<?php
    include('./layout/admin_header.php');
    $id = $_GET['id'];
    $sql = "SELECT `ctg_id`, `ctg_name`, `ctg_description` FROM `category` WHERE ctg_id = '".$id."'";
    $ketQuaTruyVan = mysqli_query($conn,$sql);
    if($ketQuaTruyVan->num_rows>0){
      $category = $ketQuaTruyVan->fetch_assoc();
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
                              <h4 class="card-title">Edit Categories</h4>
                           </div>
                        </div>
                        <div class="iq-card-body">s
                           <form action="./admin_handle/admin_fix_category.php" method="POST">
                           <input type="hidden" name="id" class="form-control" value="<?=$category['ctg_id']?>">
                              <div class="form-group">
                                 <label>Category Name:</label>
                                 <input type="text" name="name" class="form-control" value="<?=$category['ctg_name']?>">
                              </div>
                              <div class="form-group">
                                 <label>Category Description:</label>
                                 <textarea class="form-control" name="description" rows="4"><?=$category['ctg_description']?></textarea>
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
