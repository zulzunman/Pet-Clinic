<?php
		session_start();
		//call connection
		include "connection_200038.php";
		
		//query select
		$query = "SELECT * FROM users_200038 WHERE userid_200038= '$_SESSION[userid]'";
		
		//run query
		$user=mysqli_query($db_connection,$query);
		
		//extract data
		$data=mysqli_fetch_assoc($user);
	?>
<!doctype html>
<html>
<head>
    <title>Pet Klinik Zul</title>
</head>
<link rel="stylesheet" href="desain.css">
<body>
<body>
    <div class="posisi"><h1>Pet Klinik Zul</h1></div><br>
    <div id="form" style="margin: 0 300px 0 300px;">
    <center><h3>User Change Photo</h3></center><hr>
		<form method="POST" action="user_upload_200038.php" enctype="multipart/form-data">
        <table align="center">
            <tr>
                <td></td>
                <td><img src="uploads/users/<?= $data['user_photo_200038'] ?>" width="150"></td>
            </tr>
            <tr>
                <td>new photo</td>
                <td>: <input type="file" name="new_photo_200038" required></td>
            </tr>
            <tr>
                <td>&nbsp;</td>
                <td>&nbsp;
                    <input type="submit" name="upload" value="upload">
                    <input type="hidden" name="user_photo_200038" value="<?= $data['user_photo_200038'] ?>" />
                    <input type="hidden" name="userid_200038" value="<?= $data['userid_200038'] ?>" />
                </td>
            </tr>
        </table>
    </form>
    <button class="tombol"><a href="index.php">CANCEL</a></button>
    </div>
</body>
</html>