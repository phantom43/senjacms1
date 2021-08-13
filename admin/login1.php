<style type="text/css">
	@import 'http://localhost/mycmss/style.css';
</style>
<?php
session_start();
require 'koneksi.php';
if (isset($_POST["login"])) {
	$username = $_POST["username"];
	$password = $_POST["password"];

	$result = mysqli_query($db_konek, "SELECT * FROM user WHERE username = '$username'");
	if (mysqli_num_rows($result) ===  1 ) {
		$row = mysqli_fetch_assoc($result);
		if( password_verify($password, $row["password"]) ) {
			$_SESSION['login'] = true;
			header("Location: buat.php");
		}
	}

}
$error = true;
?>

<!DOCTYPE html>
<html>
<head>
	<title>login dulu bosq</title>
</head>
<body>
	<?php if (isset($error)) :?>
	<script type="text/javascript">
		alert("username/password SALAH..!")
	</script>
	<div class="body">
		<div class="focus">
	<?php endif ;?>
	<form action="" method="post">
		<h1>Login panel;	</h1>
		<ul>
			<li>
				username :<input type="text" name="username" autofocus>
			</li>
			<li>
				password :<input type="password" name="password">
			</li>
			<button type="submit" name="login">login</button>
		</ul>
	</form>
</body>
</html>
</div>
</div>