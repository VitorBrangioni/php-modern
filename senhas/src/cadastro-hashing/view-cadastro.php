<?php
if (isset($_POST['submit'])) {
	require_once 'User.php';
	require_once 'cadastro.php';
	
}
?>
<!DOCTYPE html>
<html>

<head>
<meta charset="UTF-8">
<title>Insert title here</title>
</head>

<body>
<form action="" method="POST">
<h1>Cadastro Usuário</h1>

<label>Name</label>
<input type="text" name="name">

<br>

<label>Email</label>
<input type="text" name="email">

<br>

<label>Password</label>
<input type="password" name="password">

<br>

<input type="submit" name="submit" value="cadastrar">

</form>

</body>
</html>