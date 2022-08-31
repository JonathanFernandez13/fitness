<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!--  tableaux php -->
    <?php
       $Tableaux = 
       [ 
        'Apprenants' => 'Simplon',
            [
                'Identiter' => 'Eleves',
                    [
                        'Prenom' => 'Jonahtan',
                        'Nom' => 'Fernandez'
                    ],
                    [
                        'Prenom' => 'Mohamed',
                        'Nom' => 'LeBG'
                    ],
                    [
                        'Prenom' => 'FAFA',
                        'Nom' => 'Du13'
                    ],
                    [
                        'Prenom' => 'Sophie',
                        'Nom' => 'Sanchez'
                    ],
            ]
        ];
        foreach ($Tableaux [0][0] as $key => $value) {
            echo "$key: $value <br>";
        };
        
    ?>


<!--  exo php sur explode(exploser une string en tableau) sur implonde(recoler une chaine de caractere exploser)
  str-replace(permet de remplacer un bout de ma chaine de caractere ou un mot)
var_dump est egale au console log de js tres pratique pour debug
supervariable $_SERVER -->
<?php $text= "je fais du php et je comprend ce que je code!!!" ?>
<?php $text = explode(" ", $text); ?>
<?php $text = str_replace("php", "JS",$text) ?>
<?php $text = implode(" ", $text) ?>
<?php var_dump($text) ?>
<?php var_dump($_SERVER) ?>



<!-- utilisation de l'operateur de coalescance  -->
<title> <?php echo $title ?? "FITNESS" ?> </title> 
</body>
</html>




<!-- Function -->
<?php function adition($num_one, $num_two) 
{
    return $num_one + $num_two;
};
echo adition(23, 2); 
?>



<br>





<?php $nom = "Fernandez " ?>
<?php $prenom = " Jonathan" ?>
<?php function identiter($nom, $prenom) 
{
   return $nom . $prenom;
};
echo identiter($nom, $prenom);
?>






<?php $name_url = "je suis Jonathan"; ?>
<?php $name_url = explode(" ", $name_url); ?>
<?php $name_url = $name_url[2]; ?>
<?php var_dump ($name_url); ?>





<?php $age= 18 ;?>
<?php function majeur_ou_mineur ($age)
    {
        if ( $age > 18) {
            echo 'tu es majeur!';
        }elseif ($age == 18) {
            echo 'tu es majeur de justesse!!!';
        }else{
            echo 'tu es mineur!';
        }
    }; 
?>
<?php echo majeur_ou_mineur($age); ?>



<br>
 


<?php $days= 'Jeudi' ;?>
<?php function semaine($days)
    {
        switch ($days) {
            case 'Lundi': 
                echo ' c\'est LUNDI!';
                break;
            case 'Mardi':
                echo 'c\'est MARDI!';
                break;
            case 'Mercredi':
                echo 'c\'est MERCREDI!';
                break;
            case 'Jeudi':
                echo 'c\'est JEUDI!';
                break;
            case 'Vendredi':
                echo 'c\'est VENDREDI!';
                break;
            case 'Samedi':
                echo 'c\'est SAMEDI!';
                break;
            case 'Dimanche':
                echo 'c\'est DIMANCHE!';
                break;
           #  default:  (default est un cas special par rapport a case il est utilisé si tout les autres on echouer) 
        }
    }; 
?>
<?php echo semaine($days); ?>


<?php echo "on est le " . date("d/m/Y") . " il est " . date("G:i:s"); ?> 



