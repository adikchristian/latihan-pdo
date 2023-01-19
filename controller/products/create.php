<?php
include"../../config/config.php";
include"../../config/Database.php";

if(isset($_POST['ok'])){

    $sqlFind = "SELECT * FROM products WHERE code= ?";
    $resFind = $connect->prepare($sqlFind);
    $resFind->execute(array($_POST['code']));
    $count = $resFind->rowCount();

    if($count > 0){
        $link = $baseUrl.''.$prefix.'product/create.php';
        echo "<script>alert('Code Sudah Ada');window.location='$link'</script>";
    }

    $data = [
        $_POST['categori_id'],
        $_POST['code'],
        $_POST['name'],
        $_POST['price'],
        $_POST['description'],
    ];

    $sql = "INSERT INTO products (categori_id,code,name,price,description) VALUES (?,?,?,?,?)";
    $res = $connect->prepare($sql);
    $res->execute($data);

    $link = $baseUrl.''.$prefix.'product';

    echo "<script>alert('Success Save Data');window.location='$link'</script>";
}