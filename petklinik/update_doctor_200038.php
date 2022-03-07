<?php
	if(isset($_POST['save']))	{ 
		include "connection_200038.php";
		
		$folder = 'uploads/doctors/';
		
		if(move_uploaded_file($_FILES['new_photo_200038']['tmp_name'], $folder . $_FILES['new_photo_200038']['name'])) {
			
			$photo=$_FILES['new_photo_200038']['name'];
			
			$query="UPDATE doctors_200038 SET doctor_photo_200038='$photo' WHERE doctor_id_200038='$_POST[doctor_id_200038]'";
		
			$update = mysqli_query($db_connection, $query);
            if($update) {
                if($_POST['doctor_photo_200038'] !== 'default.png') unlink($folder . $_POST['doctor_photo_200038']);
                echo "<script>alert('Change photo successed !');window.location.replace('read_doctor_200038.php');</script>";
            } else {
                echo "<script>alert('Change photo failed !');window.location.replace('edit_doctor_200038.php?id=$_POST[doctor_id_200038]');</script>";
            }
		}
	
			$query = "UPDATE doctors_200038 SET
					doctor_name_200038 = '$_POST[doctor_name_200038]',
					doctor_gender_200038 = '$_POST[doctor_gender_200038]',
					doctor_address_200038 = '$_POST[doctor_address_200038]',
					doctor_phone_200038 = '$_POST[doctor_phone_200038]'
					WHERE doctor_id_200038 = '$_POST[doctor_id_200038]';
					";
		
			$update = mysqli_query($db_connection, $query);
            if ($update){
				echo "<script> alert ('Update successfully!!');window.location.replace('read_doctor_200038.php'); </script>";
			} else {
				echo "<script> alert ('Update failed !!');window.location.replace('edit_doctor_200038.php?id=$_POST[doctor_id_200038]'); </script>";
			}
	}
?>
