<?php
    $mysqli = new mysqli("localhost", "hmjy2017", "2017destiny", "hmjy2017");
//connect DB
    if (mysqli_errno($mysqli)){
        exit("mysql connect error");
    }//check connetion DB

    $data = $mysqli->query("SELECT * FROM `cabinet` WHERE `user` IS NOT NULL");

    $i = 0;
    while($obj = $data->fetch_row()){
        $msg[$i++] = $obj[1];
    }
    echo json_encode($msg);
?>
