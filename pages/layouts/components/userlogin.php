<div class="dropdown-center">
    <button class="btn btn-success dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
        <?php
            $sqlUser = "SELECT * FROM users WHERE id = ?";
            $resUser = $connect->prepare($sqlUser);
            $resUser->execute(array($_SESSION['userId']));
            $rowUser = $resUser->fetch();
            echo $rowUser['name'];  
        ?>
    </button>
    <ul class="dropdown-menu">
        <li><a class="dropdown-item" href="<?php echo $baseUrl.''.$prefix.'auth/logout.php'; ?>">Logout</a></li>
    </ul>
</div>