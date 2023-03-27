<!doctype html>
<html lang="en">
https://speedysense.com/create-registration-login-system-php-mysql/
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>User Info</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <h3 class="text-center my-5">User Information</h3>
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
				echo "<span class='text-center text-danger my-3'>All fields are required.</span>";
			} elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
				echo "<span class='text-center text-danger my-3'>Invalid email format.</span>";
			} elseif ($password != $confirm_password) {
                echo "<span class='text-center text-danger my-3'>Password and confirm password do not match.</span>";
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
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title">Login</h5>
                </div>
                <div class="card-body">
                    <form action="process.php" method="post" enctype="multipart/form-data">
                        <div class="form-group mt-3">
                            <label for="">Email</label>
                            <input type="email" class="form-control" name="email" placeholder="Enter your email"
                                required>
                        </div>
                        <div class="form-group mt-3">
                            <label for="">Password</label>
                            <input type="password" class="form-control" name="password"
                                placeholder="Enter your password" required>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <a href="register.php" class="mt-3">I am not a member</a>
                            </div>
                            <div class="col-md-6">
                                <button type="submit" class="btn btn-success btn-sm mt-3" style="float:right">Login</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
        </script>
</body>
</html>