<?php
    if(isset($_POST['save'])){
        include "connection_200038.php";
        $query = "INSERT INTO medicals_200038  SET 
        pet_id_200038       = '$_POST[pet_id_200038]',
        doctor_id_200038    = '$_POST[doctor_id_200038]',
        symptom_200038      = '$_POST[symptom_200038]',
        diagnose_200038     = '$_POST[diagnose_200038]',
        treatment_200038    = '$_POST[treatment_200038]',
        cost_200038         = '$_POST[cost_200038]'";
        
        $create = mysqli_query($db_connection, $query);

        if ($create){
            echo "<script> alert ('Medical added successfully!!'); </script>";
        } else {
            echo "<script> alert ('Medical add failed !!'); </script>";
        }
    }
?>

<script>window.location.replace("medicals_200038.php?pet_id=<?= $_POST['pet_id_200038'];?>");</script>