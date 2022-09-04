<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.css" />
</head>
<body>
<?php
require('config.php');


$email = $_POST["email"];
$password = $_POST['password'];
$hashed_password = password_hash($password, PASSWORD_DEFAULT);
var_dump($hashed_password);

$sqli = "INSERT INTO user (`mail`, `password`) VALUES ('$email',  '$hashed_password')";

var_dump($_POST);

if ( empty($email) || empty($password)){
    header("location:register-form.php?add=0");
}else{
    if($result = mysqli_query($link, $sqli)){
        header("location:register-form.php?add=1");
        echo "<div class='sucess'>
        <h3>Vous êtes inscrit avec succès.</h3>
        <p>Cliquez ici pour vous <a href='login.php'>connecter</a></p>
  </div>";
    }else{

    }
}
    
?>