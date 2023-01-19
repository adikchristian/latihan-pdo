<?php
session_start();
include"../../config/config.php";
include"../../config/Database.php";
if(isset($_SESSION['userId'])){
    $link = $baseUrl.''.$prefix.'dashboard';
    header("location:$link");
}
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login Aplikasi CRUD With PDO</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="d-flex justify-content-center">
                <div class="col-md-4 col-sm-12">
                    <div class="card mt-5">
                        <div class="card-header">
                            Login Aplikasi
                        </div>
                        <div class="card-body">
                            <form action="../../controller/auth/login.php" method="post">
                                <div class="mb-2">
                                    <label for="exampleInputEmail1" class="form-label">Username</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp" required name="username" placeholder="Username">
                                </div>
                                <div class="mb-2">
                                    <label for="exampleInputPassword1" class="form-label">Password</label>
                                    <input type="password" class="form-control" id="exampleInputPassword1" name="password" placeholder="Password">
                                </div>
                                <button type="submit" class="btn btn-primary" name="ok">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
</body>

</html>