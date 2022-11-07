<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
        integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
  <title>USERS</title>
</head>
<body>
<?php 
  $link = mysqli_connect("localhost", "root", "", "contact");
//$sqli = "SELECT CONCAT(nom, ' ', prenom) AS identiter FROM `user` WHERE nom = 'fernandez' AND prenom = 'jonathan'";
//$sqli = "SELECT nom, prenom,date_creation FROM user  WHERE nom IN ( 'Le-Roux', 'Monkey.D', 'Uzumaki')";
//$sqli = "SELECT * FROM user WHERE date_creation BETWEEN '2005-10-04' AND '2005-10-14'";
//$sqli = "SELECT nom, prenom, date_creation FROM user LIMIT 3";
//$sqli = "SELECT nom FROM user WHERE nom LIKE '%i'";
  $sqli = "SELECT * FROM contact";
  $results = mysqli_query($link, $sqli);
/*while ($row = mysqli_fetch_assoc($result)){
    var_dump($row);
}*/
?>
<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">NOM</th>
      <th scope="col">PRENOM</th>
      <th scope="col">MAIL</th>
    <th scope="col">DELETE</th>  
    </tr>
  </thead>
  <tbody class="">
  <?php foreach ($results as $result) : ?>
    <tr>
      <th scope="row"><?php echo $result["id"] ?> </th>
      <th scope="row"><a class="text-success" href="user?id=<?php echo $result["id"] ?>"><?php echo $result["nom"] ?></a></th>
      <th scope="row"><?php echo $result["prenom"] ?> </th>
      <th scope="row"><?php echo $result["email"] ?> </th>
      <td scope="col">
      <button class="btn btn-danger">
          <a  class="text-dark"href="delete-user?id= <?php echo $result["id"] ?>"> DELETE</a>
      </button>
</td>
<?php endforeach ?>
  </tbody>
  </body>
</html>