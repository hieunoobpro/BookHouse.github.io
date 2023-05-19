<?php
session_start();
require_once('./db/connect.php');
$user_id = $_POST['user_id1'];
$password_old = $_POST['password_old'];
$password_new = $_POST['password_new'];
$repassword_new = $_POST['repassword_new'];


$sql ="SELECT `user_password` FROM `user` WHERE user_id = '".$user_id."'";
$ketqua = mysqli_query($conn,$sql);
if($ketqua->num_rows>0){
        $pass = $ketqua->fetch_assoc();
        if($password_old == $pass['user_password']){
            if($password_new != $repassword_new){
                echo "
                <script>
                alert('Repassword incorrect!');
                history.back();
                </script>";
            }else{
                $sql1 ="UPDATE `user` set `user_password`='".$password_new."' WHERE user_id = '".$user_id."'";
                if($conn->query($sql1)){
                    echo "
                    <script>
                    alert('Change password access');
                    window.location = './profile.php';
                    </script>";
                }
            }
        }else{
            echo "
                <script>
                alert('Password incorrect!');
                history.back();
                </script>";
        }


    }

?>