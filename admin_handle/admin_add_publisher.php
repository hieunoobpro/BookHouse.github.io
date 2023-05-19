<?php
require_once('../db/connect.php');
$publisher_name =$_POST['name'];

$sql ="INSERT INTO `publisher`(`publisher_name`) VALUES ('".$publisher_name."')";
if($conn->query($sql)){
    header('Location: ../admin_publisher.php' );
}else{
    echo "error: ".$conn->error;
}
?>