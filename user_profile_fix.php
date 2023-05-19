<?php
require_once('./db/connect.php');
$user_id = $_POST['user_id'];
$name = $_POST['name'];
$img = $_POST['img'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$gender= $_POST['customRadio1'];
$birthday = $_POST['birthday'];
$address = $_POST['address'];

$sql ="UPDATE `user` SET`user_name`='".$name."',`user_phone`='".$phone."',`user_email`='".$email."',`user_address`='".$address."',
`user_sex`='".$gender."',`user_birthday`='".$birthday."',`user_img`='".$img."' WHERE user_id = '".$user_id."'";
if($conn->query($sql)){
    header('Location: ./profile.php' );
}else{
    echo "error: ".$conn->error;
}

?>