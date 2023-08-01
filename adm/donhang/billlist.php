<?php
// require_once '../global.php';
// require_once '../dao_pdo/bill_pdo.php';
// $stt = status_select();

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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

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
                            <li class=""><a href="../../adm/index.php" class="text-decoration-none">Home</a></li>
                            <li><a href="../sp/index.php" class="text-decoration-none">Sản phẩm</a></li>
                            <li><a href="../danhmuc/index.php" class="text-decoration-none">Danh mục</a></li>
                            <li><a href="../donhang/index.php" class="text-decoration-none">Đơn hàng</a></li>

                        </ul>
                    </nav>
                </div>
                <div class="col-xl-5">
                    <div class="header__right">
                        <div class="header__right__auth">

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
                        <span>Bills</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section>
        <hr>
    </section>
    <section class="shop-cart spad">
        <div class="container mx-auto">
            <div class="  row">

                <?php
               
                foreach ($s as $d) {




                    ?>


                    <div class="dropdown col-xl-3 my-5 text-center">
                        <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown">
                            <?= $d['ma_hd'] ?>
                        </button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item bg-info text-white font-weight-bold text-uppercase" href="#">
                                    Bill's Details:</a></li>
                            <li><a class="dropdown-item" href="#"> In total: <span class="text-danger">
                                        <?php echo number_format($d['tong_tien'],0,',')  ?> VND
                                    </span></a></li>
                            <li><a class="dropdown-item" href="#">The amount: <span class="text-success">
                                        <?= $d['tongsl'] ?>
                                    </span></a></li>
                            <li><a class="dropdown-item font-weight-bold" href="#">Name:
                                    <?= $d['hoten'] ?>
                                </a></li>
                            <li><a class="dropdown-item font-weight-bold" href="#">Address:
                                    <?= $d['diachi'] ?>
                                </a></li>
                            <li><a class="dropdown-item font-weight-bold" href="#">Phone's number:
                                    <?= $d['sdt'] ?>
                                </a></li>
                            <li><a class="dropdown-item " href="#">Payment:
                                    <?php if ($d['payment'] == 1) {
                                        echo "Paying when receiving!";
                                    } elseif ($d['payment'] == 2) {
                                        echo "Paying through Bank's account!";
                                    } elseif ($d['payment'] == 3) {
                                        echo "Paying through App(MOMO, ZaloPay...)!";
                                    }
                                    ?>
                                </a></li>
                            <li class="bg-warning"><a class="dropdown-item" href="#">Status:
                                    <?php
                                    $ma_hd = $d['ma_hd'];
                                    $t = status_select1($ma_hd);
                                    if ($t['stt_id'] == 1) {
                                        echo "On waiting!";
                                    } elseif ($t['stt_id'] == 2) {
                                        echo "On processing : We are preparing!";
                                    } elseif ($t['stt_id'] == 3) {
                                        echo "On processing: We have send to the shipping service!";
                                    } elseif ($t['stt_id'] == 4) {
                                        echo "Done: Successfully shipping!";
                                    }

                                    ?>

                                </a></li>


                        </ul><?php if(isset($t['stt_id'])){
                            ?>
                          <a class="btn btn-danger" href="index.php?act=updatestt&ma_hd=<?= $d['ma_hd'] ?>" class="text-success">Update Bills' Status</a>
<?php
                        }
                        else{ ?>
                        <a class="btn btn-warning" href="index.php?act=addstt&ma_hd=<?= $d['ma_hd'] ?>" class="text-success">Add New Status</a>
                            <?php }?>
                       
                    </div>
                <?php } ?>'










            </div>
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