<?php
session_start();
if(!isset($_SESSION['login'])) {
    echo "<script>
    alert('Please login first !'); 
    window.location.replace('form_login_200038.php');
    </script>";
}
if($_SESSION['usertype'] != 'Manager') {
    echo "<script>
    alert('Access forbiden !'); 
    window.location.replace('index.php');
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
    <div class="posisi"><h1>User Zul</h1></div><br>
    <img src="https://ptsp.bmkg.go.id/resources/frontend/images/user.png" id="gambar" alt="">
    <div id="form">
    <center><h3>Form Edit User</h3></center><hr>
    <?php
        include "connection_200038.php";

        $query="SELECT * FROM users_200038 WHERE userid_200038='$_GET[id]'";

        $ser=mysqli_query($db_connection,$query);

        $data=mysqli_fetch_assoc($ser);
    ?>
    <form method="post" action="update_user_200038.php">
        <table>
            <tr>
                <td>Username</td>
                <td>
                    <input type="text" name="username_200038" value="<?=$data['username_200038']?>" required>
                </td>
            </tr>
            <tr>
                <td>Password</td>
                <td>
                    <input type="text" name="password_200038" value="<?=$data['password_200038']?>" required>
                </td>
            </tr>
            <tr>
                <td>Usertype</td>
                <td>
                    <input type="radio" name="usertype_200038" value="Staff" <?=($data['usertype_200038']=='Staff')?'checked':'';?> required>Staff
                    <input type="radio" name="usertype_200038" value="Manager" <?=($data['usertype_200038']=='Manager')?'checked':'';?> required>Manager
                </td>
            </tr>
            <tr>
                <td>Full Name</td>
                <td>
                    <input type="text" name="fullname_200038" value="<?=$data['fullname_200038']?>" required>
                </td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input type="submit" name="save" value="SAVE">
                    <input type="reset" name="reset" value="RESET">
                    <input type="hidden" name="userid_200038" value="<?=$data['userid_200038']?>">
                </td>
            </tr>
        </table>
    </form>
    </div><br>
    <button class="tombol"><a href="read_user_200038.php">Cancel</a></button>
</body>
</html>