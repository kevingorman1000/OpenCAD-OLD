<?php 
	session_start();

?>
<!DOCTYPE html>
<html>
<head>
	<title>OpenCAD Installer</title>
	<link rel="stylesheet" href="../css/installer.css">
</head>
<body>
	<?php 
		echo '<h1>Database Install</h1>
		<form class="installer-Form" action="db.php" method="get">
		<h2>Database Host</h5>
		<input type="text" placeholder="Host" name="dbHost" required>
		<h2>Database Username</h5>
		<input type="text" placeholder="Username" name="dbUser" required>
		<h2>Database Password</h5>
		<input type="text" placeholder="Password" name="dbPassword">
		<h2>Database Name</h5>
		<input type="text" placeholder="Name" name="dbName" required>
		<input type="submit" value="Submit">
		</form>';
		echo '<h1>Configuration Editor</h1>
		<form class="installer-Form" action="config.php" method="get">
		<h2>Community Name</h5>
		<input type="text" placeholder="Community Name" name="commName" required>
		<h2>CAD URL(Do NOT include http/https!)</h5>
		<input type="text" placeholder="Community URL" name="baseUrl" required>
		<input type="submit" value="Submit">
		</form>';


	?>


</body>
</html>

