<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
    <?php
        include "connection_200038.php";
        $query = "SELECT * FROM pets_200038";
        $pets = mysqli_query($db_connection, $query);
    ?>
    <h1>Pets</h1>
    <table border="1" width="50%" align="center">
        <?php $i=0; ?>
        <tr>
            <?php foreach ($pets as $data) : ?>
            <td width="33%" align="center">
                <img src="1.PNG" width="200" height="200" alt=""><br>
                <strong><?=$data['pet_name_200038']?></strong><br>
                <a href="add_pet_200038.php">Buy</a>
            </td>
            <?php
            $i++;
            if($i==2) {
                echo '</tr><tr>';
                $i=0;
            }
            ?>
            <?php endforeach ?>
        </tr>
    </table>
</body>
</html>