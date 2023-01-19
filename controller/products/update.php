<?php
//Import Library yg diperlukan
include"../../config/config.php";
include"../../config/Database.php";

//Kondisi ketika Tombol Simpan ditekan
if(isset($_POST['ok'])){

    //Cek Apakah code masih sama dengan di database
    if($_POST['code']!=$_POST['codeOld']){
        //Jika tidak maka lakukan pengecekan code lagi
        $sqlFind = "SELECT * FROM products WHERE code= ?";
        $resFind = $connect->prepare($sqlFind);
        $resFind->execute(array($_POST['code']));
        $count = $resFind->rowCount();

        //jika data ditemukan maka arahkan ke halaman edit lagi
        if($count > 0){
            $link = $baseUrl.''.$prefix.'product/update.php?id='.$_POST['id'];
            echo "<script>alert('Code Sudah Ada');window.location='$link'</script>";
        }else{
            $data = [
                $_POST['categori_id'],
                $_POST['code'],
                $_POST['name'],
                $_POST['price'],
                $_POST['description'],
                $_POST['id'],
            ];
    
            //Definisikan Query
            $sql = "UPDATE products SET categori_id=?, code=?, name=?, price=?, description=? WHERE id=?";
            //Lakukan compile ke PDO (Seperti mysql_query)
            $res = $connect->prepare($sql);
            //Running semua (Pastikan Menggunakan ? di sql yg kita buat untuk menghidari SQL INJECTION, Pastikan urutan di variable $data sama dengan di variable $sql)
            $res->execute($data);
    
            //Definisikan Link jika data berhasil disimpan ke database
            $link = $baseUrl.''.$prefix.'product';
            
            //Tampilkan Pesan Sukses, Lakukan perpindahan halaman menggunakan javascript
            echo "<script>alert('Success Save Data');window.location='$link'</script>";
        }
    }else{
        //Masukan data yg ada di form ke variable data menggunakan array
        $data = [
            $_POST['categori_id'],
            $_POST['code'],
            $_POST['name'],
            $_POST['price'],
            $_POST['description'],
            $_POST['id'],
        ];

        //Definisikan Query
        $sql = "UPDATE products SET categori_id=?, code=?, name=?, price=?, description=? WHERE id=?";
        //Lakukan compile ke PDO (Seperti mysql_query)
        $res = $connect->prepare($sql);
        //Running semua (Pastikan Menggunakan ? di sql yg kita buat untuk menghidari SQL INJECTION, Pastikan urutan di variable $data sama dengan di variable $sql)
        $res->execute($data);

        //Definisikan Link jika data berhasil disimpan ke database
        $link = $baseUrl.''.$prefix.'product';
        
        //Tampilkan Pesan Sukses, Lakukan perpindahan halaman menggunakan javascript
        echo "<script>alert('Success Save Data');window.location='$link'</script>";
    }
}