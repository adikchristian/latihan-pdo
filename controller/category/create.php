<?php
include"../../config/config.php";
include"../../config/Database.php";

if(isset($_POST['ok'])){

    $data = [
        $_POST['name'],
    ];

    $sql = "INSERT INTO categories (name) VALUES(?)";
    $res = $connect->prepare($sql);
    $res->execute($data);

    $link = $baseUrl.''.$prefix.'category';

    echo "<script>alert('Success Save Data');window.location='$link'</script>";
}