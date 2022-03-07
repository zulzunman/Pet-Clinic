<!DOCTYPE html>
<html lang="en">
<head>
    <title>Pet Klinik Zul</title>
</head>
<link rel="stylesheet" href="desain.css">
<body>
    <div class="posisi">
        <h1>Pet Klinik Zul</h1>
    </div><br>
    <div id="form" style="margin: 0 300px 0 300px">
    <center><h3>Change Pet Photo</h3></center><hr>
    <?php
        include "connection_200038.php";

        $query="SELECT * FROM pets_200038 WHERE pet_id_200038='$_GET[id]'";

        $ser=mysqli_query($db_connection,$query);

        $data=mysqli_fetch_assoc($ser);
    ?>
    <form method="post" action="pet_upload_200038.php" enctype="multipart/form-data">
        <table align="center">
            <tr>
                <td></td>
                <td>
                    <img src="uploads/pets/<?php echo $data['pet_photo_200038']; ?>" width="150" alt="">
                </td>
            </tr>
            <tr>
                <td>New Photo</td>
                <td>
                     : <input type="file" name="new_photo_200038" required />
                </td>
            </tr>
            <tr>
                <td>&nbsp;</td>
                <td>&nbsp;
                    <input type="submit" name="upload" value="UPLOAD" />
                    <input type="hidden" name="pet_photo_200038" value="<?=$data['pet_photo_200038']?>" />
                    <input type="hidden" name="pet_id_200038" value="<?=$data['pet_id_200038']?>" />
                </td>
            </tr>
        </table>
    </form>
    <button class="tombol" style="text-align: center"><a href="read_pet_200038.php">Cancel</a></button>
    </div><br>
</body>
</html>