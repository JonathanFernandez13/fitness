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
$sqli = "SELECT * FROM contact WHERE id = $id";
$result = mysqli_query($link, $sqli);
$row = mysqli_fetch_assoc($result);//ARRETE D'OUBLIER TON FETCH_ASSOC_ BORDEL!!!!!!!!!!!!!!!!!!!!!!!
?>
    <h1 class="text-center">Update User</h1>
        <form class="form_user mt-5" method="POST" action="update-user.php">
            <input type="hidden" name="id" value="<?php echo $row["id"]; ?>">
            <div class="form-group">
                <label for="nom">Nom</label>
                <input type="text" name="nom" class="form-control" value="<?php echo htmlspecialchars($row["nom"], ENT_QUOTES, 'UTF-8') ?>">
            </div>
            <div class="form-group">
                <label for=prenom">Prenom</label>
                <input type="text" name="prenom" class="form-control" value="<?php echo htmlspecialchars($row["prenom"], ENT_QUOTES, 'UTF-8') ?>">
            </div>
            <div class="form-group">
                <label for=tel">Telephone</label>
                <input type="number" name="tel" class="form-control" value="<?php echo htmlspecialchars($row["tel"], ENT_QUOTES, 'UTF-8') ?>">
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" class="form-control" value="<?php echo htmlspecialchars($row["email"], ENT_QUOTES, 'UTF-8') ?>">
            </div>

            <div class="form-group">
                <a href="users.php"><input type="button" value="Retour Liste" class="btn btn-primary"></a>
                <input type="submit" name="modifier" value="Modifier" class="btn btn-success">
            </div>
        </form>
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



  