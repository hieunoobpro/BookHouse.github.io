<?php
session_start();
require_once('./db/connect.php');
if(isset($_SESSION['login_user']) && $_SESSION['login_user'] == 1){

$prd_id = $_GET['prd_id'];
$sql ="SELECT `user_id`, `prd_id`, `cart_quantity` FROM `cart` WHERE user_id = '".$prd_id."'";
$ketqua= mysqli_query($conn,$sql);
if($ketqua->num_rows>0){
                echo "
                    <script>
                    alert('You had this book');
                    window.location = './checkout.php';
                    </script>";
}else{
    $sql1 ="INSERT INTO `cart`(`user_id`, `prd_id`, `cart_quantity`) VALUES ('".$_SESSION['user_id']."','".$prd_id."',1)";

    if($conn->query($sql1)){
        header('Location: ./checkout.php' );
    }else{
        echo "error: ".$conn->error;
    }

}
}
else {
    echo" 
    <script>
        
        window.location = './sign_in.php';
    </script>";
    
}
?>