<?php
// require_once '../global.php';
// require_once '../dao_pdo/pdo.php';
// require_once '../dao_pdo/cate_pdo.php';
// require_once '../dao_pdo/bill_pdo.php';

// if ($_SERVER['REQUEST_METHOD'] == 'POST') {
//     $cate_id = $_POST['cate_id'];
//     $cate_name = $_POST['cate_name'];
//     cate_insert($cate_id, $cate_name);
//     echo "
//             <script>
//             alert('Thêm thành công!');
//             window.location.href='http://localhost/demo/adm/danhmuc/index.php';
//             </script>
//             ";
// }

?>

<!DOCTYPE html>
<html lang="zxx">


<!-- Mirrored from themewagon.github.io/ashion/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 01 Jul 2023 02:46:37 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Ashion Template">
    <meta name="keywords" content="Ashion, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ashion | Template</title>

    <!-- Google Font -->
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


    <!-- Header Section Begin -->
    <header class="header">
        <!-- <div class="container-fluid">
            <div class="row">
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

                            < ?php require '../../login.php' ?>

                        </div>

                    </div>
                </div>
            </div>
        </div> -->
    </header>
    <!-- Header Section End -->
    <div class="breadcrumb-option">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__links">
                        <a href="index.html"><i class="fa fa-home"></i>Categories</a>
                        <span>Add New Categories</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Product Section Begin -->
    <section class="product spad">
        <div class="container">

            <div class="row property__gallery">

                <form action="add.php" method="post" enctype="multipart/form-data" class="checkout__form">
                    <div class="checkout__form__input">
                        <label for="">Categories's ID</label> <br>
                        <input type="text" name="cate_id"> <br>
                    </div>
                    <div class="checkout__form__input">
                    <label for="">Categories's Name</label> <br>
                    <input type="text" name="cate_name" id=""> <br> <br>
                    </div>

                    
                    <button type="submit" class="site-btn">Add</button>
                </form>



            </div>
        </div>
    </section>



    <!-- Footer Section Begin -->
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
    <!-- Footer Section End -->

    <!-- Search Begin -->
    <div class="search-model">
        <div class="h-100 d-flex align-items-center justify-content-center">
            <div class="search-close-switch">+</div>
            <form class="search-model-form">
                <input type="text" id="search-input" placeholder="Search here.....">
            </form>
        </div>
    </div>
    <!-- Search End -->

    <!-- Js Plugins -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/mixitup.min.js"></script>
    <script src="js/jquery.countdown.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.nicescroll.min.js"></script>
    <script src="js/main.js"></script>
</body>


<!-- Mirrored from themewagon.github.io/ashion/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 01 Jul 2023 02:47:02 GMT -->

</html>