<?php
    $row = mysqli_fetch_object($result);

    $db_userid = $row->admin_id;
    $db_password = $row->admin_password;
    $encryptpasswd = sha1($userPasswd);     //Note: sha 1 encryption is obsolete
    $db_name = $row->admin_name;

    if($db_userid != $userid || $db_password != $encryptpasswd){
        $query = "INSERT INTO administrator (admin_id, admin_password, admin_name) ";
        $query .="VALUES ('$userid','$encryptpasswd','$name')";
        $result = mysqli_query($connection,$query);
        if(!result){
            echo("Insert to administrator failed.".mysqli_error($connection));
            exit();
        }
    }
?>