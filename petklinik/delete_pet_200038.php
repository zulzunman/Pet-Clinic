<?php
    if(isset($_GET['id'])){
        include "connection_200038.php";
        $query = "DELETE FROM pets_200038 
        WHERE pet_id_200038 = '$_GET[id]'";

        $delete = mysqli_query($db_connection, $query);

        if ($delete){
            echo "<script> alert ('Pet delete successfully!!'); </script>";
        } else {
            echo "<script> alert ('Pet delete failed !!'); </script>";
        }
    }
?>

<script>window.location.replace("read_pet_200038.php");</script>