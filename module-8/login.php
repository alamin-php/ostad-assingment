<?php
session_start();

$valid_email = "alamin@gmail.com";
$valid_password = "12345";

if ( isset( $_POST['email'] ) && isset( $_POST['password'] ) ) {
    $email = $_POST['email'];
    $password = $_POST['password'];

        // Validate the form data
    if (empty($email) || empty($password)) {
        echo "<span style='color:red'>All fields are required.</span>";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "<span style='color:red'>Invalid email format.</span>";
    }else{
        if ( $email == $valid_email && $password == $valid_password ) {
            $_SESSION['firstname'] = "Al-Amin";
            header( "Location: welcome.php" );
            exit();
        } else {
            echo "<span style='color:red'>Invalid email or password.</span>";
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
</head>
<body>
    <h1>Login Page</h1>
    <form action="login.php" method="post">
        <label for="email">Email:</label>
        <input type="text" id="email" name="email">
        <br>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password">
        <br>
        <input type="submit" value="Login">
    </form>
<a href="index.php"> Go Home</a>
	<p>Note: for login email: alamin@gmail.com & password: 12345</p>
</body>
</html>