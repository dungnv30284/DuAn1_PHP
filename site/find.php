<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<section class="product spad">
        <div class="container">

        <div class="row property__gallery">
              
        <?php  foreach ($keylist as $k)
         : ?>
                    <div class="col-lg-3 col-md-4 col-sm-6 mix men">
                        <div class="product__item">
                            <form action="index.php?act=addcart" method="post">
                                <div class="product__item__pic set-bg" data-setbg="upload/<?= $k['img'] ?>">
                                    <ul class="product__hover">
                                        <li><a href="/upload/<?= $k['img'] ?>.'" class="image-popup"><span
                                                    class="arrow_expand"></span></a></li>
                                        <li><a href="#"><span class="icon_heart_alt"></span></a></li>
                                       
                                    </ul>
                                </div>
                                <div class="product__item__text">

                                    <h6><a href="index.php?act=spdetail&ma_sp=<?= $k['ma_sp'] ?>">
                                            <?= $k['ten_sp'] ?>
                                        </a></h6>
                                    <input type="hidden" name="ten_sp" value="<?= $k['ten_sp'] ?>">
                                    <div class="rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <div class="product__price">
                                        <?= $k['gia_sp'] ?>
                                        <input type="hidden" name="gia_sp" value="<?= $k['gia_sp'] ?>">
                                        <input type="hidden" name="img" value="<?= $k['img'] ?>">
                                    </div>
                                    <div class="product__price bg-warning text-white">

                                        <input type="submit" value="Add to cart" name="addtocart" class="rounded">
                                        <span class="icon_bag_alt text-white">


                                    </div>

                                </div>
                            </form>
                        </div>

                    </div>
                <?php endforeach ?>
            </div>
        </div>
</section>
      
</body>
</html>