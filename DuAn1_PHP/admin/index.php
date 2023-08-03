<?php
require "../model/danhmuc.php";
require "../model/sanpham.php";
require_once "../model/connection.php";

require "view/header.php";

if (isset($_GET['act'])) {
    $act = $_GET['act'];

    switch ($act) {
        case 'listdm':
            $categories = loadall_danhmuc();
            require "danhmuc/list.php";
            // require "../admin/danhmuc/list.php"; 
            break;

        case 'suadm':
            if (isset($_GET['cate_id'])) {
                $id = $_GET['cate_id'];
                $dm = loadone_danhmuc($id);
            }
            require "danhmuc/update.php";
            break;

        case 'updatedm':
            if (isset($_POST['capnhat']) && $_POST['capnhat']) {
                $cate_id = $_POST['cate_id'];
                $cate_name = $_POST['cate_name'];
                if ($cate_id != "" && $cate_name != "") {
                    update_danhmuc($cate_id, $cate_name);
                    $thongbao = "cap nhat thanh cong";
                } else {
                    $thongbao = "k cap nhat thanh cong";
                }
            }
            loadone_danhmuc($cate_id);
            require "danhmuc/list.php";
            break;

        case 'xoadm':
            if (isset($_GET['cate_id'])) {
                $dm = $_GET['cate_id'];
                delete_danhmuc($dm);
            }
            $danhmuc = loadone_danhmuc($dm);
            require "danhmuc/list.php";
            break;

        case 'addm':
            if (isset($_POST['themmoi'])) {
                if ($_POST['id'] != "" && $_POST['tendm'] != "") {
                    $id = $_POST['id'];
                    $tenloai = $_POST['tendm'];
                    insert_danhmuc($id, $tenloai);
                    $thongbao = "thêm thành công";
                } else {
                    $thongbao = "bạn nhập sai định dạng";
                }
            }
            require "danhmuc/add.php";
            break;

        case 'delAllDm':
            if (isset($_POST['delAll']) && !empty($_POST['delItem'])) {
                $delItem = $_POST['delItem'];
                $sd = count($delItem);
                for ($i = 0; $i < $sd; $i++) {
                    delete_danhmuc($delItem[$i]);
                }
            }
            $categories = loadall_danhmuc();
            require "danhmuc/list.php";

            break;

        case 'listsp':
            $sanpham = loadall_inner_sanpham();
            require "sanpham/list.php";
            break;

        case 'xoasp':
            if (isset($_GET['ma_sp'])) {
                $sp = $_GET['ma_sp'];
                delete_sanpham_cate($sp);
                delete_sp($sp);
            }
            $sanpham = loadall_inner_sanpham();
            require "sanpham/list.php";
            break;
        
        case 'dellsp';
        if (isset($_POST['delAll']) && !empty($_POST['name'])) {
            $name = $_POST['name'];
            $sd = count($name);
            for ($i = 0; $i < $sd; $i++) {
                delete_sanpham_cate($name[$i]);
                delete_sp($name[$i]);
            }
        }
        $sanpham = loadall_inner_sanpham();
        require "sanpham/list.php";
        break;

        case 'addsp':
            if (isset($_POST['themsp'])) {
                $img = $_FILES['img']['name'];
                if ($_POST['ten_sp']) {
                    $ten_sp = $_POST['ten_sp'];
                } else {
                    $ten_sp = "";
                    $thongbaoTensp = "Bạn nhập sai định dạng tên";
                }

                if ($_POST['gia_sp'] != "" && is_nan($_POST['gia_sp']) == false) {
                    $gia_sp = $_POST['gia_sp'];
                } else {
                    $gia_sp = "";
                    $thongbaoDongia = "Bạn phải nhập số vào giá sản phẩm";
                }
                require "sanpham/upload.php";
                global $file_name;
                if ($ten_sp != "" &&  is_nan($gia_sp) == false) {
                    $id = INSERT_sanpham($ten_sp, $img, $gia_sp);

                    if (!empty($_POST['cate_id']) && !empty($id)) {
                        $cate_id = $_POST['cate_id'];
                        INSERT_sp_cate($id, $cate_id);
                    }
                    // die();
                    $thongbao = "thêm thành công";
                } else {
                    $thongbao = "hãy kiểm tra lại định dạng!";
                }
            }
            require "sanpham/add.php";
            break;
        case 'suasp':
            if (isset($_GET['ma_sp'])) {
                $ma_sp = $_GET['ma_sp'];
                $sp = get_one_sanpham($ma_sp);
            }
            require "sanpham/update.php";
            break;

        case 'updatesp':
            if (isset($_POST['capnhatsp']) && $_POST['capnhatsp']) {
                if($_POST['ten_sp']!=""){
                    $ten_sp = $_POST['ten_sp'];
                }else{
                    $ten_sp="";
                    $thongbaoTensp = "Bạn nhập sai định dạng tên";
                }
                
                if($_POST['gia_sp']!="" &&is_nan($_POST['gia_sp'])==false){
                    $gia_sp = $_POST['gia_sp'];
                }else{
                    $gia_sp="";
                    $thongbaoDongia = "Bạn phải nhập số vào giá sản phẩm";
                }
                $ma_sp = $_POST['ma_sp'];
                require "sanpham/upload.php";
                global $file_name;
                if ($ten_sp != "" && is_nan($gia_sp) == false) {
                    update_sanpham($ma_sp, $ten_sp,$file_name,$gia_sp);
                    // update_cate_sp($ma_sp,$cate_id);
                    $thongbao = "Cập nhập thành công";
                } else {
                    $thongbao = "Cập nhập thất bại";
                }

                
            }
            
            
            $sanpham = loadall_inner_sanpham();
            require "sanpham/list.php";
            break;
    }
} else {
    require "view/home.php";
}


require "foodter.php";

?>