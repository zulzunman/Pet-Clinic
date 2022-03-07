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
<html>
<head>
    <title>Pet Klinik Zul</title>
</head>
<link rel="stylesheet" href="desain.css">
<body>
    <div class="posisi"><h1>User Zul</h1></div><br>
    <div id="tabel">
    <h3>User List</h3>
    <button class="tombol"><a href="add_user_200038.php">Add New User</a></button>
    <button class="tombol"><a href="index.php">Back to Home</a></button><br><br>
    <table align="center" bgcolor="aqua" border = "1">
        <tr>
            <th>User Id</th>
            <th>Username</th>
            <th>Usertype</th>
            <th>Fullname</th>
            <th colspan='3'>Action</th>
        </tr>
        <?php
        include "connection_200038.php";
        $query = "SELECT * FROM users_200038";
        $ser = mysqli_query($db_connection, $query);

        $i=1;
        foreach ($ser as $data) :
        ?>
        <tr>
            <td><?= $i++; ?></td>
            <td>
                <?= $data["username_200038"]; ?>
            </td>
            <td><?= $data["usertype_200038"]; ?></td>
            <td><?= $data["fullname_200038"]; ?></td>
            <td><a href="edit_user_200038.php?id=<?=$data['userid_200038']?>">Edit User</a></td>
            <td><a href="delete_user_200038.php?userid=<?=$data['userid_200038']?>" onclick="return confirm('Are you sure?')">Delete User</a></td>
            <td><a href="reset_password_200038.php?userid=<?=$data['userid_200038']?>&type=<?= $data["usertype_200038"]; ?>" onclick="return confirm('Are you sure reset password?')">Reset Password</a></td>
        </tr>
        <?php endforeach; ?>
    </table>
    </div>
</body>
</html>