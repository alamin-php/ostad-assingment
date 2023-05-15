<!-- Task 3: Superglobal Variables in PHP -->

<!-- Create a PHP script that retrieves the user's name and email from the HTML form in Task 1 using the $_POST superglobal variable. Create a new instance of the Person class and use the setName() and setEmail() methods to set the name and email properties based on the form data. Use the getName() and getEmail() methods to display the properties on the webpage. -->

<?php
class Person
{
    public $name;
    public $email;

    public function setName($name)
    {
        $this->name = $name;
    }
    public function getName()
    {
        return $this->name;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }
    public function getEmail()
    {
        return $this->email;
    }
}

// get user-input using super global variable
$name  = $_POST['name'];
$email = $_POST['email'];

// create person instance
$person = new Person();
$person->setName($name);
$person->setEmail($email);

// person information output 
echo "<h3>Person information: </h3>";
echo "Person name is: ".$person->getName()."<br>";
echo "Person email is: ".$person->getEmail();