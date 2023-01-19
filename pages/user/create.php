<?php include"../layouts/header.php"; ?>
<!--Content-->
<div class="container mt-4">
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex justify-content-between">
                        Form User
                    </div>
                </div>
                <div class="card-body">
                    <form action="../../controller/users/create.php" method="post">
                        <div class="row mb-3">
                            <label for="inputEmail3" class="col-sm-2 col-form-label">Username</label>
                            <div class="col-sm-10">
                                <input type="text" required class="form-control" name="username" max="20" placeholder="Username">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputPassword3" class="col-sm-2 col-form-label">Name</label>
                            <div class="col-sm-10">
                                <input type="text" required class="form-control" name="name" placeholder="Nama User">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
                            <div class="col-sm-10">
                                <input type="text" required class="form-control" name="password"
                                    placeholder="Password">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-sm-10 offset-sm-2">
                                <button type="submit" class="btn btn-primary" name="ok">Simpan</button>
                                <button type="button" class="btn btn-danger"
                                    onclick="window.location.href='<?php echo $baseUrl.''.$prefix ?>user';">Batal</button>
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