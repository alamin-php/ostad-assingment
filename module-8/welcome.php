
<?php
session_start();

if ( isset( $_SESSION['firstname'] ) ) {
    $firstname = $_SESSION['firstname'];
} else {
    header( "Location: index.html" );
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Welcome Page</title>
</head>
<body>
	<h1>Welcome, <?php echo $firstname; ?>!</h1>
	<p>You have successfully logged in.</p>
	<a href="logout.php">Logout</a>
</body>
</html>