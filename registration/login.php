<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="style.css" />
</head>
<body>
<?php
// j'inclu mon fichier config qui contient mon $link qui n'est autre que ma connection a ma BDD
require('config.php');
// je demarre ma session
session_start();

if (isset($email)){
// je declare mes variable
$email = $_POST['email'];
$password = $_POST['password'];
// $hashed_password me permet de  crypter mon password
$hashed_password = password_hash($password, PASSWORD_DEFAULT);
// je declare ma requete dans une variable $sqli
$sqli = "SELECT * FROM `user` WHERE mail ='$email'and password ='$password'";
// j'exdecute  ma requete sql
$result = mysqli_query($link,$sqli) /*or die(mysql_error())*/;
// mysqli_num_rows me permet de retourné le nombre de ligne de mon resultat mysql
$rows = mysqli_num_rows($result);
  if($rows==1){
      $_SESSION['email'] = $email;
      header("Location: users.php");
  }else{
    $message = "Email ou Password est incorrect.";
  }
}
?>
<form class="box" action="login.php" method="POST" name="login">
<h1 class="box-title">Connexion</h1>
<input type="text" class="box-input" name="email" placeholder="Email">
<input type="password" class="box-input" name="password" placeholder="Password">
<input type="submit" value="Connexion " name="submit" class="box-button">
<p class="box-register">Vous êtes nouveau ici? <a href="register.php">S'inscrire</a></p>
<?php if (! empty($message)) { ?>
    <p class="errorMessage"><?php echo $message; ?></p>
<?php } ?>
</form>
</body>
</html>