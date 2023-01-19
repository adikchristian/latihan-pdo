<ul class="navbar-nav me-auto mb-2 mb-lg-0">
    <li class="nav-item">
        <a class="nav-link active" aria-current="page" href="<?php echo $baseUrl.''.$prefix; ?>dashboard">Home</a>
    </li>
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Master Data
        </a>
        <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="<?php echo $baseUrl.''.$prefix; ?>category">Kategori</a></li>
            <li><a class="dropdown-item" href="<?php echo $baseUrl.''.$prefix; ?>product">Produk</a></li>
            <li>
                <hr class="dropdown-divider">
            </li>
            <li><a class="dropdown-item" href="<?php echo $baseUrl.''.$prefix; ?>user">User</a></li>
        </ul>
    </li>
</ul>