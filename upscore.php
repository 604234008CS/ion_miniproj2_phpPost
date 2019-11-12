<?php
    header("Access-Control-Allow-Origin: *");
    header("Content-type:application/json",true);

    include('confic.ini.php');

    $contentdata = file_get_contents("php://input");
    $getdata = json_decode($contentdata);

    $score = $getdata->score;
    $roomid = $getdata->idroom;

    $sql = "INSERT INTO score (score_point, room_id, member_id) 
    VALUE ('$score', '$roomid', NULL) ";
    $result = mysqli_query($con,$sql);










?>