<?php
function loadall_danhmuc()
{
    $sql = "SELECT * FROM `categories` order by `cate_id` ";
    $danhmuc = pdo_query($sql);
    return $danhmuc;
}
function insert_danhmuc($cate_id,$cate_name)
{
    $sql = "INSERT INTO `categories` (`cate_id` , `cate_name`) VALUES ('$cate_id' , '$cate_name')";
    pdo_execute($sql);
}


function delete_danhmuc($cate_id)
{
    $sql = "DELETE FROM categories WHERE `categories`.`cate_id` = '$cate_id'";
    pdo_execute($sql);
}

function update_danhmuc($cate_id, $cate_name)
{
    $sql = "UPDATE `categories` SET `cate_id`='$cate_id',`cate_name`='$cate_name' WHERE `cate_id` = '$cate_id'";
    pdo_execute($sql);
}

function loadone_danhmuc($cate_id){
    $sql = "SELECT * FROM `categories`where `cate_id`='$cate_id'";
    $dm = pdo_query_one($sql);
    return $dm;
}
?>