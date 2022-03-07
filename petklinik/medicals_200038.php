<?php
session_start();
if(!isset($_SESSION['login'])) {
    echo "<script>
    alert('Please login first !'); 
    window.location.replace('form_login_200038.php');
    </script>";
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Pet Klinik Zul</title>
</head>
<link rel="stylesheet" href="desain.css">
<body>
    <div class="posisi">
        <h1>Pet Klinik Zul</h1>
    </div>
    <br>
    <img src="https://i.pinimg.com/originals/ca/da/f4/cadaf4b21567ef39e2a9187a9c498a30.png" id="gambar" alt="">
    <br>
    <div id="form">
    <center><h3>Medical Records</h3></center><hr>
    <?php
        include "connection_200038.php";

        $querypet="SELECT * FROM pets_200038 WHERE pet_id_200038='$_GET[pet_id]'";

        $pet=mysqli_query($db_connection,$querypet);

        $data1=mysqli_fetch_assoc($pet);
        $querymed="SELECT * FROM medicals_200038 AS x, doctors_200038 AS y WHERE x.pet_id_200038='$_GET[pet_id]' AND x.doctor_id_200038 = y.doctor_id_200038";
        $medicals=mysqli_query($db_connection,$querymed);
    ?>
    <table>
        <tr>
            <td>Pet Id/Name</td>
            <td>: <?=$data1['pet_id_200038']?> / <?=$data1['pet_name_200038']?> </td>
        </tr>
        <tr>
            <td>Pet Type/Gender/Age</td>
            <td>: <?=$data1['pet_type_200038']?> / <?=$data1['pet_gender_200038']?> / <?=$data1['pet_age_200038']?> </td>
        </tr>
        <tr>
            <td>Owner</td>
            <td>: <?=$data1['pet_owner_200038']?> / <?=$data1['pet_address_200038']?> / <?=$data1['pet_phone_200038']?> </td>
        </tr>
    </table>
    </div><br>
    <button class="tombol"><a href="add_medicals_200038.php?pet_id=<?= $_GET['pet_id'];?>">Add New Record</a></button>
    <button class="tombol"><a href="read_pet_200038.php">Back to Pets List</a></button><br><br>
    <table bgcolor="aqua" border="1">
        <tr>
            <th>No</th>
            <th>Date</th>
            <th>Doctor</th>
            <th>Symtom</th>
            <th>Diagnose</th>
            <th>Treatment</th>
            <th>Cost ($)</th>
        </tr>
        <?php
            if(mysqli_num_rows($medicals) > 0) {
                $i=1;
                foreach($medicals as $data2) :
        ?>
        <tr>
            <td><?=$i++?></td>
            <td><?=date('D, d M Y H:i:s', strtotime($data2['mr_date_200038']))?></td>
            <td><?=$data2['doctor_name_200038']?></td>
            <td><?=$data2['symptom_200038']?></td>
            <td><?=$data2['diagnose_200038']?></td>
            <td><?=$data2['treatment_200038']?></td>
            <td><?=$data2['cost_200038']?></td>
        </tr>
        <?php
            endforeach;
         } else {
        ?>
        <tr><td colspan="7" align='center'>No Record !!</td></tr>
        <?php } ?>  
    </table>
</body>
</html>