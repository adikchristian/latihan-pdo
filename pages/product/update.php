<?php include"../layouts/header.php"; ?>
<?php
    $id = $_GET['id'];
    $sql = "SELECT * FROM products WHERE id = ?";
    $res = $connect->prepare($sql);
    $res->execute(array($id));
    $row = $res->fetch();
?>
<!--Content-->
<div class="container mt-4">
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex justify-content-between">
                        Form Produk
                    </div>
                </div>
                <div class="card-body">
                    <form action="../../controller/products/update.php" method="post">
                    <div class="row mb-3">
                            <label for="inputEmail3" class="col-sm-2 col-form-label">Kategori</label>
                            <div class="col-sm-10">
                                <select name="categori_id" class="form-select">
                                    <option value="">Pilih Kategori</option>
                                    <?php
                                        $visible = '1';
                                        $sql = "SELECT * FROM categories WHERE visible=?";
                                        $res = $connect->prepare($sql);
                                        $res->execute(array($visible));
                                        foreach($res->fetchAll() as $rows){
                                            if($row['categori_id']==$rows['id']){
                                                $selected = "selected";
                                            }else{
                                                $selected = "";
                                            }
                                    ?>
                                    <option value="<?php echo $rows['id']; ?>" <?php echo $selected; ?>><?php echo $rows['name']; ?></option>
                                    <?php
                                        }
                                    ?>
                                </select>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputEmail3" class="col-sm-2 col-form-label">Code</label>
                            <div class="col-sm-10">
                                <input type="text" required class="form-control" name="code" placeholder="Kode Produk" value="<?php echo $row['code']; ?>">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputPassword3" class="col-sm-2 col-form-label">Name</label>
                            <div class="col-sm-10">
                                <input type="text" required class="form-control" name="name" placeholder="Nama Produk" value="<?php echo $row['name']; ?>">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputPassword3" class="col-sm-2 col-form-label">Price</label>
                            <div class="col-sm-10">
                                <input type="text" required class="form-control" name="price"
                                    placeholder="Harga Produk" value="<?php echo $row['price']; ?>">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputPassword3" class="col-sm-2 col-form-label">Keterangan</label>
                            <div class="col-sm-10">
                                <textarea class="form-control" rows="4px" name="description"
                                    placeholder="Keterangan Produk"><?php echo $row['description']; ?></textarea>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-sm-10 offset-sm-2">
                                <button type="submit" class="btn btn-primary" name="ok">Simpan</button>
                                <button type="button" class="btn btn-danger" onclick="window.location.href='<?php echo $baseUrl.''.$prefix ?>product';">Batal</button>
                                <input type="hidden" name="codeOld" value="<?php echo $row['code']; ?>" />
                                <input type="hidden" name="id" value="<?php echo $row['id']; ?>" />
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!--end Content-->
<?php include"../layouts/footer.php"; ?>