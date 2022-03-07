<?php
    if(isset($_POST['save'])){
        include "connection_200038.php";
        $query = "INSERT INTO doctors_200038  (doctor_name_200038, doctor_gender_200038, doctor_address_200038, doctor_phone_200038) VALUES ('$_POST[doctor_name_200038]', '$_POST[doctor_gender_200038]', '$_POST[doctor_address_200038]', '$_POST[doctor_phone_200038]')";

        $create1 = mysqli_query($db_connection, $query);

        if ($create1){
            echo "<script> alert ('Doctor added successfully!!'); </script>";
        } else {
            echo "<script> alert ('Doctor add failed !!'); </script>";
        }
    }
?>

<script>window.location.replace("read_doctor_200038.php");</script>
?>