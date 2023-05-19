<?php
    include('./layout/admin_header.php');
    $id = $_GET['id'];
    $sql ="SELECT `prd_id`, `prd_name`, `prd_in_stock`, `prd_in_order`, `prd_price`, `prd_img`, `prd_release`, `publisher_id`, `author_id`, `ctg_id`, `discount_id`, `prd_description` FROM `product` WHERE prd_id = '".$id."'";
    $ketqua = mysqli_query($conn,$sql);
    if($ketqua->num_rows>0){
        $book = $ketqua->fetch_assoc();
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
                              <h4 class="card-title">Edit Books</h4>
                           </div>
                        </div>
                        <div class="iq-card-body">
                           <form action="./admin_handle/admin_fix_book.php" method="POST">
                           <input type="hidden" name="id" class="form-control" value="<?=$book['prd_id']?>">
                              <div class="form-group">
                                 <label>Book Name:</label>
                                 <input type="text" name="name" class="form-control" value="<?=$book['prd_name']?>">
                              </div>
                              <div class="form-group">
                                 <label>Book Category:</label>
                                 <select class="form-control" name="category"  value="" id="exampleFormControlSelect1">
                                    <?php
                                    $sql ="SELECT `ctg_id`, `ctg_name`, `ctg_description` FROM `category` WHERE 1";
                                    $ketqua = mysqli_query($conn,$sql);
                                    if($ketqua->num_rows>0){
                                       while($ctg =$ketqua->fetch_assoc()){
                                        if($ctg['id']==$book['ctg_id']){
                                          echo "<option selected= 'selected' value=".$ctg['ctg_id'].">".$ctg['ctg_name']."</option>";

                                        }else{

                                            echo "<option value=".$ctg['ctg_id'].">".$ctg['ctg_name']."</option>";
                                        }
                                       }
                                    }
                                    ?>
                                 </select>
                              </div>
                              <div class="form-group">
                                 <label>Book Author:</label>
                                 <select class="form-control" name="author" id="exampleFormControlSelect2">
                                    <option selected="s" disabled="">Book Author</option>
                                    <?php
                                    $sql ="SELECT * FROM `author` WHERE 1";
                                    $ketqua1 = mysqli_query($conn,$sql);
                                    if($ketqua1->num_rows>0){
                                       while($author =$ketqua1->fetch_assoc()){
                                        if($author['author_id']==$book['author_id']){
                                            echo "<option selected= 'selected' value=".$author['author_id'].">".$author['author_name']."</option>";
  
                                          }else{
                                            echo "<option value=".$author['author_id'].">".$author['author_name']."</option>";
                                          }
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
                                        if($publisher['publisher_id']==$book['publisher_id']){
                                            echo "<option selected= 'selected'  value=".$publisher['publisher_id'].">".$publisher['publisher_name']."</option>";
                                          }else{
                                            echo "<option value=".$publisher['publisher_id'].">".$publisher['publisher_name']."</option>";
                                          }
                                         
                                       }
                                    }
                                    ?>
                                 </select>
                              </div>
                              <div class="form-group">
                                 <label>Book Image:</label>
                                 <div class="custom-file">
                                     <input type="file" value="<?=$book['prd_img']?>" name="img_new" id="file_anh">
                                    <input type="hidden" value="<?=$book['prd_img']?>" name="img_old" id="file_anh">
                                    <img src="./images/book/<?=$book['prd_img']?>" alt="" id="img_show" style="width:50px">
                                 </div>
                              </div>
                              <div class="form-group">
                                 <label>Book Price:</label>
                                 <input type="text" name="price"  value="<?=$book['prd_price']?>"  class="form-control">
                              </div>
                              <div class="form-group">
                                 <label>Book in Stock:</label>
                                 <input type="text" name="stock"  value="<?=$book['prd_in_stock']?>"  class="form-control">
                              </div>
                              <div class="form-group">
                                 <label>Book Description:</label>
                                 <textarea class="form-control"  name="descrip" rows="4"><?=$book['prd_description']?></textarea>
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
   <script>
        const fileUpload = document.querySelector('#file_anh');
        const img_show = document.querySelector('#img_show')
        const reader = new FileReader();
                
        // Lắng nghe trạng thái đăng tải tệp
        fileUpload.addEventListener("change", (event) => {
            // Lấy thông tin tập tin được đăng tải
            file = event.target.files;
            
            // Đọc thông tin tập tin đã được đăng tải
            reader.readAsDataURL(file[0])
            // Lắng nghe quá trình đọc tập tin hoàn thành
            reader.addEventListener("load", (event) => {
                // Lấy chuỗi Binary thông tin hình ảnh
                const img = event.target.result;
                // cho link vào thẻ img
                img_show.src =img;
            })
        })

        

    </script>