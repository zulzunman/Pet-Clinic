<!DOCTYPE html>
<html lang="en">
<head>
    <title>Pet Klinik Zul</title>
</head>
<link rel="stylesheet" href="desain.css">
<body>
    <div class="posisi"><h1>Pet Klinik Zul</h1></div><br>
    <div id="form" style="margin:0 300px 0 300px">
    <center><h3>Change Password</h3></center><hr>
    <form method="post" action="update_password_200038.php">
        <table align="center">
            <tr>
                <td>New Password</td>
                <td>: <input type="password" name="new_password_200038" id="pass" required></td>
            </tr>
            <tr>
                <td>&nbsp;</td>
                <td>&nbsp;<input type="checkbox" onclick="show()">Show Password</td>
            </tr>
            <tr>
                <td>&nbsp;</td>
                <td>&nbsp;
                    <input type="submit" name="change" value="CHANGE" />
                    <input type="reset" name="reset" value="RESET" />
                </td>
            </tr>
        </table>
    </form>
    <button class="tombol"><a href="index.php">CANCEL</a></button>
    </div>
    <script>
        function show() {
            var x = document.getElementById("pass");
            if (x.type === "password") {
                x.type = "text";
            } else {
                x.type = "password";
            }
        }
    </script>
</body>
</html>