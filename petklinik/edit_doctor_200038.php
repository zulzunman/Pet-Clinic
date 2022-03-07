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
        <h1>Doctor Zul</h1>
    </div><br>
    <img src="https://www.freeiconspng.com/thumbs/physician-icon-png/physician-icon-png-10.png" id="gambar" alt="">
    
    <div id="form">
    <center><h3>Form Edit Doctor</h3></center><hr>
    <?php
        include "connection_200038.php";

        $query="SELECT * FROM doctors_200038 WHERE doctor_id_200038='$_GET[id]'";

        $pet=mysqli_query($db_connection,$query);

        $data=mysqli_fetch_assoc($pet);
    ?>
    <form method="post" action="update_doctor_200038.php" enctype="multipart/form-data">
        <table>
            <tr>
                <td>Name</td>
                <td>
                    <input type="text" name="doctor_name_200038" value="<?=$data['doctor_name_200038']?>" required>
                </td>
            </tr>
            <tr>
                <td>Gender</td>
                <td>
                    <input type="radio" name="doctor_gender_200038" value="Male" <?=($data['doctor_gender_200038']=='Male')?'checked':'';?> required>Male
                    <input type="radio" name="doctor_gender_200038" value="Female" <?=($data['doctor_gender_200038']=='Female')?'checked':'';?> required>Female
                </td>
            </tr>
            <tr>
                <td>Address</td>
                <td>
                    <textarea name="doctor_address_200038" id="" cols="30" rows="10" required><?=$data['doctor_address_200038']?></textarea>
                </td>
            </tr>
            <tr>
                <td>Phone</td>
                <td>
                    <input type="text" name="doctor_phone_200038" value="<?=$data['doctor_phone_200038']?>" required>
                </td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <img src="uploads/doctors/<?php echo $data['doctor_photo_200038']; ?>" width="100" height="100" alt="">
                </td>
            </tr>
            <tr>
                <td>New Photo</td>
                <td>
                     : <input type="file" name="new_photo_200038" />
                </td>
            </tr>
            <tr>
                <td>&nbsp;</td>
                <td>&nbsp;
                    <input type="submit" name="save" value="SAVE">
                    <input type="reset" name="reset" value="RESET">
                    <input type="hidden" name="doctor_photo_200038" value="<?=$data['doctor_photo_200038']?>" />
                    <input type="hidden" name="doctor_id_200038" value="<?=$data['doctor_id_200038']?>">
                </td>
            </tr>
        </table>
    </form>
    </div><br>
    <button class="tombol"><a href="read_doctor_200038.php">Cancel</a></button>
</body>
</html>