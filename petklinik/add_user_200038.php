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
    <center><h3>Form Add User</h3></center><hr>
    <form method="post" action="create_user_200038.php">
        <table>
            <tr>
                <td>Username</td>
                <td>
                    <input type="text" name="username_200038" required>
                </td>
            </tr>
            <tr>
                <td>Password</td>
                <td>
                    <input type="password" name="password_200038" required>
                </td>
            <tr>
                <td>Usertype</td>
                <td>
                    <input type="radio" name="usertype_200038" value="Staff" required>Staff
                    <input type="radio" name="usertype_200038" value="Manager" required>Manager
                </td>
            </tr>
            <tr>
                <td>Full Name</td>
                <td>
                    <input type="text" name="fullname_200038" required>
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
    <button class="tombol"><a href="read_user_200038.php">Cancel</a></button>
</body>
</html>