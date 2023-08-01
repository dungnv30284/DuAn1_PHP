<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/css2?family=Cookie&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;800;900&amp;display=swap"
        rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
</head>

<body>
    <div class="breadcrumb-option">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__links">
                        <a href="index.html"><i class="fa fa-home"></i> Home</a>
                        <span>Check out</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section>
        <hr>
    </section>
    <section class="checkout spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h6 class="coupon__link"><span class="icon_tag_alt"></span> <a href="#">Have a coupon?</a> Click
                        here to enter your code.</h6>
                </div>
            </div>
            <form action="index.php?act=checkout" method="post" class="checkout__form">
                <div class="row">
                    <div class="col-lg-8">
                        <h5>Billing detail</h5>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="checkout__form__input">
                                    <p>First Name <span>*</span></p>
                                    <span class="text-danger">
                                        <?= isset($err_sdt) ? $err_sdt : '' ?>
                                    </span>
                                    <input type="text" name="hoten">
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <div class="checkout__form__input">
                                    <p>Address <span>*</span></p>
                                    <span class="text-danger">
                                        <?= isset($err_sdt) ? $err_sdt : '' ?>
                                    </span>
                                    <input type="text" name="diachi">
                                </div>

                            </div>
                            <div class="col-lg-12">
                                <div class="checkout__form__input">
                                    <p>Phone <span>*</span></p>
                                    <span class="text-danger">
                                        <?= isset($err_sdt) ? $err_sdt : '' ?>
                                    </span>
                                    <input type="text" name="sdt">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="">
                                    <p>Payment <span>*</span></p>

                                    <select name="payment" id="" class="w-full border border-gray-200 h-[50px]">
                                        <option value="0">Choose payment</option>
                                        <option value="1">Paying when receiving! (COD)</option>
                                        <option value="2">Paying through Bank's account!</option>
                                        <option value="3">Paying through App(MOMO, ZaloPay...)!</option>
                                    </select>
                                </div>
                                <span class="text-danger">
                                    <?= isset($err_sdt) ? $err_sdt : '' ?>
                                </span>
                            </div>

                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="checkout__order">
                            <h5>Your order</h5>
                            <div class="checkout__order__total">
                                <ul>
                                    <li>Amounts <span>
                                            <?php
                                            $tongsl = 0;
                                            foreach ($_SESSION['giohang'] as $item) {
                                                $tongsl += $item[3];
                                            }
                                            echo $tongsl;
                                            ?>
                                            <input type="hidden" name="tongsl" value="<?= $tongsl ?>">
                                    <li>In Total <span>
                                            <?php
                                            $total = 0;
                                            foreach ($_SESSION['giohang'] as $item) {
                                                $tt = $item[2] * $item[3];
                                                $total += $tt;
                                            }
                                            echo number_format($total, 0, ',')
                                                ?>
                                            <input type="hidden" name="tong_tien" value="<?= $total ?>">
                                        </span></li>
                                        <?php
                                            $total = 0;
                                            $i=0;
                                            for ($i=0; $i < count($_SESSION['giohang']); $i++ ) {
                                                $a =$_SESSION['giohang'][$i][1];
                                        $b = $a.','.$a;
                                         //echo $b;

                                         $c =$_SESSION['giohang'][$i][0];
                                        $d = $c.','.$c;
                                         //echo $d;
                                            ?>
                                    <input type="hidden" name="tensp" value="<?= $b ?>">
                                    <input type="hidden" name="hasp" value="<?= $d ?>">
                                     <?php }   ?>
                                </ul>
                            </div>


                            <input type="submit" class="site-btn" name="buy" value="Đặt mua">
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>
</body>

</html>