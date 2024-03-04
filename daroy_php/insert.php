<?php
    include('conndb.php');

    $name = $_POST['user_name'];
    $email = $_POST['user_email'];
    $details = $_POST['user_details'];

    $query = "INSERT INTO user_table(user_name,user_email,user_details) VALUES('$name','$email','$details')";
    if($db->exec($query)){

        header("Location:index.php");

    }

    else{
        echo"SHIIIIIIIT, something went wrong";
    }
?>