<?php
include(__DIR__ . "/assert/traitement/function.php");
include(__DIR__ . "/assert/connectionBD.php");

$db=connectionBD();
$departement=selectDepartement($db);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/page/bootstrap/css/bootstrap.min.css">
    <script src="/page/bootstrap/js/bootstrap.bundle.min.js" defer></script>
    <title>Document</title>
</head>
<body>
    
<table class="table table-striped-columns">
  <thead>
    <tr>
      <th scope="col">dept_no</th>
      <th scope="col">departement</th>
      <th scope="col">first name manager</th>
      <th scope="col">last name</th>
    </tr>
  </thead>
  <tbody>
      <?php
          while($donne=mysqli_fetch_assoc($departement)){
            echo'  <tr>
                      <th scope="row">'.$donne["dept_no"].'</th>
                      <td>'.$donne["dept_name"].'</td>
                      <td>'.$donne["first_name"].'</td>
                      <td>'.$donne["last_name"].'</td>
                  </tr>';
          }
      
      ?>
  </tbody>
</table>
</body>
</html>