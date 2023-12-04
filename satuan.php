<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard | POS Auliya Computer</title>
    <link rel="icon" href="img/Logo.png">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <!--Link Icon Bootstrap-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">

    <!--Link css-->
    <link rel="stylesheet" href="css/index.css">

    <!--Font google-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@400;500;700&display=swap" rel="stylesheet">

</head>

<body style="height: 3000px;">
    <!--Awal sidebar-->
    <div class="container-global">
        <div class="row g-0">
            <div class="col-lg-2" >
                <nav class="navbar navbar-expand-lg bg-body-tertiary rounded border">
                    <div class="container-fluid ">
                        <div class="offcanvas offcanvas-end mb-0" tabindex="-1" id="offcanvasNavbar"
                            aria-labelledby="offcanvasNavbarLabel" style="width: 250px;">
                            <div class="offcanvas-header">
                                <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Offcanvas</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="offcanvas"
                                    aria-label="Close"></button>
                            </div>
                            <div class="offcanvas-body mx-2 ">
                                <ul class="navbar-nav nav-pills  flex-column justify-content-end flex-grow-1 "
                                    id="myNavPills">
                                    <div>
                                        <a href="#"><img src="img/Logo.png" width="150px"
                                                style="display:block; margin:auto;"></a>

                                    </div>
                                    <li class="nav-item">
                                        <a class="nav-link active link-light" aria-current="page" href="index.php"><i
                                                class="bi bi-house-door"></i> Dashboard</a>
                                    </li>
                                    <!--Dropdown untuk transaksi-->
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle link-dark" href="#" role="button"
                                            data-bs-toggle="dropdown" aria-expanded="false">
                                            Transaksi
                                        </a>
                                        <ul class="dropdown-menu ">
                                            <li><a class="dropdown-item nav-link link-dark" href="order.php"><i
                                                        class="bi bi-cart-plus"></i> Order</a></li>
                                        </ul>
                                    </li>
                                    <!--Akhir Dropdown untuk transaksi-->

                                    <!--Dropdown untuk Master Data-->
                                    <li class="nav-item dropdown ">
                                        <a class="nav-link dropdown-toggle" href="#" role="button"
                                            data-bs-toggle="dropdown" aria-expanded="false">
                                            Master Data
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item nav-link link-dark" href="kategori.php"><i
                                                        class="bi bi-tags"></i> Kategori</a></li>
                                            <li><a class="dropdown-item nav-link link-dark" href="satuan.php"><i
                                                        class="bi bi-boxes"></i> Satuan</a></li>
                                            <li><a class="dropdown-item nav-link link-dark" href="produk.php"><i
                                                        class="bi bi-card-checklist"></i>Produk</a></li>
                                        </ul>
                                    </li>
                                    <!--Akhir Dropdown untuk Master Data-->

                                    <!--Dropdown untuk Data User-->
                                    <li class="nav-item dropdown ">
                                        <a class="nav-link dropdown-toggle" href="#" role="button"
                                            data-bs-toggle="dropdown" aria-expanded="false">
                                            Data User
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item nav-link link-dark" href="datauser.php"><i
                                                        class="bi bi-people"></i> Data User</a></li>
                                            <li><a class="dropdown-item nav-link link-dark" href="datateknisi.php"><i
                                                        class="bi bi-person-gear"></i> Data Teknisi</a></li>
                                            <li><a class="dropdown-item nav-link link-dark" href="laporan.php"><i
                                                        class="bi bi-clipboard-data"></i> Laporan</a></li>
                                        </ul>
                                    </li>
                                    <!--Akhir Dropdown untuk Data User-->
                                    <hr>
                                    <ul class="navbar-nav" style="margin-bottom: 170%; ">
                                        <li class="nav-item dropdown ">
                                            <a class="nav-link dropdown-toggle text-center " href="#" role="button"
                                                data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="bi bi-person-circle" style="font-size: 50px; "></i><span
                                                    class="text-center"><br>Username</span>
                                            </a>
                                            <ul class="dropdown-menu mt-2">
                                                <li><a class="dropdown-item nav-link link-dark" href="#"><i
                                                            class="bi bi-person"></i> Profile</a></li>
                                                <li><a class="dropdown-item nav-link link-dark" href="#"><i
                                                            class="bi bi-gear"></i>  Setting</a></li>
                                                <li><a class="dropdown-item nav-link link-dark" href=""><i
                                                            class="bi bi-box-arrow-right"></i>  Log Out</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </ul>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
            <!--Akhir sidebar-->

            <!--Bagian Konten-->
            <div class="col-lg-10">
                <nav class="navbar navbar-expand-lg navbar-dark bg-danger sticky-top">
                    <div class="container-lg">
                        <a class="navbar-brand" href="#">Satuan</a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas"
                            data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar"
                            aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                    </div>
                </nav>

                <div class="container">
                    <div class="card mt-3">
                        <div class="card-body">
                            <h5 class="card-title">Ini adalah Satuan</h5>
                            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate ex veniam, possimus animi illum aspernatur iste provident necessitatibus, non repellendus quod fugit numquam in odio velit totam. Voluptates, excepturi optio.
                            </p>
                            <a href="#" class="btn btn-danger">Go somewhere</a>
                        </div>
                    </div>
                </div>
            </div>
            <!--Akhir Bagian Konten-->
        </div>

        <div class="fixed-bottom text-center mb-3">
            Copyright 2023 Auliya Computer
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
        </script>
</body>

</html>