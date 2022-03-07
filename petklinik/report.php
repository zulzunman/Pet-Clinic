<!DOCTYPE html>
<html lang="en">
<head>
    <title>Pet Klinik Zul</title>
</head>
<link rel="stylesheet" href="desain.css">
<body>
    <div class="posisi"><h1>Pet Klinik Zul</h1></div><br>
    <div id="form" style="margin: 0 300px 0 300px; text-align: center">
    <center><h3>Monthly Report</h3></center><hr>
    <?php
    $months = array('January','February','March','April','May','June','July','August','September','October','November','December');
    $year = date('Y');
    ?>
    <form>
        <p>Select
            <select name="month" required>
                <option value="">Month</option>
                <?php for($m=1;$m<=12;$m++) {?>
                <option value="<?=$m?>"><?=$months[$m-1]?></option>
                <?php } ?>
            </select>
            <select name="year" required>
                <option value="">Year</option>
                <?php for($y=0;$y<=2;$y++) {?>
                <option value="<?=$year-$y?>"><?=$year-$y?></option>
                <?php } ?>
            </select>
            <input type="submit" value="View report">
        </p>
    </form>
    <?php 
    if(isset($_GET['year'])) {
        include 'connection_200038.php';
        $query="SELECT m.mr_date_200038, d.doctor_name_200038, p.pet_name_200038, p.pet_owner_200038, m.cost_200038 FROM medicals_200038 AS m, doctors_200038 AS d, pets_200038 As p WHERE m.doctor_id_200038=d.doctor_id_200038 AND m.pet_id_200038=p.pet_id_200038 AND MONTH(m.mr_date_200038)='$_GET[month]' AND YEAR (m.mr_date_200038)='$_GET[year]'";
        $report=mysqli_query($db_connection,$query);

    ?>
    <h4>Report periode <?=$months[$_GET['month']-1]?> - <?=$_GET['year']?></h4>
    <table bgcolor="aqua" align="center" border="1">
        <tr>
            <th>No</th>
            <th>Date</th>
            <th>Doctor</th>
            <th>Pet</th>
            <th>Owner</th>
            <th>Pay ($)</th>
        </tr>
        <?php
        if(mysqli_num_rows($report) > 0) {
            $i=1; $total=0;
            foreach($report as $data) :
                $total=$total+$data['cost_200038'];
        ?>
        <tr>
            <td><?=$i++?></td>
            <td><?=$data['mr_date_200038']?></td>
            <td><?=$data['doctor_name_200038']?></td>
            <td><?=$data['pet_name_200038']?></td>
            <td><?=$data['pet_owner_200038']?></td>
            <td align="right"><?=$data['cost_200038']?></td>
        </tr>
        <?php endforeach; ?>
        <tr>
            <th colspan="7" align="right">Total : $ <?=$total?></th>
        </tr>
        <?php } else {?>
        <tr>
            <td colspan="7" align="right">No record !</td>
        </tr>
        <?php }?>
    </table>
    <br>
    <button class="tombol" style="font-size: 18px; color: skyblue; padding: 5px" onclick="window.print()">Print This Page</button>
    <?php }?>
    <button class="tombol"><a href="index.php">Back to HOME</a></button>
    </div>
</body>
</html>