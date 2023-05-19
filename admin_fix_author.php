<?php
    include('./layout/admin_header.php');
    $id = $_GET['id'];
    $sql ="SELECT  `author_id`, `author_name`, `author_description`, `author_img`, `author_email` FROM `author` WHERE  `author_id` ='".$id."'";
    $ketQuaTruyVan = mysqli_query($conn,$sql);
    if($ketQuaTruyVan->num_rows>0){
      $author = $ketQuaTruyVan->fetch_assoc();
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
                              <h4 class="card-title">Edit Author</h4>
                           </div>
                        </div>
                        <div class="iq-card-body">
                        <form action="./admin_handle/admin_fix_author.php" method="POST">
                            <input type="hidden" name="id" value="<?=$author['author_id']?>" class="form-control">
                              <div class="form-group">
                                 <label>Author Name:</label>
                                 <input type="text" name="name" value="<?=$author['author_name']?>" class="form-control">
                              </div>
                              <div class="form-group">
                                 <label>Author Profile:</label>
                                 <div class="custom-file">
                                    <input type="file" value="<?=$author['author_img']?>" name="img_new" id="file_anh">
                                    <input type="hidden" value="<?=$author['author_img']?>" name="img_old" id="file_anh">
                                    <br>
                                    <img src="./images/author/<?=$author['author_img']?>" alt="" id="img_show" style="width:50px">
                                 </div>
                              </div>
                              <div class="form-group">
                                 <label>Author Email:</label>
                                 <input type="email" name="email" value="<?=$author['author_email']?>" class="form-control">
                              </div>
                              <div class="form-group">
                                 <label>Author Description:</label>
                                 <textarea class="form-control" name="description" rows="4"><?=$author['author_description']?></textarea>
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