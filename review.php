<?php
    header("Access-Control-Allow-Origin: *");
    header("Content-type:application/json",true);

    include('confic.ini.php');

    $contentdata = file_get_contents("php://input");
    $getdata = json_decode($contentdata);

    $text = $getdata->text;
    $roomid = $getdata->idroom;

    $sql = "INSERT INTO review (review_detail, room_id, member_id) 
    VALUE ('$text', '$roomid', NULL) ";
    $result = mysqli_query($con,$sql);










?>