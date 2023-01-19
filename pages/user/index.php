<?php include"../layouts/header.php"; ?>
<!--Content-->
<div class="container mt-4">
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex justify-content-between">
                        Produk
                        <a href="<?php echo $baseUrl.''.$prefix ?>user/create.php" class="btn btn-sm btn-success">Tambah Data</a>
                    </div>
                </div>
                <div class="card-body">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Nama</th>
                                <th scope="col">Tindakan</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $sql = "SELECT * FROM users ORDER BY id DESC";
                                $res = $connect->prepare($sql);
                                $res->execute();
                                foreach($res->fetchAll() as $index => $rows){
                            ?>
                            <tr>
                                <th scope="row"><?php echo $index+1; ?></th>
                                <td><?php echo $rows['name']; ?></td>
                                <td>
                                    <?php
                                        if($_SESSION['userId']==$rows['id']){
                                    ?>
                                    <a href="<?php echo $baseUrl.''.$prefix ?>user/update.php?id=<?php echo $rows['id']; ?>" class="btn btn-sm btn-warning">Edit</a>
                                    <?php
                                        }
                                    ?>
                                </td>
                            </tr>
                            <?php
                                }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<!--end Content-->
<?php include"../layouts/footer.php"; ?>