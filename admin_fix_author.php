<?php
require_once('../db/connect.php');
$author_id =$_POST['id'];
$author_name =$_POST['name'];
$author_descrip =$_POST['description'];
$author_email =$_POST['email'];
$img_new =$_POST['img_new'];
$img_old =$_POST['img_old'];
if($img_new ==''){
    $img = $img_old;
}else{
    $img = $img_new;
}

$sql ="UPDATE `author` SET `author_name`='".$author_name."',
`author_description`='".$author_descrip."',`author_img`='".$img."',`author_email`='".$author_email."'
WHERE `author_id`='".$author_id."'";
if($conn->query($sql)){
    header('Location: ../admin_author.php' );
}else{
    echo "error: ".$conn->error;
}