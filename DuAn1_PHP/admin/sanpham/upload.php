<?php
if (isset($_FILES['img'])) {
    $dir = "../upload/";
    $file_name = basename($_FILES['img']['name']);
    $path = pathinfo($_FILES['img']['name'], PATHINFO_EXTENSION);
    $accept_path = ['png', 'jpg'];
    $size = $_FILES['img']['size'];
    if (!in_array(strtolower($path), $accept_path) || $size > 5000000) {
        echo "Ảnh ko hợp lệ";
        $checked = false;
        return;
    } else {
        move_uploaded_file($_FILES['img']["tmp_name"], $dir . $file_name);
        $checked = true;
    }

}

?>