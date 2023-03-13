<?php 
   if($_SERVER['REQUEST_METHOD'] == 'POST'){

    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $image = $_FILES['image'];

    $filename = $image['name'];
    $getext = explode('.',$filename);
    $ext = $getext[1];
    $fileExt = array('jpg', 'jpeg', 'png', 'gif');

    // input field validation 
    if(empty($name) || empty($email) || empty($password) || empty($image)){
        die('Field must not be empty');
    }

    // email validation

    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        die('Email must be valid!');
    }

    // check file type 
    if(!in_array($ext,$fileExt)){
        echo "Only JPG, JPEG, PNG, and GIF files are allowed.";
        return;
    }else{
        echo "Your file is valid!";
    }

    $upload_dir = "uploads/";
    $filename = $upload_dir . basename(uniqid().'-'.date('Y-m-d').'-'.$image["name"]);;

    if(!move_uploaded_file($image['tmp_name'],$filename)){
        exit('Error uploading file');
    }

    // csv file configurations 

    $data = array($name, $email, $filename);
    $file = fopen('./users.csv', 'a');

    if(fputcsv($file,$data) === false){
        exit('Error writing to file');
    }

    fclose($file);

    // start session data 

    session_start();
    setcookie('username', $name);

    header('Location: user_list.php');
    exit();


   }