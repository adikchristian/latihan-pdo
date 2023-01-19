<?php include"../layouts/header.php"; ?>
<!--Content-->
<div class="container mt-4">
    <div class="row">
        <div class="col-md-4 col-sm-12">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex justify-content-between">
                        Form Kategori
                    </div>
                </div>
                <div class="card-body">
                    <form action="../../controller/category/create.php" method="post">
                        <div class="row mb-3">
                            <label for="inputPassword3" class="col-sm-2 col-form-label">Name</label>
                            <div class="col-sm-10">
                                <input type="text" required class="form-control" name="name" placeholder="Nama Kategori">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-sm-10 offset-sm-2">
                                <button type="submit" class="btn btn-primary" name="ok">Simpan</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-8 col-sm-12">
            <?php include"list.php"; ?>
        </div>
    </div>
</div>
<!--end Content-->
<?php include"../layouts/footer.php"; ?>