<?php
require_once("header.php");
?>
<html>
	<head>
		<link rel="stylesheet" href="styles.css">
	</head>
	<body>
		<div id='kitchenBackground'>
		</div>
		<div id='loginForm'>
			<form action="/action_page.php">
 				<label for="username">Username:</label>
 				<input type="text" id="username" name="username"><br><br>
 				<label for="password">Password:</label>
 				<input type="text" id="password" name="password"><br><br>
				<input type="submit" id="submit" name="submit">
			</form>
		</div>
	</body>
</html>
<?php
require_once("footer.php");
?>