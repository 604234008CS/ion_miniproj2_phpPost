<?php
    header("Access-Control-Allow-Origin: *");
    header("Content-type:application/json",true);

    include('confic.ini.php');

    $contentdata = file_get_contents("php://input");
    $getdata = json_decode($contentdata);

    $name = $getdata->name;
    $sname = $getdata->sname;
    $email = $getdata->email;
    $pass = $getdata->pass;

    $sql = "INSERT INTO member (member_name, member_sname, member_email, memver_password) VALUE ('$name', '$sname', '$email', '$pass') ";
    $result = mysqli_query($con,$sql);

?>