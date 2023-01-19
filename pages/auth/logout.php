<?php
session_start();
session_destroy();
include"../../config/config.php";
$link = $baseUrl.''.$prefix.'auth/login.php';
header("location:$link");