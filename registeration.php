<?php

include 'config.php';

if($_SERVER['REQUEST_METHOD'] == 'POST') {

    $conn = mysqli_connect($DB_HOST,DB_USER,$DB_PASS,$DB_NAME);

    $userName = $POST['user_name'];
    $mobileNo = $POST['mobile_no'];
    $userPincode = $POST['pin_code'];
    $userAdhar = $POST['adhar_no'];
    $userPwd = $POST['password'];

    $checkSql = "SELECT * FROM userinfo WHERE user_name = '$userName'";
    $check = mysqli_fetch_array(mysqli_query($conn,$checkSql));

    if(isset($checkSql)) {
        echo "$userName is already exists";
    }
    else {
        $sql_query = "INSERT INTO 'userinfo' ('user_name','user_pincode','user_adhar','user_pwd') VALUES ('$userName','$userPincode','$userAdhar','$userPwd')";

        if(mysqli_query($conn,$sql_query)) {

           $response['success'] = true;
           $response['message'] = "Success";
        }
        else {
            $response['success'] = false;
            $response['message'] = "Failed";
        }

    }

}
mysqli_close($conn);


?>

