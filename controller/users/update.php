<?php
include"../../config/config.php";
include"../../config/Database.php";

if(isset($_POST['ok'])){

    if($_POST['username']!=$_POST['usernameOld']){
        $sqlFind = "SELECT * FROM users WHERE username= ?";
        $resFind = $connect->prepare($sqlFind);
        $resFind->execute(array($_POST['username']));
        $count = $resFind->rowCount();

        if($count > 0){
            $link = $baseUrl.''.$prefix.'user/update.php?id='.$_POST['id'];
            echo "<script>alert('Username Sudah Ada');window.location='$link'</script>";
        }else{
            if($_POST['password']==""){
                $data = [
                    $_POST['username'],
                    $_POST['name'],
                    $_POST['id']
                ];
                $stateSql = "UPDATE users SET username=?, name=? WHERE id =?";
            }else{
                $data = [
                    $_POST['username'],
                    $_POST['name'],
                    md5($_POST['password']),
                    $_POST['id']
                ];
                $stateSql = "UPDATE users SET username=?, name=?, password=? WHERE id=?";
            }   
           
        
            $sql = $stateSql;
            $res = $connect->prepare($sql);
            $res->execute($data);
        
            $link = $baseUrl.''.$prefix.'user';
        
            echo "<script>alert('Success Save Data');window.location='$link'</script>";
        }
    }else{
        if($_POST['password']==""){
            $data = [
                $_POST['username'],
                $_POST['name'],
                $_POST['id']
            ];
            $stateSql = "UPDATE users SET username=?, name=? WHERE id =?";
        }else{
            $data = [
                $_POST['username'],
                $_POST['name'],
                md5($_POST['password']),
                $_POST['id']
            ];
            $stateSql = "UPDATE users SET username=?, name=?, password=? WHERE id=?";
        }   
       
    
        $sql = $stateSql;
        $res = $connect->prepare($sql);
        $res->execute($data);
    
        $link = $baseUrl.''.$prefix.'user';
    
        echo "<script>alert('Success Save Data');window.location='$link'</script>";
    }
}