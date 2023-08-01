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
                        <span>Cart</span>
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
                        <?php
                        if (isset($_SESSION['giohang']) && count($_SESSION['giohang']) > 0) {
                            ?>
                            <table class="text-center">
                                <thead>
                                    <tr>

                                        <th>STT&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
                                        <th colspan="2">Products</th>
                                        <th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Price&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
                                        <th>Amounts</th>
                                        <th>Total</th>
                                        <th>Act</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $i = 0;
                                    $total = 0;
                                    $sl = 0;
                                    //echo count($_SESSION['giohang']).',';
                                    // echo $_SESSION['giohang'][0][1].',';
                                    // echo $_SESSION['giohang'][1][1]; 
                                    //echo var_dump([$_SESSION['giohang'][1][1]]).'<br>';
                                    // for ($i = 0; $i < count($_SESSION['giohang']); $i++){
                                    //     //echo $_SESSION['giohang'][$i][1].',';
                                    //     $a =$_SESSION['giohang'][$i][1];
                                        
                                    //      echo $a;

                                        //  $c =$_SESSION['giohang'][$i][0];
                                        // $d = $c.','.$c;
                                        //  echo $d;
                                    //    // echo var_dump([$_SESSION['giohang'][$i][1]]).'<br><br><br><hr>';
                                    //     $value1 = [$_SESSION['giohang'][$i][1]];
                                    //     $value2 = [$_SESSION['giohang'][$i][0]];
                                    //    // echo var_dump($value);
                                    //    echo var_dump($value1);
                                    //    echo var_dump($value2);
                                       //echo $i;
                                      // $i++;
                                      //echo var_dump($value[0]).'<br>';
                                     
                                    //} 
                                   
                                    foreach ($_SESSION['giohang'] as $item):
                                       //echo $item[1];
                                      $a = $item[1];
                                   // print_r($a);
                                      // echo $a;
                                       
                                        $tt = (int) $item[2] * (int) $item[3];
                                        $total += $tt;
                                       
                                        
                                        ?>
                                        <tr>
                                            <td>
                                                <?= ($i + 1) ?>
                                            </td>
                                            <td>
                                                <img src="upload/<?= $item[1]?>" alt="" width="100px" height="100px">                                
                                            
                                            </td>
                                            <td class="text-success font-weight-bold">
                                                <?= $item[0]  ?>
                                               
                                            </td>
                                            <td>
                                            <?php echo number_format($item[2],0,',') ?>
                                                <!-- < ?= $item[2] ?> -->
                                            </td>
                                            <td>
                                                <form class="form-inline" action="index.php?act=updatecart" method="post">
                                                    <input type="hidden" name="ten_sp" value="<?= $item[0] ?>">
                                                    <input type="number" class="form-control" id=""
                                                        name="sl" value="<?= $item[3] ?>">
                                                    
                                                    <input type="submit" value="Update" name="uptocart" class="btn btn-secondary">
                                                </form>
                                                <!-- <div class="input-group">
                                                    <span class="input-group-text btn btn-danger"
                                                        onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
                                                        - </span>
                                                    <input type="number" value="< ?= $item[2] ?>"
                                                        class="form-control text-center" min="1" max="100" name="sl">
                                                    <span class="input-group-text btn btn-success"
                                                        onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
                                                        + </span>
                                                </div> -->
                                                <!-- <input type="number" name="" id="" value="< ?= $item[2] ?>"> -->
                                            </td>
                                            <td class="cart__price text-danger">
                                                <!-- < ?= $tt ?> -->
                                                <?php echo number_format($tt,0,',') ?>
                                            </td>
                                            <td><a href="index.php?act=delcart&i=<?= $i ?>"  class=" text-purple-900"><i class="fa fa-trash"></i></a></td>
                                        </tr>
                                        <?php
                                        $sl += $item[3];
                                        $i++;
                                    endforeach ?>
                                    <tr>
                                        <td colspan="5" class=" text-center font-weight-bold">Total in Amounts:</td>
                                        <td colspan="2" class="text-danger font-weight-bold">
                                            <?= $sl ?>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td colspan="5" class=" text-center font-weight-bold">Total in Total:</td>
                                        <td colspan="2" class="text-danger  font-weight-bold">
                                            <!-- < ?= $total ?> -->
                                            <?php echo number_format($total,0,',') ?>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        <?php } else {
                            $total = 0;
                            echo '<p class="font-weight-bold">The cart is empty! Go on shopping, please!</p>';
                        }

                        ?>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="cart__btn">
                        <a href="index.php?act=home" class="btn btn-info bg-info text-white">Continue Buying</a>
                    </div>
                </div>
                <!-- <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="cart__btn">
                        <a href="index.php?act=delcart" class=" btn btn-warning bg-warning">Xóa toàn bộ</a>
                    </div>
                </div> -->
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="discount__content">
                        <h6>Discount codes</h6>
                        <form action="#">
                            <input type="text" placeholder="Enter your coupon code">
                            <button type="submit" class="site-btn">Apply</button>
                        </form>
                    </div>
                </div>
                <div class="col-lg-4 ">
                    <div class="cart__total__procced">
                        <h6>Cart total</h6>
                        <ul>
                            <li>Total: <span>
                                    <!-- < ?= $total ?> -->
                                    <?php echo number_format($total,0,',') ?>
                                </span></li>
                        </ul>
                        <a href="index.php?act=checkout" class="primary-btn">Checkout</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>