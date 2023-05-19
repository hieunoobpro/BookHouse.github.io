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
                              <h4 class="card-title">Add Author</h4>
                           </div>
                        </div>
                        <div class="iq-card-body">
                           <form action="./admin_handle/admin_add_author.php" method="POST">
                              <div class="form-group">
                                 <label>Author Name:</label>
                                 <input type="text" name="name" class="form-control">
                              </div>
                              <div class="form-group">
                                 <label>Author Profile:</label>
                                 <div class="custom-file">
                                    <input type="file" name="img" id="file_anh">
                                    <br>
                                    <img src="" alt="" id="img_show" style="width:50px">
                                 </div>
                              </div>
                              <div class="form-group">
                                 <label>Author Email:</label>
                                 <input type="email" name="email" class="form-control">
                              </div>
                              <div class="form-group">
                                 <label>Author Description:</label>
                                 <textarea class="form-control" name="description" rows="4"></textarea>
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