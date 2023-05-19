<?php
require_once('../db/connect.php');
$author_name =$_POST['name'];
$author_descrip =$_POST['description'];
$author_img =$_POST['img'];
$author_email =$_POST['email'];
$sql ="INSERT INTO `author`(`author_name`, `author_description`, `author_img`, `author_email`) 
VALUES ('".$author_name."','".$author_descrip."','".$author_img."','".$author_email."')";
if($conn->query($sql)){
    header('Location: ../admin_author.php' );
}else{
    echo "error: ".$conn->error;
}
?>