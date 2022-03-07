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
    </div>
    <br>
    <img src="https://weruva.com/wp-content/uploads/2019/01/cat-dog-illustration_petspeak-01.png" id="gambar" alt="">
    <div id="form">
    <center><h3>Form Add Pet</h3></center><hr>
    <form method="post" action="create_pet_200038.php">
        <table>
            <tr>
                <td>Name</td>
                <td>
                    <input type="text" name="pet_name_200038" required>
                </td>
            </tr>
            <tr>
                <td>Type</td>
                <td>
                    <select name="pet_type_200038" id="" required>
                        <option value="">Choose</option>
                        <option value="Cat">Cat</option>
                        <option value="Dog">Dog</option>
                        <option value="Reptil">Reptil</option>
                        <option value="Bird">Bird</option>
                        <option value="Rodent">Rodent</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Gender</td>
                <td>
                    <input type="radio" name="pet_gender_200038" value="Male" required>Male
                    <input type="radio" name="pet_gender_200038" value="Female" required>Female
                </td>
            </tr>
            <tr>
                <td>Age</td>
                <td>
                    <input type="number" name="pet_age_200038" required>
                </td>
            </tr>
            <tr>
                <td>Owner</td>
                <td>
                    <input type="text" name="pet_owner_200038"required>
                </td>
            </tr>
            <tr>
                <td>Address</td>
                <td>
                    <textarea name="pet_address_200038" id="" cols="30" rows="10" required></textarea>
                </td>
            </tr>
            <tr>
                <td>Phone</td>
                <td>
                    <input type="text" name="pet_phone_200038" required>
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
    </div>
    <br>
    <button class="tombol"><a href="read_pet_200038.php">Cancel</a></button>
</body>
</html>