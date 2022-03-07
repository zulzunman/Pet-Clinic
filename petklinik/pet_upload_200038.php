<?php
if(isset($_POST['upload'])) {
    include "connection_200038.php";

    $folder = 'uploads/pets/';
    if(move_uploaded_file($_FILES['new_photo_200038']['tmp_name'],$folder . $_FILES['new_photo_200038']['name'])) {

        $photo=$_FILES['new_photo_200038']['name'];

        $query="UPDATE pets_200038 SET pet_photo_200038='$photo' WHERE pet_id_200038='$_POST[pet_id_200038]'";

        $upload=mysqli_query($db_connection, $query);

        if($upload) {
            if($_POST['pet_photo_200038'] !== 'default.png') unlink($folder . $_POST['pet_photo_200038']);
            echo "<script>alert('Change photo successed !');window.location.replace('read_pet_200038.php');</script>";
        } else {
            echo "<script>alert('Change photo failed !');window.location.replace('pet_photo_200038.php?id=$_POST[pet_id_200038]');</script>";
        }
    } else {
        echo "<script>alert('Upload photo failed !');window.location.replace('pet_photo_200038.php?id=$_POST[pet_id_200038]');</script>";
    }
}
?>