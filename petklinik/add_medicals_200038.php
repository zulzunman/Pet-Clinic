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
<html>
<head>
	<meta charset="utf-8">
	<title>Pet Klinik Zul</title>
</head>
<link rel="stylesheet" href="desain.css">
<body>
	<div class="posisi">
		<h1>Pet Klinik Zul</h1>
	</div><br>
	<img src="https://i.pinimg.com/originals/ca/da/f4/cadaf4b21567ef39e2a9187a9c498a30.png" id="gambar" alt="">
    <br>
	<div id="form">
	<center><h3>Form Add Medical</h3></center><hr>
	<?php
	
		// Call connection php mysql
		include "connection_200038.php";
		
		// Make query SELECT FROM WHERE
		$querypet="SELECT * FROM pets_200038 WHERE pet_id_200038='$_GET[pet_id]'";
		
		// Run query
		$pet=mysqli_query($db_connection,$querypet);
		
		// Extract data from query result
		$data1=mysqli_fetch_assoc($pet);
		
		$querydoc="SELECT * FROM doctors_200038";
		$doctors=mysqli_query($db_connection,$querydoc);

	?>
	<table>
		<tr>
			<td>Pet Id/Name</td>
			<td>: <?=$data1['pet_id_200038']?> / <?=$data1['pet_name_200038']?></td>
		</tr>
		<tr>
			<td>Pet Type/Gender/Age</td>
			<td>: <?=$data1['pet_type_200038']?> / <?=$data1['pet_gender_200038']?> / <?=$data1['pet_age_200038']?> month(s)</td>
		</tr>
		<tr>
			<td>Owner</td>
			<td>: <?=$data1['pet_owner_200038']?> / <?=$data1['pet_address_200038']?> / <?=$data1['pet_phone_200038']?>
			</td>
		</tr>
	</table>
	</div><br>
	<form method="post" action="create_medicals_200038.php">
		<table>
			<tr>
				<td>Doctor</td>
				<td>
					<select name="doctor_id_200038" required>
						<option value="">Choose</option>
						<?php foreach($doctors as $data2) : ?>
						<option value="<?=$data2['doctor_id_200038']?>"><?=$data2['doctor_name_200038']?></option>
						<?php endforeach;?>
					</select>
				</td>
			</tr>
			<tr>
				<td>Symptom</td>
				<td><textarea name="symptom_200038" required></textarea></td>
			</tr>
			<tr>
				<td>Diagnose</td>
				<td><textarea name="diagnose_200038" required></textarea></td>
			</tr>
			<tr>
				<td>Treatment</td>
				<td><textarea name="treatment_200038" required></textarea></td>
			</tr>
			<tr>
				<td>Cost ($)</td>
				<td>
					<input type="number" name="cost_200038" required>
				</td>
			</tr>
			<tr>
				<td></td>
				<td>
					<input type="submit" name="save" value="SAVE">
					<input type="reset" name="reset" value="RESET">
					<input type="hidden" name="pet_id_200038" value="<?=$data1['pet_id_200038']?>">
				</td>
			</tr>
		</table>
	</form><br>
	<button class="tombol"><a href ="medicals_200038.php?pet_id=<?=$data1['pet_id_200038']?>">CANCEL</a></button>
</body>
</html>