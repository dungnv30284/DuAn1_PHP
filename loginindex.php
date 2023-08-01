<?php
require_once ('global.php');
require_once('dao_pdo/adm_pdo.php');
extract($_REQUEST);
if(exist_param('btn_login')){
    $adm = adm_select_one($adm_id);
    if($adm){
        if($adm['pass']==$pass){
            $mess = "Login Success!";
            if(exist_param('ghi_nho')){
                add_cookie('adm_id',$adm_id,1);
                add_cookie('pass',$pass,1);
            }
            else{
                delete_cookie('adm_id');
                delete_cookie('pass');
            }
            $_SESSION['adm']=$adm;
            if(isset($_SESSION['request_url'])){
                header('location: '.$_SESSION['request_url']);
            }
            echo "
            <script>
            alert('Đăng nhập thành công! Chuyển đến trang quản trị!');
            window.location.href='http://localhost/duan1/adm/site/index.php';
            </script>
            ";
        }
        else{
            $mess = "Wrong password";
            echo "
            <script>
            alert(' Mật khẩu không đúng vui  bạn đăng nhập lại ');
            window.location.href='http://localhost/duan1/login.php';
            </script>
            ";
        }
    }
    else{
        $mess = "Wrong Login pass";
        echo "
            <script>
            alert('Tài khoản hoặc mật khẩu không đúng vui  bạn đăng nhập lại ');
            window.location.href='http://localhost/duan1/login.php';
            </script>
            ";
    }
}
else{
    session_unset();
    $adm_id = get_cookie('adm_id');
    $pass = get_cookie('pass');
    echo "
        <script>
        alert('Đăng xuất thành công!');
        window.location.href='http://localhost/duan1/index.php';
        </script>
        ";
}