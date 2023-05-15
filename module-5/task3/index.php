<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Person Information</title>
    <style>
        .container{
            width: 500px;
            margin: 0 auto;
        }
    </style>
</head>

<body>
    <div class="container">
        <form action="person.php" method="post">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" placeholder="Enter name" required><br>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" placeholder="Enter email" required><br>
            <input type="submit" value="Submit">
        </form>
    </div>
</body>

</html>