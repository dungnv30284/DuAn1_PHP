<?php
// require_once '../global.php';
// require_once '../dao_pdo/pdo.php';
// require_once '../dao_pdo/sp_pdo.php';
// require_once '../dao_pdo/bill_pdo.php';
// require_once '../dao_pdo/cate_pdo.php';

// if ($_SERVER['REQUEST_METHOD'] == 'POST') {
//     $ma_hd = $_POST['ma_hd'];
//     $stt_id = $_POST['stt_id'];
//     stt_update($stt_id, $ma_hd);
//     echo "
//             <script>
//             alert('Update trạng thái thành công!');
//             window.location.href='http://localhost/demo/adm/donhang/index.php';
//             </script>
//             ";
// }
// $ma_hd = $_GET['ma_hd'];
// $result = status_select1($ma_hd);

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
    
    <!-- Header Section End -->

    <div class="breadcrumb-option">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__links">
                        <a href="index.html"><i class="fa fa-home"></i>Bills</a>
                        <span>Bill Edit</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Product Section Begin -->
    <section class="product spad">
        <div class="container">

            <div class="row property__gallery">

                <form action="index.php?act=updatestt" method="post" enctype="multipart/form-data" class="checkout__form">
                    <div class="checkout__form__input">
                    
                        <input type="hidden" name="ma_hd" value="<?= $result['ma_hd'] ?>">
                    </div>
                    <div class="checkout__form__input">
                        <label for="">New Bills' Status</label> <br>
                        <input type="hidden" name="stt_id" value="<?= $result['stt_id'] ?>"> <br>
                        <input type="number" name="stt_id">
                    </div>

                    <button type="submit" class="site-btn">Update</button>
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