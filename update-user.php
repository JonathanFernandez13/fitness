
<?php
// Je veux modifier les donnés d'un utilisateur grace à mon boutton qui se trouve dans sa ligne
    // 1-A) JE VEUX RECUPERER un paramètre
        // a) stocker mon paramètre dans une variable
        $id = $_POST["id"]; 
         $nom = $_POST["nom"]; 
         $prenom = $_POST["prenom"]; 
         $email = $_POST["email"]; 
//         // 1-B) Base de donnée
//             // a) Me connecter à la base de donnée
            $link = mysqli_connect("localhost", "root", "", "contact", );
//             // b) Crée ma requete de modification par rapport à mon id que j'aurai en paramètre ($_GET)
//             //$sqli = "DELETE FROM user WHERE id= $id";
             $sqli ="UPDATE contact SET nom = '$nom', prenom = '$prenom', email = '$email'  WHERE id= $id";
//             // c) Exécuté ma requete de suppression
            if(mysqli_query($link,$sqli)){
//     // 2) PHP redirection 
//         // a) j'ai besoin de faire un header lorsque c'est good
                header("location: users.php?up=1") ;
             }else{
//         // b) j'ai besoin de faire un header lorsque c'est not good
         header("location: users.php?up=0");
//      
       }
    
 ?>