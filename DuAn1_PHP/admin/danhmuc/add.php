<?php ?>
<div class="right_col" role="main">
    <div style="width: 600px; margin-bottom: 500px;margin-left: 50px;">
        <div class="row formtitle" style="margin-bottom: 30px;">
            <h1>THÊM MỚI LOẠI DANH MỤC</h1>
        </div>
        <!-- style="padding-left: 120px;" -->
        <div class=" formcontent">
            <form action="index.php?act=addm" method="post">
                <div class="mb-3">
                    <label  for="">cate_id</label><br>
                    <input class="form-control" type="text" name='id'>
                </div>
                <div class="mb-3">
                    <label for="">cate_name</label><br>
                    <input class="form-control" type="text" name='tendm'>
                </div>
                <div class="row mb10" style="margin-left: 5px;">
                    <div>
                        <span>
                        <!-- <button type="submit" name="themmoi" class="btn btn-primary">thêm mới</button> -->
                            <input  type="submit" name="themmoi" class="btn btn-primary" value="THÊM MỚI">
                        </span>
                        <span>
                            <a  href="index.php?act=listdm"><input class="btn btn-primary" type="button" value="DANH SÁCH"></a>
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