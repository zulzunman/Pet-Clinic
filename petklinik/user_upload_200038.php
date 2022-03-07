<?php
if(isset($_POST['upload'])) {
	include "connection_200038.php";
	
	$folder = 'uploads/users/';
	if(move_uploaded_file($_FILES['new_photo_200038']['tmp_name'], $folder . $_FILES['new_photo_200038']['name'])) {
		
		$photo=$_FILES['new_photo_200038']['name'];
		$query="UPDATE users_200038 SET user_photo_200038='$photo' WHERE userid_200038='$_POST[userid_200038]'";
		$upload=mysqli_query($db_connection,$query);
		
		if($upload) {
			if($_POST['user_photo_200038'] !== 'default.png') unlink($folder . $_POST['user_photo_200038']);
			echo "<script>alert('Change Photo Success !');window.location.replace('index.php');</script>";
		} else {
			echo "<script>alert('Change Photo Failed !');window.location.replace('index.php?id=$_POST[userid_200038]');</script>";
		}
	} else {
		echo "<script>alert('Upload Photo Successed !');window.location.replace('index.php?id=$_POST[userid_200038]');</script>";
	}
}