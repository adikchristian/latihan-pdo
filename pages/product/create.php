<?php include"../layouts/header.php"; ?>
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
                    <form action="../../controller/products/create.php" method="post">
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
                                    ?>
                                    <option value="<?php echo $rows['id']; ?>"><?php echo $rows['name']; ?></option>
                                    <?php
                                        }
                                    ?>
                                </select>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputEmail3" class="col-sm-2 col-form-label">Code</label>
                            <div class="col-sm-10">
                                <input type="text" required class="form-control" name="code" placeholder="Kode Produk">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputPassword3" class="col-sm-2 col-form-label">Name</label>
                            <div class="col-sm-10">
                                <input type="text" required class="form-control" name="name" placeholder="Nama Produk">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputPassword3" class="col-sm-2 col-form-label">Price</label>
                            <div class="col-sm-10">
                                <input type="text" required class="form-control" name="price"
                                    placeholder="Harga Produk">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputPassword3" class="col-sm-2 col-form-label">Keterangan</label>
                            <div class="col-sm-10">
                                <textarea class="form-control" rows="4px" name="description"
                                    placeholder="Keterangan Produk"></textarea>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-sm-10 offset-sm-2">
                                <button type="submit" class="btn btn-primary" name="ok">Simpan</button>
                                <button type="button" class="btn btn-danger"
                                    onclick="window.location.href='<?php echo $baseUrl.''.$prefix ?>product';">Batal</button>
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