<?php
session_start();
require_once("./db/connect.php");

if(!isset($_SESSION['login_user'])){
    echo "
        <script>
        window.alert('You are not logined!');
        window.location = './sign_in.php';
        </script>
    ";
}else{
    $product_id = $_GET['prd_id'];
    $sql = "DELETE FROM `wishlist` WHERE prd_id ='".$product_id."' and user_id = '".$_SESSION['user_id']."'";
    if($conn->query($sql))
    {
        header('Location: '.$_SERVER['HTTP_REFERER']);
    }
    else
    {
        echo "error: ".$conn->error;
    }
}
?>