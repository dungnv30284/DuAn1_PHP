<?php ?>
<div class="right_col" role="main">
    <div style="width: 600px; margin-bottom: 300px;margin-left: 50px;">
        <div class="row formtitle" style="margin-bottom: 30px;">
            <h1>THÊM MỚI Sản phẩm</h1>
        </div>
        <!-- style="padding-left: 120px;" -->
        <div class=" formcontent">
            <form action="index.php?act=addsp" enctype="multipart/form-data" method="POST">
                <div class="mb-3">
                    <label for="">ma_sp</label><br>
                    <input class="form-control" type="text" name='ma_sp' disabled>

                </div>
                <div class="mb-3">
                    <label for="">ten_sp</label><br>
                    <input class="form-control" type="text" name='ten_sp'>
                    <?php if (isset($thongbaoTensp)) {
                    ?>
                        <h2 class="text-danger">
                            <?php echo $thongbaoTensp ?>
                        </h2>
                    <?php
                    }
                    ?>
                </div>
                <div class="mb-3">
                    <label for="">img</label><br>
                    <input type="file" name="img"><br>
                </div>
                <div class="mb-3">
                    <label for="">gia_sp</label><br>
                    <input class="form-control" type="number" min='0' name="gia_sp"><br>
                    <?php if (isset($thongbaogia_sp)) {
                    ?>
                        <h2>
                            <?php echo $thongbaogia_sp ?>
                        </h2>
                    <?php
                    }
                    ?>
                </div>
                <div class="mb-3">
                    <label for="">cate_id</label><br>
                    <select name="cate_id" id="">
                        <?php $categories = loadall_danhmuc();
                        print_r($categories);
                        foreach ($categories as $cate) : ?>
                            <option value="<?= $cate['cate_id'] ?>">
                                <?= $cate['cate_name'] ?>
                            </option>
                        <?php endforeach ?><br>
                    </select>
                </div>

                <div class="row mb10" style="margin-left: 5px;">
                    <div>
                        <span>
                            <!-- <button type="submit" name="themmoi" class="btn btn-primary">thêm mới</button> -->
                            <input class="btn btn-primary" type="submit" name="themsp" value="THÊM MỚI">
                        </span>
                        <span>
                            <a href="index.php?act=listsp"><input class="btn btn-primary" type="button" value="DANH SÁCH"></a>
                        </span>
                    </div>
                </div>
                <?php if (isset($thongbao)) {
                    echo $thongbao;
                }
                ?>
            </form>
        </div>

    </div>
    <?php
    require "view/foodter.php";
    die; ?>

</div>