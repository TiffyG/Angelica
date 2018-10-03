<?php
include 'connection.php';
if(isset($_POST['register'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $pw = sha1($password);
    $sql = sprintf("INSERT INTO `login` (`username`,`password`) VALUES('%s','%s')",$username,$pw);
    if($sql== TRUE){
        echo "User created!";

    }else{
        if($sql== FALSE){
            header("Location: login.php");
            echo "User not created";
        }

    }

    $result = $conn->query($sql);
}