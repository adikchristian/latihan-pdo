<?php
//Import Library yg diperlukan
include"../../config/config.php";
include"../../config/Database.php";

$id = $_GET['id'];
$sql = "UPDATE categories SET visible='0' WHERE id = ?";
$res = $connect->prepare($sql);
$res->execute(array($id));

$link = $baseUrl.''.$prefix.'category';

echo "<script>alert('Success Delete Data');window.location='$link'</script>";