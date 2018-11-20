<?php
    $mysqli = new mysqli("localhost", "hmjy2017", "2017destiny", "hmjy2017");

    if (mysqli_errno($mysqli)){
        exit("mysql connect error");
    }//check connetion DB

    $memberId = $mysqli -> real_escape_string($_POST['student_id']);
    $memberPw = $mysqli -> real_escape_string(md5($memberPw = $_POST['password']));

    $data = $mysqli->query("SELECT * FROM users WHERE id = '{$memberId}' AND pw = '{$memberPw}'");
    if($data->fetch_array()){
        $msg["state"] = "success";
        echo json_encode($msg);
    }
    else {
        $msg["state"] = "fail";
        echo json_encode($msg);
    }

?>
