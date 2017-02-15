<?php
if (isset($_POST['submit'])) {
	require_once 'User.php';
	require_once 'login.php';

}
?>
<!DOCTYPE html>
<html>

<head>
<meta charset="UTF-8">
<title>Login</title>
</head>

<body>
<form action="" method="POST">
<h1>Login Usuário</h1>

<label>Email</label>
<input type="text" name="name">

<br>


<label>Password</label>
<input type="password" name="password">

<br>

<input type="submit" name="submit" value="login">

</form>

</body>
</html>