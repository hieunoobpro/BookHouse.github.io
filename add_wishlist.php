<?php
session_start();
require_once("./db/connect.php");

if(!isset($_SESSION['login_user'])){
    echo "
        <script>
        window.location = './sign_in.php';
        </script>
    ";
}else{
$product_id = $_GET['prd_id'];
    $sql = "INSERT INTO `wishlist`(`prd_id`, `user_id`) VALUES ('".$product_id."','".$_SESSION['user_id']."')";
    if($conn->query($sql))
    {
        header('Location: '.$_SERVER['HTTP_REFERER']);
    }
    else
    {
        echo "error: ".$conn->error;
    }}

?>