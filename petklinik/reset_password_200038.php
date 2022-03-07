<?php
if(isset($_GET['id'])) {
    include "connection_200038.php";
    $password = password_hash($_GET['type'], PASSWORD_DEFAULT);
    $query="UPDATE users_200038 SET
    password_200038 = '$password'
    WHERE userid_200038='$_GET[id]'";
    $update = mysqli_query($db_connection, $query);

        if ($update){
            echo "<script> alert ('Reset password successfully!!'); </script>";
        } else {
            echo "<script> alert ('Reset password failed !!'); </script>";
        }
    }
?>

<script>window.location.replace("read_user_200038.php");</script>