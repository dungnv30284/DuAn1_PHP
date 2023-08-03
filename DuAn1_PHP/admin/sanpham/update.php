<?php ?>
<div class="right_col" role="main">
    <div style="width: 600px; margin-bottom: 300px;margin-left: 50px;">
        <div class="row formtitle" style="margin-bottom: 30px;">
            <h1>update Sản phẩm</h1>
        </div>
        <!-- style="padding-left: 120px;" -->
        <div class=" formcontent">
            <form action="index.php?act=updatesp" enctype="multipart/form-data" method="POST">
                <div class="mb-3">
                    <label for="">ma_sp</label><br>
                    <input class="form-control" type="text" name='ma_sp' disabled value="<?php echo $sp['ma_sp'] ?>">
                    <input type="hidden" name="ma_sp" value="<?php echo $sp['ma_sp'] ?>">

                </div>
                <div class="mb-3">
                    <label for="">ten_sp</label><br>
                    <input class="form-control" type="text" name='ten_sp' value="<?php echo $sp['ten_sp'] ?>">
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
                    <input class="form-control" type="text" min='0' name="gia_sp" value="<?php echo $sp['gia_sp'] ?>"><br>
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
                    <?php  $categories = loadall_danhmuc();?>
                    <select id="" name="cate_id">
                        <?php foreach ($categories as $item){ ?>
                        <option <?php if ($item['cate_id'] == $sp['cate_id']) echo "selected"; ?> value="<?php echo $item['cate_id']; ?>">
                            <?php echo $item['cate_name']; ?>
                        </option>
                        <?php } ?>
                    </select>


                    <!-- <br> -->
                    
                </div>

                <div class="row mb10" style="margin-left: 5px;">
                    <div>
                        <span>
                            <!-- <button type="submit" name="themmoi" class="btn btn-primary">thêm mới</button> -->
                            <input class="btn btn-primary" type="submit" name="capnhatsp" value="Cập nhật">
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