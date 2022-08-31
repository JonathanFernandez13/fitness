<!doctype html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>  TABLEAU USER</title>
</head>
<body>
<?php 
$link = mysqli_connect("localhost", "root", "", "contact");
$id = $_GET["id"];
var_dump($_GET);
$sqli = "SELECT id, nom, prenom, mail, tel FROM user WHERE id = $id";
$result = mysqli_query($link, $sqli);
$row = mysqli_fetch_assoc($result);//ARRETE D'OUBLIER TON FETCH_ASSOC_ BORDEL!!!!!!!!!!!!!!!!!!!!!!!
?>
<?php if (isset($id) && $id === $row["id"]) : ?>
    <?php endif; ?>
<table class="table">
  <thead class="thead">
    <tr>
      <th scope="col">NOM</th>
      <th scope="col">PRENOM</th>
      <th scope="col">EMAIL</th>
      <th scope="col">TEL</th>
    </tr>
  </thead>
  <tbody>
    <tr>
    <th scope="row"><?php echo $row["nom"] ?></th>
    <th scope="row"><?php echo $row["prenom"] ?></th>
    <th scope="row"><?php echo $row["mail"] ?></th>
    <th scope="row"><?php echo $row["tel"] ?></th>
</td>
  </tbody> 
</table>
</body>
  </html>

<?php
   /* $link = mysqli_connect("localhost", "root", "", "contact");
    $sqli = "SELECT * FROM user";
    $results = mysqli_query($link, $sqli);
    ?>
    <table class="table">
        <thead>
            <tr>
                <!-- JE CREER LE NOMBRE DE COLONE QUE JE VEUT AVEC LE NOM DE CELLE CI -->
                <th scope="col">ID</th>
                <th scope="col">NOM</th>
                <th scope="col">PRENOM</th>
                <th scope="col">EMAIL</th>
            </tr>
        </thead>

        <?php if (isset($_GET["del"])) : ?>
            <?php if ($_GET["del"] == 1) : ?>
                <div style="background-color:green" class="alert alert-succes">L'utilisateur a été supprimé</div>
            <?php elseif ($_GET["del"] == 0) : ?>
                <div style="background-color:red" class="alert alert-danger">L'utilisateur n'a pas été supprimé</div>
            <?php endif; ?>
        <?php endif; ?>
        <?php foreach ($results as $result) : ?>
            <tbody>
                <tr>
                    <!-- JE CHOISIE LES VALEUR QUE JE SOUHAITE AFFICHER DANS LE TABLEAU -->
                    <th scope="row"><?php echo $result["id"] ?></th>
                    <th scope="row"><?php echo $result["nom"] ?></th>
                    <th scope="row"><?php echo $result["prenom"] ?></th>
                    <th scope="row"><?php echo $result["mail"] ?></th>
                </tr>
            </tbody>
        <?php endforeach; ?>

    </table> 
*/



  