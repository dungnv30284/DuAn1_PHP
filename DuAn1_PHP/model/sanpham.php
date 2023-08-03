<?php
function loadall_inner_sanpham(){
    $sql = "SELECT sp.ma_sp,sp.ten_sp,sp.img,sp.gia_sp, sp_cate.cate_id 
        FROM sp INNER JOIN sp_cate on sp.ma_sp = sp_cate.ma_sp";
    $sanpham = pdo_query($sql);
    return $sanpham;
}

function get_one_sanpham($ma_sp){
    $sql = "SELECT sp.ma_sp,sp.ten_sp,sp.img,sp.gia_sp, sp_cate.cate_id 
        FROM sp INNER JOIN sp_cate on sp.ma_sp = sp_cate.ma_sp WHERE sp.ma_sp=$ma_sp";
    $sanpham = pdo_query_one($sql);
    return $sanpham;
}
function update_sanpham($ma_sp, $ten_sp, $img, $gia_sp){
    $sql = "UPDATE `sp` SET `ma_sp`='$ma_sp',`ten_sp`='$ten_sp',`img`='$img',`gia_sp`='$gia_sp'
         WHERE `ma_sp`= $ma_sp ";
    pdo_execute($sql);
}
// function update_cate_sp($ma_sp,$cate_id){
//     $sql="UPDATE `sp_cate` SET `ma_sp`='$ma_sp',`cate_id`='$cate_id' WHERE `ma_sp`= $ma_sp";
//     $sanpham = pdo_query_one($sql);
//     return $sanpham;
// }
function delete_sp($ma_sp){
    $sql = "DELETE FROM `sp` WHERE `ma_sp` = $ma_sp";
    pdo_execute($sql);
}
function delete_sanpham_cate($ma_sp){
    $sql = "DELETE FROM `sp_cate` WHERE `ma_sp`=$ma_sp";
    pdo_execute($sql);
}
function INSERT_sanpham($ten_sp, $img, $gia_sp){
    $sql = "INSERT INTO `sp`(`ten_sp`, `img`, `gia_sp`) 
        VALUES ('$ten_sp','$img',$gia_sp)";
    $id = getLastInsertId($sql);

    return $id;
}
function INSERT_sp_cate($ma_sp, $cate_id){
    $sql = "INSERT INTO `sp_cate`(`ma_sp`, `cate_id`) VALUES ('$ma_sp','$cate_id')";
    pdo_execute($sql);
}

// function getmember($from,$row){
// if(isset($_GET['page'])){
//     $page = $_GET['page'];
// }else{
//     $page = 1; 
// }
//     global $conn;
//     $row = 3;
//     $from = ($page - 1) * $row;
//     // $from =  ;
//     $sql="SELECT sp.ma_sp,sp.ten_sp,sp.img,sp.gia_sp, sp_cate.cate_id 
//     FROM sp, sp_cate WHERE sp.ma_sp = sp_cate.ma_sp ORDER by sp.ma_sp ASC LIMIT $from,$row";
//     $query = mysqli_query($conn,$sql);
//     $result = array();
//     while($row = mysqli_fetch_assoc($query)){
//         $result[] = $row;
//     }
//     return $result; 
// }


