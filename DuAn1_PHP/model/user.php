<?php 
    function checkout($username,$pass)
    {
        $sql = "SELECT * FROM `admin` WHERE username='".$username."' ";
        $user = pdo_query_one($sql);
        return $user;
    }
?>