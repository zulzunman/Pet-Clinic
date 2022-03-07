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
<style>
    .buton a{
        color: skyblue;
        text-align: center;
        font-size: large;
        padding: 8px;
        text-decoration: none;
    }
    .buton button{
        background-color: blue;
        border-radius: 25px;
    }
    .buton button:hover{
        background-color: brown;
    }
    
</style>
<body>
    <div class="posisi">
        <h1>Pet Klinik Zul</h1>
    </div>
    <div id="tabel">
    <h3>Pets List</h3>
    <div class="buton">
        <button><a href="add_pet_200038.php">Add New Pet</a></button>
        <button><a href="index.php">Back to Home</a></button>
    </div>
    <br>
    <table bgcolor="aqua" border = "1" align="center">
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>Type</th>
            <th>Gender</th>
            <th>Age (month)</th>
            <th>Photo</th>
            <th>Owner</th>
            <th>Address</th>
            <th>Phone</th>
            <th colspan='2'>Action</th>
        </tr>
        <?php
        include "connection_200038.php";
        $query = "SELECT * FROM pets_200038";
        $pets = mysqli_query($db_connection, $query);

        $i=1;
        foreach ($pets as $data) :
        ?>
        <tr>
            <td><?php echo $i++; ?></td>
            <td>
            <a href="medicals_200038.php?pet_id=<?=$data['pet_id_200038']?>"><?php echo $data["pet_name_200038"]; ?></a>
            </td>
            <td>
            <?php echo $data["pet_type_200038"]; ?>
            </td>
            <td><?= $data["pet_gender_200038"]; ?></td>
            <td>
            <?php echo $data["pet_age_200038"]; ?>
            </td>
            <td align="center">
                <img src="uploads/pets/<?php echo $data['pet_photo_200038']; ?>" width="50" height="50" alt=""><br>
                <a href="pet_photo_200038.php?id=<?=$data['pet_id_200038']?>">Change Photo</a>
            </td>
            <td><?= $data["pet_owner_200038"]; ?></td>
            <td><?= $data["pet_address_200038"]; ?></td>
            <td><?= $data["pet_phone_200038"]; ?></td>
            <td><a href="edit_pet_200038.php?id=<?=$data['pet_id_200038']?>">Edit Pet</a></td>
            <td><a href="delete_pet_200038.php?id=<?=$data['pet_id_200038']?>" onclick="return confirm('Are you sure?')">Delete Pet</a></td>
        </tr>
        <?php endforeach; ?>
    </table>
    </div>
</body>
</html>