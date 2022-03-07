<?php
    if(isset($_GET['id'])){
        include "connection_200038.php";
        $query = "DELETE FROM doctors_200038 
        WHERE doctor_id_200038 = '$_GET[id]'";

        $delete = mysqli_query($db_connection, $query);

        if ($delete){
            echo "<script> alert ('Doctor delete successfully!!'); </script>";
        } else {
            echo "<script> alert ('Doctor delete failed !!'); </script>";
        }
    }
?>

<script>window.location.replace("read_doctor_200038.php");</script>