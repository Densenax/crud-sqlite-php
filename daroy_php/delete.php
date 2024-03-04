<?php 

$id = $_GET['u_id'];

include('conndb.php');

$query = "DELETE FROM user_table WHERE user_id='$id'";

if($db->exec($query)){

    header("Location:index.php");

}

else{
    echo "SHIIIIIIIT, something went wrong";
}

?>