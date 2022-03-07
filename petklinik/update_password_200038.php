<?php
session_start();
if(isset($_POST['change'])) {
    include "connection_200038.php";

    $password = password_hash($_POST['new_password_200038'], PASSWORD_DEFAULT);
    $query = "UPDATE users_200038 SET password_200038 = '$password' WHERE userid_200038 = '$_SESSION[userid]'";
    $update = mysqli_query($db_connection,$query);

    if($update) {
        $_SESSION['password']=$password;
        echo "<script>alert('Change password successed !');window.location.replace('index.php');</script>";
    } else {
        $_SESSION['password']=$password;
        echo "<script>alert('Change password failed !');window.location.replace('change_password_200038.php');</script>";    
    }
}
?>