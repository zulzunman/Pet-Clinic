<?php
    if(isset($_GET['userid'])){
        include "connection_200038.php";
        $query = "DELETE FROM users_200038 
        WHERE userid_200038 = '$_GET[userid]'";

        $delete = mysqli_query($db_connection, $query);

        if ($delete){
            echo "<script> alert ('User delete successfully!!'); </script>";
        } else {
            echo "<script> alert ('User delete failed !!'); </script>";
        }
    }
?>

<script>window.location.replace("read_user_200038.php");</script>