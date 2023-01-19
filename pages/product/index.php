<?php include"../layouts/header.php"; ?>
<!--Content-->
<div class="container mt-4">
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex justify-content-between">
                        Produk
                        <a href="<?php echo $baseUrl.''.$prefix ?>product/create.php" class="btn btn-sm btn-success">Tambah Data</a>
                    </div>
                </div>
                <div class="card-body">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Kategori</th>
                                <th scope="col">Kode</th>
                                <th scope="col">Nama</th>
                                <th scope="col">Harga</th>
                                <th scope="col">Tindakan</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $sql = "SELECT products.*, categories.name AS category_name FROM products LEFT OUTER JOIN categories ON(products.categori_id=categories.id) ORDER BY products.id DESC";
                                $res = $connect->prepare($sql);
                                $res->execute();
                                foreach($res->fetchAll() as $index => $rows){
                            ?>
                            <tr>
                                <th scope="row"><?php echo $index+1; ?></th>
                                <td><?php echo $rows['category_name']; ?></td>
                                <td><?php echo $rows['code']; ?></td>
                                <td><?php echo $rows['name']; ?></td>
                                <td><?php echo "Rp. ".number_format($rows['price']); ?></td>
                                <td>
                                    <a href="<?php echo $baseUrl.''.$prefix ?>product/update.php?id=<?php echo $rows['id']; ?>" class="btn btn-sm btn-warning">Edit</a>
                                    <a onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')" href="<?php echo $baseUrl.'controller/products/'; ?>delete.php?id=<?php echo $rows['id']; ?>" class="btn btn-sm btn-danger">Hapus</a>
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