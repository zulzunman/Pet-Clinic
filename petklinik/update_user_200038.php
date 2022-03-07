<?php
if(isset($_POST['save'])){
        include "connection_200038.php";
        $query = "UPDATE users_200038 SET 
        username_200038 = '$_POST[username_200038]',
        password_200038 = '$_POST[password_200038]',
        usertype_200038 = '$_POST[usertype_200038]',
        fullname_200038 = '$_POST[fullname_200038]'
        WHERE userid_200038 = '$_POST[userid_200038]';";

        $update = mysqli_query($db_connection, $query);

        if ($update){
            echo "<script> alert ('User update successfully!!'); </script>";
        } else {
            echo "<script> alert ('User update failed !!'); </script>";
        }
    }
?>

<script>window.location.replace("read_user_200038.php");</script>