<?php require 'method.php' ?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Animaux</title>
</head>
<body>

<form action="index.php" method="post">
<label> Nom : 
    <input type="text" name="name">
    </label>
    <label> Race : 
    <input type="text" name="type">
    </label>
    <input type="submit" value="Ajouter un chien">
</form>

<ul>
<?php 
    foreach ($animaux as $key => $value) { ?>
<li>
    <p> <?= $value->name ?>
        <?= $value->type ?>
    <p> 
 </li>
    <?php } ?>
</ul>

</body>
</html>

