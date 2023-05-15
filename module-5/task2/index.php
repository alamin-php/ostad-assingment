<?php include_once('person.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Person Info</title>
</head>

<body>
    <h2>Person Informations: </h2>
    <?php
        $person = new Person();
        $person->setName('Al-Amin');
        $person->setEmail('alamin.php100@gmail.com');
        echo "Person name is: ".$person->getName()."<br><br>";
        echo "Person email is: ".$person->getEmail();
    ?>
</body>

</html>