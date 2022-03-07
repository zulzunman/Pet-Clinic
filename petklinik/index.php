<?php 
    session_start();
    if(!isset($_SESSION['login'])) {
	    echo "<script>alert('Please Login First !');window.location.replace('form_login_200038.php');</script>";
}
?>

<!DOCTYPE html>
<head>
    <title>Pet Klinik Zul</title>
    <link rel="stylesheet" href="desain.css">
    <style>
        
    </style>
</head>
<body>
    <nav>
		<h2 class="judul">Pet Klinik Zul</h2>
		<div>
			<table>
				<tr>
					<td></td>
					<td></td>
					<td></td>
					<td>
                        <a href="user_photo_200038.php"><img src="https://help.classter.com/wp-content/uploads/2020/02/admin-icon.png" alt="" id="png"></a>
                    </td>
					<td>
                        <a href="change_password_200038.php"><img src="https://upload.wikimedia.org/wikipedia/commons/1/13/Crystal_Project_Password.png" alt="" id="png"></a>
                    </td>
					<td>
                        <a href="logout_200038.php"><img src="http://www.clker.com/cliparts/K/e/8/U/j/6/power-red-with-black-icon-md.png" alt="" id="png"></a>
                    </td>
				</tr>
			</table>
		</div>
	</nav>
	<br>
    <div class="menu">
        <button style="padding: 10px 35px 10px 35px"><a href="read_pet_200038.php">Pet List</a></button><br><br><br>
        <button style="padding: 10px 22px 10px 22px"><a href="read_doctor_200038.php">Doctor List</a></button><br><br><br>

    <?php if($_SESSION['usertype']=='Manager') { ?>
        <button style="padding: 10px 30px 10px 30px"><a href="read_user_200038.php">User List</a></button><br><br><br>
        <button style="padding: 10px 4px 10px 4px"><a href="report.php">Monthly Report</a> <?php } ?></button><br>
    </div>
    <div class="utama">
    <h1>Welcome <?=$_SESSION['fullname'];?>, you're login as <?=$_SESSION['usertype'];?></h1><br><br>
    <?php
		include "connection_200038.php";
		$query = "SELECT * FROM users_200038 WHERE userid_200038= '$_SESSION[userid]'";
		$user = mysqli_query($db_connection, $query); 
		$data = mysqli_fetch_assoc($user);
	?>
    <img src="uploads/users/<?= $data['user_photo_200038']; ?>">
    </div>
</body>
</html>