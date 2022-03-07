<?php
    if(isset($_POST['save'])){
        include "connection_200038.php";
        $password = password_hash($_POST['usertype_200038'], PASSWORD_DEFAULT);
        $query = "INSERT INTO users_200038  (username_200038, password_200038, usertype_200038, fullname_200038) VALUES ('$_POST[username_200038]', '$password', '$_POST[usertype_200038]', '$_POST[fullname_200038]')";

        $create1 = mysqli_query($db_connection, $query);

        if ($create1){
            echo "<script> alert ('User added successfully!!'); </script>";
        } else {
            echo "<script> alert ('User add failed !!'); </script>";
        }
    }
?>

<script>window.location.replace("read_user_200038.php");</script>
?>