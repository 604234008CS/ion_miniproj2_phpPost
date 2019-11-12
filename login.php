<?php
    header("Access-Control-Allow-Origin: *");
    header("Content-type:application/json",true);

    include('confic.ini.php');

    $contentdata = file_get_contents("php://input");
    $getdata = json_decode($contentdata);

    $email = $getdata->email;
    $pass = $getdata->pass;

    $sql = "SELECT * FROM member WHERE member_email = '$email' AND memver_password = '$pass' ";
    $result = mysqli_query($con,$sql);

    $numrow = mysqli_num_rows($result);

    if($numrow == 1){
        $arr = array();
        while($row = mysqli_fetch_assoc($result)){
            $arr[] = $row;
        }

        echo json_encode($arr);
        mysqli_close($con);
    }else{
        echo json_encode(null);
    }

?>