<div class="card">
    <div class="card-header">
        <div class="d-flex justify-content-between">
            Kategori
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
                    $visible = '1';
                    $sql = "SELECT * FROM categories WHERE visible = ?";
                    $res = $connect->prepare($sql);
                    $res->execute(array($visible));
                    foreach($res->fetchAll() as $index => $rows){
                ?>
                <tr>
                    <th scope="row"><?php echo $index+1; ?></th>
                    <td><?php echo $rows['name']; ?></td>
                    <td>
                        <a href="<?php echo $baseUrl.''.$prefix ?>category/update.php?id=<?php echo $rows['id']; ?>"
                            class="btn btn-sm btn-warning">Edit</a>
                        <a onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')"
                            href="<?php echo $baseUrl.'controller/category/'; ?>delete.php?id=<?php echo $rows['id']; ?>"
                            class="btn btn-sm btn-danger">Hapus</a>
                    </td>
                </tr>
                <?php
                    }
                ?>
            </tbody>
        </table>
    </div>
</div>