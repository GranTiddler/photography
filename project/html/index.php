<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title>Log in</title>
</head>

<body>
	<div class="login">
		<h1>Login</h1>
		<form action="/includes/authenticate-script.php" method="post">
			<label for="username">
				<i class="fas fa-user"></i>
			</label>
			<input type="text" name="username" placeholder="Username" id="username" required>

			<input type="password" name="password" placeholder="Password" id="password" required>
			<input type="submit" value="Login">
		</form>
	</div>
</body>

</html>