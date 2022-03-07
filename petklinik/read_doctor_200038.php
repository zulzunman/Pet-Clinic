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
        <h1>Doctor Zul</h1>
    </div>
    <div id="tabel">
    <h3>Doctor List</h3>
    <button class="tombol"><a href="add_doctors_200038.php">Add New Doctor</a></button>
    <button class="tombol"><a href="index.php">Back to Home</a></button><br><br>
    <table border = "1" align="center" bgcolor="aqua">
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>Gender</th>
            <th>Address</th>
            <th>Phone</th>
            <th>Photo</th>
            <th colspan='2'>Action</th>
        </tr>
        <?php
        include "connection_200038.php";
        $query = "SELECT * FROM doctors_200038";
        $dok = mysqli_query($db_connection, $query);

        $i=1;
        foreach ($dok as $data) :
        ?>
        <tr>
            <td><?= $i++; ?></td>
            <td>
                <?= $data["doctor_name_200038"]; ?>
            </td>
            <td><?= $data["doctor_gender_200038"]; ?></td>
            <td><?= $data["doctor_address_200038"]; ?></td>
            <td><?= $data["doctor_phone_200038"]; ?></td>
            <td align="center">
                <img src="uploads/doctors/<?php echo $data['doctor_photo_200038']; ?>" width="50" height="50" alt="">
            </td>
            <td><a href="edit_doctor_200038.php?id=<?=$data['doctor_id_200038']?>">Edit Doctor</a></td>
            <td><a href="delete_doctor_200038.php?id=<?=$data['doctor_id_200038']?>" onclick="return confirm('Are you sure?')">Delete Doctor</a></td>
        </tr>
        <?php endforeach; ?>
    </table>
    </div>
</body>
</html>