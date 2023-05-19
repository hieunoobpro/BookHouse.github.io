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
                              <h4 class="card-title">Add Books</h4>
                           </div>
                        </div>
                        <div class="iq-card-body">
                           <form action="./admin_handle/admin_add_book.php" method="POST">
                              <div class="form-group">
                                 <label>Book Name:</label>
                                 <input type="text" name="name" class="form-control">
                              </div>
                              <div class="form-group">
                                 <label>Book Category:</label>
                                 <select class="form-control" name="category" id="exampleFormControlSelect1">
                                    <option selected="" disabled="">Book Category</option>
                                    <?php
                                    $sql ="SELECT `ctg_id`, `ctg_name`, `ctg_description` FROM `category` WHERE 1";
                                    $ketqua = mysqli_query($conn,$sql);
                                    if($ketqua->num_rows>0){
                                       while($ctg =$ketqua->fetch_assoc()){
                                          echo "<option value=".$ctg['ctg_id'].">".$ctg['ctg_name']."</option>";
                                       }
                                    }
                                    ?>
                                 </select>
                              </div>
                              <div class="form-group">
                                 <label>Book Author:</label>
                                 <select class="form-control" name="author" id="exampleFormControlSelect2">
                                    <option selected="" disabled="">Book Author</option>
                                    <?php
                                    $sql ="SELECT * FROM `author` WHERE 1";
                                    $ketqua1 = mysqli_query($conn,$sql);
                                    if($ketqua1->num_rows>0){
                                       while($author =$ketqua1->fetch_assoc()){
                                          echo "<option value=".$author['author_id'].">".$author['author_name']."</option>";
                                       }
                                    }
                                    ?>
                                 </select>
                              </div>
                              <div class="form-group">
                                 <label>Book Publisher:</label>
                                 <select class="form-control" name="publisher" id="exampleFormControlSelect2">
                                    <option selected="" disabled="">Book Publisher</option>
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
                              <div class="form-group">
                                 <label>Book Image:</label>
                                 <div class="custom-file">
                                    <input type="file" name="img" accept="image/png, image/jpeg">
                                 </div>
                              </div>
                              <div class="form-group">
                                 <label>Book Price:</label>
                                 <input type="text" name="price" class="form-control">
                              </div>
                              <div class="form-group">
                                 <label>Book in Stock:</label>
                                 <input type="text" name="stock" class="form-control">
                              </div>
                              <div class="form-group">
                                 <label>Book Description:</label>
                                 <textarea class="form-control" name="descrip" rows="4"></textarea>
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