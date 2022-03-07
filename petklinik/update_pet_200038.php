<?php
    //echo $_POST['pet_name_200038'] . "<br>";
    //echo $_POST['pet_type_200038'] . "<br>";
    //echo $_POST['pet_gender_200038'] . "<br>";
    //echo $_POST['pet_age_200038'] . "<br>";
    //echo $_POST['pet_owner_200038'] . "<br>";
    //echo $_POST['pet_address_200038'] . "<br>";
    //echo $_POST['pet_phone_200038'] . "<br>";
    if(isset($_POST['save'])){
        include "connection_200038.php";
        $query = "UPDATE pets_200038 SET 
        pet_name_200038 = '$_POST[pet_name_200038]',
        pet_type_200038 = '$_POST[pet_type_200038]',
        pet_gender_200038 = '$_POST[pet_gender_200038]',
        pet_age_200038 = '$_POST[pet_age_200038]',
        pet_owner_200038 = '$_POST[pet_owner_200038]',
        pet_address_200038 = '$_POST[pet_address_200038]',
        pet_phone_200038 = '$_POST[pet_phone_200038]'
        WHERE pet_id_200038 = '$_POST[pet_id_200038]';";

        $update = mysqli_query($db_connection, $query);

        if ($update){
            //echo "<p>Pet added successfully!!<p>";
            echo "<script> alert ('Pet update successfully!!'); </script>";
        } else {
            //echo"<p>Pet add failed !!<p>";
            echo "<script> alert ('Pet update failed !!'); </script>";
        }
    }
?>

<!--<p><a href="read_pet_200038.php">Back To Pets List</a></p>-->
<script>window.location.replace("read_pet_200038.php");</script>