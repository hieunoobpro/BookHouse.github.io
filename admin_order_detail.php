<?php
    include('./layout/admin_header.php');
    $order_id = $_GET['order_id'];
    $sql = "SELECT `order_id`, `order_date`, `user_id`, `total_money`, `status_id` FROM `order` WHERE order_id = '".$order_id."'";
    $ketQuaTruyVan = mysqli_query($conn,$sql);
    if($ketQuaTruyVan->num_rows>0){
        $order = $ketQuaTruyVan->fetch_assoc();
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
                              <h4 class="card-title">Order Details Lists</h4>
                           </div>
                           <div class="iq-card-header-toolbar d-flex align-items-center">
                            <form action="./admin_handle/admin_fix_status.php">
                                <input type="hidden" name="order" value="<?=$order_id?>">
                                <select name="status" id="" class="btn btn-primary">
                                <?php
                                    $sql = "SELECT * FROM `status` WHERE 1";
                                    $ketqua = mysqli_query($conn,$sql);
                                    if($ketqua->num_rows>0){
                                        while($status = $ketqua->fetch_assoc()){
                                            if($status['status_id']== $order['status_id']){
                                                ?>
                                                <option selected='selected' value="<?=$status['status_id']?>"><?=$status['status_name']?></option>
                                                <?php
                                            }else{
                                                ?>
                                                <option value="<?=$status['status_id']?>"><?=$status['status_name']?></option>
                                                <?php
                                            }
                                        }
                                    }
                                ?>

                                    </select>
                                    <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
                           </div>
                        </div>
                        <div class="iq-card-body">
                           <div class="table-responsive">
                              <table class="data-tables table table-striped table-bordered" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Product Name</th>
                                        <th>Quantity</th>
                                        <th>Price</th>
                                    </tr>
                                </thead>
                                <tbody>
                                  <?php
                                    $sql ="SELECT `order_id`, `prd_name`, `quantity`, prd_price FROM `order_detail`, product 
                                    WHERE order_id = '".$order['order_id']."' and order_detail.prd_id = product.prd_id";
                                       $ketQuaTruyVan = mysqli_query($conn,$sql);
                                       if($ketQuaTruyVan->num_rows>0){
                                          while($order_detail = $ketQuaTruyVan->fetch_assoc()){
                                             ?>
                                          <tr>
                                             <td><?=$order_detail['order_id']?></td>
                                             <td><?=$order_detail['prd_name']?></td>
                                             <td><?=$order_detail['quantity']?></td>
                                             <td><?=$order_detail['prd_price']?> VNĐ</td>
                                          </tr>
                                             <?php
                                          }
                                       }
                                       ?>
                                        <tr>
                                             <td></td>
                                             <td></td>
                                             <td> <a href="#"> Tổng tiền</a></td>
                                             <td><?=$order['total_money']?> VNĐ</td>
                                          </tr>
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
      </script>