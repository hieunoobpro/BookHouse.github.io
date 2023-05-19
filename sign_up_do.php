<?php
require_once('./db/connect.php');
    $email = $_POST['email'];
    $name = $_POST['name'];
    $password = md5($_POST['password']);

    $sql = "INSERT INTO `user`(`user_name`, `user_password`, `user_email`) 
    VALUES ('".$name."','".$password."','".$email."')";
    if($conn->query($sql)){
        echo "
        <script>
        window.alert('Sign up successfully!');
        window.location = './sign_in.php';
        </script>

        ";

    }else{
        echo "error: ".$conn->error;
    };

    function alert(){
        echo "
        <script>
        window.alert('Sign up successfully!');
        </script>
        ";
    }
?>


