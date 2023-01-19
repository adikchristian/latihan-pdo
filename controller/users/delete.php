<?php
//Import Library yg diperlukan
include"../../config/config.php";
include"../../config/Database.php";

$id = $_GET['id'];
$sql = "DELETE FROM products WHERE id = ?";
$res = $connect->prepare($sql);
$res->execute(array($id));

$link = $baseUrl.''.$prefix.'product';

echo "<script>alert('Success Delete Data');window.location='$link'</script>";