<?php 

$pdo = new PDO('mysql:host=localhost; dbname=animaux', 'visiteur', 'root');

function select() {
    global $pdo;
    $select = $pdo->query('SELECT * FROM animaux.chien');
    $select = $select->fetchAll(PDO::FETCH_OBJ);  
    return $select;
}

function add($name, $type) {
    global $pdo;
    $add = $pdo->prepare("INSERT INTO animaux.chien(`name`,`type`) VALUE(?,?)");
    $add->bindParam(1,$name);
    $add->bindParam(2,$type);
    $add->execute();
}

$animaux = select();

if(isset($_REQUEST['name']) && isset($_REQUEST['type'])) {
    $name = $_REQUEST['name'];
    $type = $_REQUEST['type'];   
    add($name, $type);
    $animaux = select();
}


?>
