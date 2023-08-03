<!-- page content -->
<div class="right_col" role="main">
                    <!-- top tiles -->
                    <!-- <div>home</div> -->

                    
                    
<div style="width: 900px;padding-bottom: 300px;margin-left: 30px;">
  <div class=" formcontent" >
  <nav aria-label="Page navigation example" style="margin-top: 70px;margin-right: 40px;">
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
    <div class=" mb10 formds" style="margin: 0 50px; ">
      <table class="table table-hover" >
        <tr>
          <th ></th>
          <th>MÃ id</th>
          <th>TÊN LOẠI</th>
          <th></th>
        </tr>
        <form action="index.php?act=delAllDm" method="post">
          <?php foreach (loadall_danhmuc() as $cate) : ?>
            <tr>
              <td><input type="checkbox" class="delItem" name="delItem[]" value="<?php echo $cate['cate_id'] ?>"></td>
              <td><?php echo $cate['cate_id'] ?></td>
              <td><?php echo $cate['cate_name'] ?></td>
              <td>
              <button type="button" class="btn btn btn btn-outline-warning"><a href="./index.php?act=suadm&cate_id=<?php echo $cate['cate_id'] ?>">sửa</a></button>
              <button type="button" class="btn btn-outline-danger"><a href="../admin/index.php?act=xoadm&cate_id=<?php echo $cate['cate_id'] ?>">xóa</a></button>
                  
                
              </td>
            </tr>
            <tr>
            </tr>
          <?php endforeach ?>   
            
      </table>


    </div>
    <!-- <div class="row mb10">
            <button type="button" style='padding:10px 43px ;' id="select-all">CHỌN TẤT CẢ</button>
            <button type="button" style='padding:10px 40px ;' id="deselect-all">BỎ CHỌN TẤT CẢ</button>
            <input type="submit" name="delAll" value="XÓA CÁC MỤC ĐÃ CHỌN" onclick="return confirm('Bạn có chắc chắn muốn xóa')">
            <a href="index.php?act=addm"><input type="button" value="NHẬP THÊM"></a>
        </div>
         -->
         <div style="margin: 0 100px;">
         <button type="button" class="btn btn-outline-secondary"><a href="index.php?act=addm">nhập thêm </a></button>
         <button type="button" class="btn btn-outline-success" id="select-all">chọn tất cả</button>
         <button type="button" class="btn btn-outline-success"  id="deselect-all">bỏ chọn tất cả</button>
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
    const checkboxes = document.querySelectorAll('input.delItem');
    console.log(checkboxes);

    checkboxes.forEach(function(checkbox) {
      checkbox.checked = checked;
    });
  }
</script>
                </div>
                <?php
                    require "view/foodter.php";

                die; ?>
                <!-- /page content -->
