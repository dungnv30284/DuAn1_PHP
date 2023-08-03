<div class="right_col" role="main">
    <div style="width: 900px;padding-bottom: 300px;margin-left:30px ;">
        <div class=" formcontent">
        <!-- <div style="margin: 70px;width: 200px;"> -->
        <nav aria-label="Page navigation example" style="margin-top: 70px;">
  <ul class="pagination justify-content-end">
    <li class="page-item disabled">
      <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
    </li>
    <li class="page-item"><a class="page-link" href="#">1</a></li>
    <li class="page-item"><a class="page-link" href="#">2</a></li>
    <li class="page-item"><a class="page-link" href="#">3</a></li>
    <li class="page-item">
      <a class="page-link" href="#">Next</a>
    </li>
  </ul>
</nav>
        <!-- </div> -->
            <!-- <div class=" mb10 formds"> -->
            <table class="table table-hover">
                <tr>
                    <th> </th>
                    <th>MÃ SP</th>
                    <th>TÊN SP</th>
                    <th>IMG</th>
                    <th>GIÁ SP</th>
                    <th>mã id</th>
                    <th></th>
                </tr>
                <form action="index.php?act=dellsp" method="post">

                    <?php foreach (loadall_inner_sanpham() as $cate) : ?>
                        <!-- <input type="text" name="keyword">
              <select name="iddm" id="">
                  <option value="0">Tất cả</option> -->

                        <tr>
                            <td><input type="checkbox" class="name" name='name[]' value="<?php echo $cate['ma_sp'] ?>"> </td>
                            <td><?php echo $cate['ma_sp'] ?></td>
                            <td><?php echo $cate['ten_sp'] ?></td>
                            <td> <img src="../upload/<?php echo $cate['img'] ?>" alt="" width="100px"></td>
                            <td><?php echo $cate['gia_sp'] ?></td>
                            <td><?php echo $cate['cate_id'] ?></td>
                            <td>
                                <button type="button" class="btn btn btn btn-outline-warning"><a href="../admin/index.php?act=suasp&ma_sp=<?php echo $cate['ma_sp'] ?>">sửa</a></button>
                                <button type="button" class="btn btn-outline-danger"><a href="../admin/index.php?act=xoasp&ma_sp=<?php echo $cate['ma_sp'] ?>">xóa</a></button>

                            </td>
                        </tr>
                    <?php endforeach ?>
            </table>

            <div style="margin: 0 100px;">
                <button type="button" class="btn btn-outline-secondary" ><a href="index.php?act=addsp">nhập thêm </a></button>
                <button type="button" class="btn btn-outline-success" id="select-all">chọn tất cả</button>
                <button type="button" class="btn btn-outline-success" id="deselect-all">bỏ chọn tất cả</button>
                <button type="submit" class="btn btn-outline-danger" name="delAll" id="delAll">xóa tất cả</button>
            </div>

            </form>

        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const selectAllBtn = document.getElementById('select-all');
            const deselectAllBtn = document.getElementById('deselect-all');
            selectAllBtn.addEventListener('click', function() {
                //   console.log('hihi');
                selectAllCheckboxes(true);
            });

            deselectAllBtn.addEventListener('click', function() {
                selectAllCheckboxes(false);
            });
        });

        function selectAllCheckboxes(checked) {
            const checkboxes = document.querySelectorAll('input.name');
            console.log(checkboxes);

            checkboxes.forEach(function(checkbox) {
                checkbox.checked = checked;
            });
        }
    </script>
    <?php
    require "view/foodter.php";
    die; ?>
</div>