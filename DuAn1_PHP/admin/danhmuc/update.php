<?php

 ?>
<div class="right_col" role="main">

 <div style="width: 600px; margin-bottom: 500px;margin-left: 50px;">
    <div class="row formtitle">
        <h1 style="margin-bottom: 30px;">Cập nhập LOẠI HÀNG HÓA</h1>
    </div>
    <div class=" formcontent">
            <form action="index.php?act=updatedm" method="post">
                <div class="mb-3">
                    <label for="">Mã loại</label><br>
                    <input class="form-control" type="text" name="cate_id" value="<?php echo $dm['cate_id']  ?>" disabled><br>
                </div>
                <div class="mb-3">
                     <label for="">Tên loại</label><br>
                     <input class="form-control" type="text" name="cate_name" value="<?php echo $dm['cate_name']  ?>"><br>
                </div>
                <div class="mb-3">
                    <input type="hidden" name="cate_id" value="<?php echo $dm['cate_id'] ?>">
                    <input type="submit" name="capnhat" class="btn btn-primary"  value="cập nhật loại hàng">
                    <!-- <input type="reset" value="nhập lại"> -->
                    <a href="index.php?act=listdm"><input class="btn btn-primary" type="button" value="DANH SÁCH"></a>
                </div>
                
            </form>
    </div>
</div>
<?php
    require "view/foodter.php";
    die; ?>

</div>



