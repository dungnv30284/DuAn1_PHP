<?php


?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/css2?family=Cookie&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;800;900&amp;display=swap"
        rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="../../css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="../../css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="../../css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="../../css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="../../css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="../../css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="../../css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="../../css/style.css" type="text/css">
</head>

<body>
    <header class="header">
        <div class="container-fluid">
            <!-- <div class="row">
                <div class="col-xl-3 col-lg-2">
                    <div class="header__logo">
                        <a href="index.html"><img src="img/logo.png" alt=""></a>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-5">
                    <nav class="header__menu">
                        <ul>
                            <li class=""><a href="../../adm/index.php">Home</a></li>
                            <li><a href="../sp/index.php">Sản phẩm</a></li>
                            <li><a href="../danhmuc/index.php">Danh mục</a></li>
                            <li><a href="../donhang/index.php">Đơn hàng</a></li>

                        </ul>
                    </nav>
                </div>
                <div class="col-xl-5">
                    <div class="header__right">
                        <div class="header__right__auth">
                            <a href="login.php">Login
                            
                            </a>
                           <ul class="dropdown">
                                    <form action="login.php" method="post">
                                         <label for="adm_id">ID</label> <br>
                                               <input type="text" name="adm_id" id=""> <br>
                                               <label for="adm_id">Password</label> <br>
                                               <input type="text" name="pass" id=""> <br>
                                               <button type="submit" name="btn_login">Login</button>
                                    </form>
                                </ul>
                            < ?php require '../../login.php' ?>
                        </div>

                    </div>
                </div>
            </div> -->
            <div class="canvas__open">
                <i class="fa fa-bars"></i>
            </div>
        </div>
    </header>

    <div class="breadcrumb-option">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__links">
                        <a href="index.html"><i class="fa fa-home"></i>Management</a>
                        <span>Products</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section>
        <hr>
    </section>



    <section class="shop-cart spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="shop__cart__table">
                        <div class="cart__total__procced">
                            <a href="index.php?act=productadd" class="btn btn-success">Add New Products</a>
                            <a href="deleteall.php" class="btn btn-danger"
                                onclick="return confirm('Bạn có muốn xóa tất cả không?')">Delete All</a>
                        </div>
                        <table>
                            <thead>
                                <tr>
                                    <th>Product's ID</th>
                                    <th>Product's Name</th>
                                    <th>Product's Image</th>
                                    <th>Product's Price</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($a as $d): ?>
                                    <tr>
                                        <td>
                                            <?= $d['ma_sp'] ?>
                                        </td>
                                        <td>
                                            <?= $d['ten_sp'] ?>
                                        </td>
                                        <td><img src="../../upload/<?= $d['img'] ?>" alt="" width="100px" height="100px">
                                        </td>
                                        <td>
                                            <?= $d['gia_sp'] ?>
                                        </td>
                                        <td><a href="index.php?act=productedit&ma_sp=<?= $d['ma_sp'] ?>"
                                                class="text-success">Update</a> / <a
                                                href="index.php?prodel&ma_sp=<?= $d['ma_sp'] ?>"
                                                onclick="return confirm('Bạn có muốn xóa không?')"
                                                class="text-danger">Delete</a></td>
                                    </tr>


                                <?php endforeach ?>
                            </tbody>
                        </table>



                    </div>

                </div>
            </div>
        </div>
        <ul class="pagination justify-content-center">
            <?php
            ?>
            <ul class="pagination justify-content-center">
                <li class="page-item"><a class="page-link"
                        href="index.php?act=productlist&page=<?= ($page - 1) > 0 ? $page - 1 : 1 ?> ">Previous</a></li>
                <li class="page-item"><a class="page-link" href="index.php?act=productlist&page=<?= $page ?>"><?= $page ?></a></li>
                <li class="page-item"><a class="page-link" href="index.php?act=productlist&page=<?= $page + 1 ?>"><?= ($page + 1) > $page_count ? '<>' : ($page + 1) ?></a></li>
                <li class="page-item"><a class="page-link"
                        href="index.php?act=productlist&page=<?= ($page + 1) > $page_count ? $page_count : ($page + 1) ?> ">Next</a>
                </li>
            </ul>
        </ul>

        </div>
    </section>
    <footer class="footer">
        <div class="container">

            <div class="row">
                <div class="col-lg-12">
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    <div class="footer__copyright__text">
                        <p>Copyright &copy;
                            <script>document.write(new Date().getFullYear());</script> All rights reserved | This
                            shop is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a
                                href="https://colorlib.com/" target="_blank">DJ</a>
                        </p>
                    </div>
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                </div>
            </div>
        </div>
    </footer>
</body>

</html>