<?php
    $dbname = "user.db";

    $db = new SQLite3($dbname);

    if(!$db){
        die("SHIIIIIIIT, something went wrong");
    }

    //Create table in SQlite Database
    $query = "CREATE TABLE IF NOT EXISTS user_table(user_id integer primary key,
                user_name text, user_email text, user_details text)";
    
    $db->exec($query);
?>