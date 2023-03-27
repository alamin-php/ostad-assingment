<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Page</title>
</head>
<body>

<?php 
		// Check if the form has been submitted
		if ($_SERVER["REQUEST_METHOD"] == "POST") {
			// Define variables and set to empty values
			$firstname = $lastname = $email = $password = $confirm_password = "";

			// Retrieve data from the form and sanitize it
			$firstname = validate($_POST["firstname"]);
			$lastname = validate($_POST["lastname"]);
			$email = validate($_POST["email"]);
			$password = validate($_POST["password"]);
			$confirm_password = validate($_POST["confirm_password"]);

			// Validate the form data
			if (empty($firstname) || empty($lastname) || empty($email) || empty($password) || empty($confirm_password)) {
				echo "<span style='color:red'>All fields are required.</span>";
			} elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
				echo "<span style='color:red'>Invalid email format.</span>";
			} elseif ($password != $confirm_password) {
                echo "<span style='color:red'>Password and confirm password do not match.</span>";
			} else {
				// Redirect to confirmation page
				header("Location: confirmation.php");
				exit();
			}
		}

        // Sanitize form data function
        function validate($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }

?>
    <h1>Register Page</h1>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
        <label for="firstname">First name</label>
        <input type="text" id="firstname" name="firstname">
        <br>
        <label for="lastname">Last name</label>
        <input type="text" id="lastname" name="lastname">
        <br>
        <label for="email">Email</label>
        <input type="email" id="email" name="email">
        <br>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password">
        <br>
        <label for="confirm_password">Confirm password:</label>
        <input type="password" id="confirm_password" name="confirm_password">
        <br>
        <input type="submit" value="Register">
    </form>
    <a href="index.php"> Go Home</a>
</body>
</html>