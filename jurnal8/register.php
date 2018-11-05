<!DOCTYPE html>
<html>
<head>
	<title>ea</title>
</head>
<body>
	<form method="post">
		<center>
		<table>
			<tr>

				<td colspan="2"><center>REGISTRASI</center></td>
			</tr>
			<tr>
				<td>Username</td>
				<td><input type="text" name="username" required=""></td>
			</tr>
			<tr>
				<td>Password</td>
				<td><input type="Password" name="password" required="" minlength="6"></td>
			</tr>
			<tr>
				<td>Re-Password</td>
				<td><input type="password" name="repass" required=""></td>
			</tr>
			<tr>
				<td><input type="submit" name="submit" value="registrasi"></td>
			</tr>
		</table>
		</center>
	</form>
</body>
</html>

<?php
include_once 'koneksi.php';
	if (isset($_POST['submit'])) {
		$user = $_POST['username'];
		$pass = $_POST['password'];
		$repass = $_POST['repass'];
		$sql =  "INSERT INTO registrasi (username, pass)
				VALUES ('$user', '$pass')";

		if ($conn->query($sql) === TRUE) {
			if ($pass == $repass) {
				header("location: index.php");
			}else{
				header("location: register.php");
			}
		}else{
			echo $conn->error;
		}
	}
?>
