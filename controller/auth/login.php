<?php
session_start();
include"../../config/config.php";
include"../../config/Database.php";

if(isset($_POST['ok'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sqlFind = "SELECT * FROM users WHERE username=?";
    $resFind = $connect->prepare($sqlFind);
    $resFind->execute(array($username));
    $rowCount = $resFind->rowCount();

    // echo $rowFind['name'];

    if($rowCount > 0){
        $rowFind = $resFind->fetch();
        if($rowFind['password']==md5($password)){
            $_SESSION['userId'] = $rowFind['id'];
            $link = $baseUrl.''.$prefix.'dashboard';
            header("location:$link");
        }else{
            $link = $baseUrl.''.$prefix.'auth/login.php';
            echo "<script>alert('
            Login Failed Wrong Username or Password');window.location='$link'</script>";
        }   
    }else{
        $link = $baseUrl.''.$prefix.'auth/login.php';
        echo "<script>alert('Login Failed Wrong Username or Password');window.location='$link'</script>";
    }
}