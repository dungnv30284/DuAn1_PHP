<?php
require_once '../../global.php';
require_once '../../dao_pdo/pdo.php';
require_once '../../dao_pdo/sp_pdo.php';
require_once '../../dao_pdo/bill_pdo.php';
require_once '../../dao_pdo/adm_pdo.php';
require_once '../../dao_pdo/tag_pdo.php';
$VIEW_NAME = 'site/home.php';
if (isset($_GET['act'])) {
    switch ($_GET['act']) {
        case 'addcate':
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                $cate_id = $_POST['cate_id'];
                $cate_name = $_POST['cate_name'];
                $err_cate = $err_name = '';
                if ($cate_id == '') {
                    $err_cate = "Bạn chưa điền mã danh mục";
                }
                if ($cate_name == '') {
                    $err_name = "Bạn chưa điền tên danh mục";
                }
                if (!$err_cate && !$err_name) {
                    cate_insert($cate_id, $cate_name);
                    echo "
                        <script>
                        alert('Thêm thành công!');
                        window.location.href='http://localhost/duan1_php/adm/site/index.php?act=catelist';
                        </script>
                        ";
                }
            }
            $VIEW_NAME = '../danhmuc/addcate.php';
            break;
        case 'editcate':
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                $cate_id = $_POST['cate_id'];
                $cate_name = $_POST['cate_name'];
                $err_name = '';

                if ($cate_name == '') {
                    $err_name = "Bạn chưa điền tên danh mục";
                }
                if (!$err_name) {
                    cate_update($cate_name, $cate_id);

                    echo "
                        <script>
                        alert('Update thành công!');
                        window.location.href='http://localhost/duan1_php/adm/site/index.php?act=catelist';
                        </script>
                        ";
                }
            }
            $cate_id = $_GET['cate_id'];
            $result = cate_selectOne($cate_id);
            $VIEW_NAME = 'danhmuc/editcate.php';
            break;
        case 'delcate':
            $cate_id = $_GET['cate_id'];
            cate_delete($cate_id);
            echo "  <script>
            alert('Xóa thành công!');
            window.location.href='http://localhost/duan1_php/adm/site/index.php?act=catelist';
            </script>";
            $VIEW_NAME = 'danhmuc/delcate.php';
            break;
        case 'catelist':
            $s = cate_selectAll();
            $VIEW_NAME = 'danhmuc/catelist.php';
            break;
        case 'addstt':
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                $ma_hd = $_POST['ma_hd'];
                $stt = $_POST['stt_id'];
                $err_stt = '';
                if ($stt == '') {
                    $err_stt = 'Bạn chưa điền mã trạng thái';
                }
                if (!$err_stt) {
                    stt_insert($ma_hd, $stt);
                    echo "
                        <script>
                        alert('Thêm trạng thái thành công!');
                        window.location.href='http://localhost/duan1_php/adm/site/index.php?act=billlist';
                        </script>
                        ";
                }
            }
            $VIEW_NAME = 'donhang/addstt.php';
            break;
        case 'updatestt':
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                $ma_hd = $_POST['ma_hd'];
                $stt_id = $_POST['stt_id'];
                $err_stt = '';
                if ($stt_id == '' || $stt_id > 4) {
                    $err_stt = 'Bạn chưa điền mã trạng thái/Mã không hợp lệ';
                }
                if (!$err_stt) {
                    stt_update($stt_id, $ma_hd);
                    echo "
                        <script>
                        alert('Update trạng thái thành công!');
                        window.location.href='http://localhost/duan1_php/adm/site/index.php?act=billlist';
                        </script>
                        ";
                }
            }
            $ma_hd = $_GET['ma_hd'];
            $result = status_select1($ma_hd);
            $VIEW_NAME = 'donhang/updatestt.php';
            break;
        case 'billlist':
            $s = bills_selectAll();
            $stt = status_select();

            $VIEW_NAME = 'donhang/billlist.php';
            break;
        case 'productadd':
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                $ten_sp = $_POST['ten_sp'];
                $anh = saveFile('img');
                $gia_sp = $_POST['gia_sp'];
                $err_tensp = $err_anh = $err_giasp = '';
                if ($ten_sp == '') {
                    $err_tensp = "Bạn chưa nhập tên sản phẩm!";
                }
                if ($gia_sp == '') {
                    $err_giasp = "Bạn chưa nhập giá sản phẩm!";
                }
                if ($anh == '') {
                    $err_anh = "Bạn chưa tải lên ảnh/File quá lớn";
                } else {
                    $im = ['jpg', 'jpeg', 'png', 'gif'];
                    $ext = pathinfo($anh, PATHINFO_EXTENSION);
                    if (!in_array($ext, $im)) {
                        $err_anh = "File không phải hình ảnh";
                    }
                }
                if (!$err_tensp && !$err_anh && !$err_giasp) {
                    sp_insert($ten_sp, $anh, $gia_sp);
                    echo "
                        <script>
                        alert('Thêm thành công!');
                        window.location.href='http://localhost/duan1_php/adm/site/index.php?act=productlist';
                        </script>
                        ";
                }
            }
            $VIEW_NAME = 'sp/productadd.php';
            break;
        case 'productedit':
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                $ma_sp = $_POST['ma_sp'];
                $ten_sp = $_POST['ten_sp'];
                $gia_sp = $_POST['gia_sp'];
                $img = $_FILES['img'];
                $err_tensp = $err_anh = $err_giasp = '';
                if ($img['size'] == 0) {
                    $hinh = $_POST['img'];
                    if ($ten_sp == '') {
                        $err_tensp = "Bạn chưa nhập tên sản phẩm!";
                    }
                    if ($hinh == '') {
                        $err_anh = "Bạn chưa tải lên hình ảnh sản phẩm!";
                    }
                    if ($gia_sp == '') {
                        $err_giasp = "Bạn chưa nhập giá sản phẩm!";
                    }
                    if (!$err_tensp && !$err_anh && !$err_giasp) {
                        sp_update($ten_sp, $hinh, $gia_sp, $ma_sp);
                        echo "
                        <script>
                        alert('Update thành công!');
                        window.location.href='http://localhost/duan1_php/adm/site/index.php?act=productlist';
                        </script>
                        ";
                    }
                } else {
                    $anh = saveFile('img');

                    if ($ten_sp == '') {
                        $err_tensp = "Bạn chưa nhập tên sản phẩm!";
                    }
                    if ($anh == '') {
                        $err_anh = "Bạn chưa tải lên hình ảnh sản phẩm!";
                    } else {
                        $im = ['jpg', 'jpeg', 'png', 'gif'];
                        $ext = pathinfo($anh, PATHINFO_EXTENSION);
                        if (!in_array($ext, $im)) {
                            $err_anh = "File không phải hình ảnh";
                        }
                    }
                    if ($gia_sp == '') {
                        $err_giasp = "Bạn chưa nhập giá sản phẩm!";
                    }
                    if (!$err_tensp && !$err_anh && !$err_giasp) {
                        sp_update($ten_sp, $anh, $gia_sp, $ma_sp);
                        echo "
                        <script>
                        alert('Update thành công!');
                        window.location.href='http://localhost/duan1_php/adm/site/index.php?act=productlist';
                        </script>
                        ";
                    }

                }


            }
            $ma_sp = $_GET['ma_sp'];
            $result = sp_selectone($ma_sp);
            $VIEW_NAME = 'sp/productedit.php';
            break;
        case 'prodel':
            $ma_sp = $_GET['ma_sp'];
            sp_delete($ma_sp);
            echo "  <script>
            alert('Xóa thành công!');
            window.location.href='http://localhost/duan1_php/adm/site/index.php?act=productlist';
            </script>";
            $VIEW_NAME = 'sp/prodel.php';
            break;
        case 'productempty':

            cate_empty();
            $VIEW_NAME = 'sp/cate_empty.php';
            break;
        case 'cateempty':

            sp_empty();
            $VIEW_NAME = 'sp/productempty.php';
            break;
        case 'productlist':
            if (isset($page)) {
                $offset = ($page - 1) * $target_per_page;
            } else {
                $offset = 0;
            }
            $a = sp_offset($offset);
            // $s = sp_selectAll();
            $VIEW_NAME = 'sp/productlist.php';
            break;

        case 'home':
            $cate_id = "AO";
            $a = count_cate($cate_id);
            $cate_id = "TX";
            $b = count_cate($cate_id);
            $cate_id = "QA";
            $c = count_cate($cate_id);
            $cate_id = "GI";
            $d = count_cate($cate_id);
            $cate_id = "PK";
            $e = count_cate($cate_id);
            $f = sp_selectAll();
            $gia_sp = '';
            $gia1 = 100000;
            $gia2 = 300000;
            $h = count_masp($gia1, $gia2);
            $gia1 = 310000;
            $gia2 = 500000;
            $i = count_masp($gia1, $gia2);
            $gia1 = 510000;
            $gia2 = 1000000;
            $j = count_masp($gia1, $gia2);


            $VIEW_NAME = 'site/home.php';
            break;
        default:
            $VIEW_NAME = 'site/home.php';
            break;

    }
}








include('../layout.php');
?>