<?php
session_start(); //start session
if(isset($_POST['login'])) { //check post variable
	include "connection_200038.php"; //call connection
	
	//make query based on username
	$query="SELECT * FROM users_200038 WHERE username_200038='$_POST[username_200038]'";
	
	//run query 
	$login=mysqli_query($db_connection,$query);
	
	if(mysqli_num_rows($login) > 0) {
		$user=mysqli_fetch_assoc($login);
		if(password_verify($_POST['password_200038'], $user['password_200038'])) {
			
		$_SESSION['login']=TRUE;
		$_SESSION['userid']=$user['userid_200038'];
		$_SESSION['username']=$user['username_200038'];
		$_SESSION['password']=$user['password_200038'];
		$_SESSION['usertype']=$user['usertype_200038'];
		$_SESSION['fullname']=$user['fullname_200038'];
		
		echo "<script>alert('login success !');window.location.replace('index.php');</script>";
		} else {
			echo "<script>alert('login failed, wrong password !');window.location.replace('form_login_200038.php');</script>";
		}
		}else {
			echo "<script>alert('login failed, user not found !');window.location.replace('form_login_200038.php');</script>";
	}
}
?>