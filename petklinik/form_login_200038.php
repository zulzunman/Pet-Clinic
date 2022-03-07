<!DOCTYPE html>
<html lang="en">
<head>
    <title>Pet Klinik Zul</title>
    <link rel="stylesheet" href="desain.css">
    <style>
        body{
            background-image: url(https://media.istockphoto.com/photos/animal-hospital-examination-room-picture-id1310040332?k=20&m=1310040332&s=612x612&w=0&h=x88pMepm-qaPqPVwXlhKoEhsAkXgs_KuK6wulIevjcs=);
            background-repeat: no-repeat;
            background-size: cover;
        }
        #dalam{
            text-align: center;
            background-color: darkorange;
            border-radius: 25px;
            padding: 10px;
        }
    </style>
</head>
<body>
    <div class="bungkus">
    <div id="dalam">
    <h1>Pet Klinik Zul</h1><hr>
    <h3>Form Login</h3>
    </div>
    <div class="login">
    <form method="post" action="login_200038.php">
        <table>
            <tr>
                <td>Username</td>
                <td>: <input type="text" name="username_200038" required></td>
            </tr>
            <tr>
                <td>Password</td>
                <td>: <input type="password" name="password_200038" id="pass" required></td>
            </tr>
            <tr>
                <td>&nbsp;</td>
                <td>&nbsp;<input type="checkbox" onclick="show()">Show Password</td>
            </tr>
            <tr>
                <td>&nbsp;</td>
                <td>&nbsp;
                    <input type="submit" name="login" value="LOGIN" />
                    <input type="reset" name="reser" value="RESET" />
                </td>
            </tr>
        </table>
    </form>
    </div>
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