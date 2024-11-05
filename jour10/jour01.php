<?php

$username="root";
$password="";
$database=new PDO("mysql:host=localhost;dbname=jour09", $username, $password);

$query=$database->query("SELECT*FROM etudiants")
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<thead> 
    <tr> 
        <th> Id </th>
        <th> Prenom </th>
        <th> Nom </th>
        <th> Naissance </th>
        <th> Sexe </th>
        <th> Email </th> 
    </tr>
</thead> 
<tbody>
        <td><?= echo $ligne "Id"?></td>
        <td><?= echo $ligne "Prenom"?></td>
        <td><?= echo $ligne "Nom"?></td>
        <td><?= echo $ligne "Naissance"?></td>
        <td><?= echo $ligne "Sexe"?></td>
        <td><?= echo $ligne "Email"?></td>
</tbody>
    <tb>

</body>
</html>