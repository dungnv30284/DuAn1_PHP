<?php
require_once 'pdo.php';

function user_select_one($user){
    $sql = "select * from users where username = ?";
    return pdo_query_one($sql,$user);
}
function user_register($username,$user_mail,$user_phone,$user_address,$user_password){
    $sql = "insert into users(username,user_mail,user_phone,user_address,user_password) values (?,?,?,?,?)";
    pdo_execute($sql,$username,$user_mail,$user_phone,$user_address,$user_password);
}