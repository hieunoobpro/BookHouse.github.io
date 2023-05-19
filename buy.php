<?php
session_start();
require_once('./db/connect.php');

$date = date('Y-m-d');
$sql ="SELECT `user_id`,cart.prd_id, `prd_name`,prd_img,prd_price, sum(`cart_quantity`) as quantity,author_name FROM `cart` , product,author
WHERE user_id = '".$_SESSION['user_id']."' and cart.prd_id = product.prd_id and product.author_id = author.author_id 
group by cart.prd_id";

$ketquatruyvan = mysqli_query($conn,$sql);

if($ketquatruyvan->num_rows>0){
    $total =0;
    while($order = $ketquatruyvan->fetch_assoc()){
        $price = $order['prd_price'] * $order['quantity'];
        $total = $total + $price;
    }
}

$sql1 = "INSERT INTO `order`(`order_date`, `user_id`, `total_money`, `status_id`) VALUES ('".$date."','".$_SESSION['user_id']."','".$total."',2)";
if($conn->query($sql1)){
    $sql2 ="SELECT max(`order_id`) as a FROM `order` WHERE 1";
    $ketquatruyvan = mysqli_query($conn,$sql2);
    if($ketquatruyvan->num_rows>0){
        $i = $ketquatruyvan->fetch_assoc();
        $sql1 ="SELECT `user_id`,cart.prd_id, `prd_name`,prd_img,prd_price, sum(`cart_quantity`) as quantity,author_name FROM `cart` , product,author
    WHERE user_id = '".$_SESSION['user_id']."' and cart.prd_id = product.prd_id and product.author_id = author.author_id 
    group by cart.prd_id";
    
    $ketquatruyvan1 = mysqli_query($conn,$sql1);
    
    if($ketquatruyvan1->num_rows>0){
        while($order_de = $ketquatruyvan1->fetch_assoc()){
            $sql3 = "INSERT INTO `order_detail`(`order_id`, `prd_id`, `quantity`) VALUES ('".$i['a']."','".$order_de['prd_id']."','".$order_de['quantity']."')";
            if($conn->query($sql3)){
                $sql4 = "UPDATE `product` SET `prd_in_order`='".$order_de['quantity']."' WHERE `prd_id`='".$order_de['prd_id']."'";
                $conn->query($sql4);
            }
        }
        $sql5 = "DELETE FROM `cart` WHERE user_id = '".$_SESSION['user_id']."'";
                
        if($conn->query($sql5)){
            echo "
                <script>
                    window.alert('Purchase successfully');
                    window.location = './index.php';
                </script>

            ";
            
        }else{
            echo "error: ".$conn->error;
        }
    }
}
}else{
    echo "error: ".$conn->error;
}



?>