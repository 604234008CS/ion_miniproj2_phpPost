<?php
    header("Access-Control-Allow-Origin: *");
    header("Content-type:application/json",true);

    include('confic.ini.php');

    $contentdata = file_get_contents("php://input");
    $getdata = json_decode($contentdata);

    $name = $getdata->name;
    $address = $getdata->address;
    $price = $getdata->price;
    $detail = $getdata->detail;
    $type = $getdata->type;
    $sex = $getdata->sex;
    $tel = $getdata->tel;

    $sql = "INSERT INTO room (room_name, address, price, detail, type_id, sex, room_tel) VALUE ('$name', '$address', '$price', '$detail', '$type', '$sex', '$tel') ";
    $result = mysqli_query($con,$sql);

?>