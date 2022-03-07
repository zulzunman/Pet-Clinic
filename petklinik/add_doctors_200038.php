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
    <div class="posisi"><h1>Doctor Zul</h1></div><br>
    <img src="https://www.freeiconspng.com/thumbs/physician-icon-png/physician-icon-png-10.png" id="gambar" alt="">
    
    <div id="form">
    <center><h3>Form Add Doctor</h3></center><hr>
    <form method="post" action="create_doctors_200038.php">
        <table>
            <tr>
                <td>Name</td>
                <td>
                    <input type="text" name="doctor_name_200038" required>
                </td>
            </tr>
            <tr>
                <td>Gender</td>
                <td>
                    <input type="radio" name="doctor_gender_200038" value="Male" required>Male
                    <input type="radio" name="doctor_gender_200038" value="Female" required>Female
                </td>
            </tr>
                <td>Address</td>
                <td>
                    <textarea name="doctor_address_200038" id="" cols="30" rows="10" required></textarea>
                </td>
            </tr>
            <tr>
                <td>Phone</td>
                <td>
                    <input type="text" name="doctor_phone_200038" required>
                </td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input type="submit" name="save" value="SAVE">
                    <input type="reset" name="reset" value="RESET">
                </td>
            </tr>
        </table>
    </form>
    </div><br>
    <button class="tombol"><a href="read_doctor_200038.php">Cancel</a></button>
</body>
</html>