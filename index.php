<!DOCTYPE html>
<html>


<!-- Header -->
<head>
	<!-- Title -->
	<title>	Command Center Login </title>
</head>
<!-- Body -->
<body>
<header>
	<?php include 'includes/header.php'; ?>
</header>

<!-- Login Form -->
<form action="" method="post">
	<?php echo "Please Login"; ?>
	<p><label class="field" for="name">Name: <br></label><input type="text" name="name"></p>
	<p><label class="field" for="password">Password:<br></label><input type="text" name="password"></p>
	<p><label>Remember me:</label><input type="checkbox" name="remember" value="true"></p>
	<p><input type="submit" name="submit" value="Log in" /></p>	
</form> <!-- login form -->

<?php
	$x = 1;
	if ($x == 1) {
		echo "Winner! it printed";
	}
?>
</body>
</html>