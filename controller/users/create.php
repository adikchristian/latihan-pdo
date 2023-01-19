<?php
include"../../config/config.php";
include"../../config/Database.php";

if(isset($_POST['ok'])){

    $sqlFind = "SELECT * FROM users WHERE username= ?";
    $resFind = $connect->prepare($sqlFind);
    $resFind->execute(array($_POST['username']));
    $count = $resFind->rowCount();

    if($count > 0){
        $link = $baseUrl.''.$prefix.'user/create.php';
        echo "<script>alert('Username Sudah Ada');window.location='$link'</script>";
    }

    $data = [
        $_POST['username'],
        $_POST['name'],
        md5($_POST['password']),
    ];

    $sql = "INSERT INTO users (username,name,password) VALUES (?,?,?)";
    $res = $connect->prepare($sql);
    $res->execute($data);

    $link = $baseUrl.''.$prefix.'user';

    echo "<script>alert('Success Save Data');window.location='$link'</script>";
}