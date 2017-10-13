<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>KIRIMAN</title>
</head>
<body>
    <h1>Pendaftaran Berhasil</h1>
<form method="<POST>" action="kirim.php">
    <table>
        <tr>
            <td>Email</td><td>:</td><td><?php echo $POST["email"]; ?></td>
        </tr>
        <tr>
            <td>Full Name</td><td>:</td><td><?php echo $POST["fullname"]; ?></td>
        </tr>
        <tr>
            <td>Username</td><td>:</td><td><?php echo $POST["user"]; ?></td>
        </tr>
        <tr>
            <td>Password</td><td>:</td><td><?php echo $POST["pw"]; ?></td>
        </tr>
    </table>
</form>


</body>
</html>