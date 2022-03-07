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
<html lang="en">
<head>
    <title>Pet Klinik Zul</title>
</head>
<link rel="stylesheet" href="desain.css">
<body>
    <div class="posisi">
        <h1>Pet Klinik Zul</h1>
    </div><br>
    <img src="https://weruva.com/wp-content/uploads/2019/01/cat-dog-illustration_petspeak-01.png" id="gambar" alt="">
    <div id="form">
    <center><h3>Form Edit Pet</h3></center><hr>
    <?php
        include "connection_200038.php";

        $query="SELECT * FROM pets_200038 WHERE pet_id_200038='$_GET[id]'";

        $pet=mysqli_query($db_connection,$query);

        $data=mysqli_fetch_assoc($pet);
    ?>
    <form method="post" action="update_pet_200038.php">
        <table>
            <tr>
                <td>Name</td>
                <td>
                    <input type="text" name="pet_name_200038" value="<?=$data['pet_name_200038']?>" required>
                </td>
            </tr>
            <tr>
                <td>Type</td>
                <td>
                    <select name="pet_type_200038" id="" required>
                        <option value="">Choose</option>
                        <option value="Cat" <?=($data['pet_type_200038']=='Cat')?'selected':'';?>>Cat</option>
                        <option value="Dog" <?=($data['pet_type_200038']=='Dog')?'selected':'';?>>Dog</option>
                        <option value="Reptil" <?=($data['pet_type_200038']=='Reptil')?'selected':'';?>>Reptil</option>
                        <option value="Bird" <?=($data['pet_type_200038']=='Bird')?'selected':'';?>>Bird</option>
                        <option value="Rodent" <?=($data['pet_type_200038']=='Rodent')?'selected':'';?>>Rodent</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Gender</td>
                <td>
                    <input type="radio" name="pet_gender_200038" value="Male" <?=($data['pet_gender_200038']=='Male')?'checked':'';?> required>Male
                    <input type="radio" name="pet_gender_200038" value="Female" <?=($data['pet_gender_200038']=='Female')?'checked':'';?> required>Female
                </td>
            </tr>
            <tr>
                <td>Age</td>
                <td>
                    <input type="number" name="pet_age_200038" value="<?=$data['pet_age_200038']?>"  required>
                </td>
            </tr>
            <tr>
                <td>Owner</td>
                <td>
                    <input type="text" name="pet_owner_200038" value="<?=$data['pet_owner_200038']?>" required>
                </td>
            </tr>
            <tr>
                <td>Address</td>
                <td>
                    <textarea name="pet_address_200038" id="" cols="30" rows="10" required><?=$data['pet_address_200038']?></textarea>
                </td>
            </tr>
            <tr>
                <td>Phone</td>
                <td>
                    <input type="text" name="pet_phone_200038" value="<?=$data['pet_phone_200038']?>" required>
                </td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input type="submit" name="save" value="SAVE">
                    <input type="reset" name="reset" value="RESET">
                    <input type="hidden" name="pet_id_200038" value="<?=$data['pet_id_200038']?>">
                </td>
            </tr>
        </table>
    </form>
    </div><br>
    <button class="tombol"><a href="read_pet_200038.php">Cancel</a></button>
</body>
</html>