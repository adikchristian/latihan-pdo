<?php
include"../../config/config.php";
include"../../config/Database.php";

if(isset($_POST['ok'])){

    $data = [
        $_POST['name'],
        $_POST['id']
    ];

    $sql = "UPDATE categories SET name=? WHERE id=?";
    $res = $connect->prepare($sql);
    $res->execute($data);

    $link = $baseUrl.''.$prefix.'category';

    echo "<script>alert('Success Save Data');window.location='$link'</script>";
}