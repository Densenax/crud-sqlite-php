<?php

include('conndb.php');

$uid = $_POST['id'];

$uname = $_POST['user_name'];

$uemail = $_POST['user_email'];

$udetails = $_POST['user_details'];

$query = "UPDATE user_table SET user_name='$uname', user_email='$uemail', user_details='$udetails' WHERE user_id='$uid'";

if($db->exec($query)){

    header("Location:index.php");

}

else{
    echo "SHIIIIIIIT, something went wrong";
}

?>