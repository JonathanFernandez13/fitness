<?php
$link = mysqli_connect("localhost", "root", "", "contact");
//JE VERIFIE MA CONNECTION A MA BDD(base de donné)
if(mysqli_connect_errno()) {
    printf("Échec de la connexion : %s\n", mysqli_connect_error());
}

/*$nom =  $_POST["nom"];
$prenom = $_POST["prenom"];
$sql = "INSERT INTO utilisateurs ( nom, prenom ) VALUES ('$nom', '$prenom')";



 
if(empty($nom) || empty($prenom)) {
    echo "le formulaire est imcomplet";
    }else{
    $result = mysqli_query($link, $sql);
    echo "bienvenue";
    }*/
    

#while($row = mysqli_fetch_assoc($result)){
    #var_dump($row);
#}
    $name = $_POST["nom"];
    $prenom = $_POST["prenom"];
    $mail = $_POST["mail"];
    $tel = $_POST["tel"];
    $sujet = $_POST["sujet"];
    $message = $_POST["message"];

    $sqli = "INSERT INTO user (`nom`, `prenom`, `mail`, `tel`, `sujet`, `message`) VALUES ('$name', '$prenom', '$mail', '$tel', '$sujet', '$message')";

    var_dump($_POST);

    if (empty($name) || empty($prenom) || empty($mail) || empty($tel) || empty($sujet) || empty($message)){
        header("location:contact.php?add=0");
    }else{
        if($result = mysqli_query($link, $sqli)){
            header("location:contact.php?add=1");
        }else{

        }
    }
 #if (empty($_POST["nom"]) || empty($_POST["prenom"]) || empty($_POST["mail"]) || empty($_POST["tel"]) || empty($_POST["sujet"]) || empty($_POST["message"])){
    #echo "error message not sent!";
#}else{
    #echo "message sent with success";
#}*/
#?>