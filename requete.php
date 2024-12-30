<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "pokemon";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

$nom = $_POST['nom'];
$complement = $_POST['comp'];
$pv = $_POST['pv'];
$type = $_POST['type'];
$collection = $_POST['collect'];
$annee = $_POST['date'];
$langue = $_POST['lang'];
$pays = $_POST['pays'];
$rarete = $_POST['rare'];
$prix = $_POST['prix'];
$numero = $_POST['num'];
$evolution = $_POST['evo'];

$sql = $conn->prepare("INSERT INTO pokemon (nom, complement, pv, type, collection, annee, langue, pays, rarete, prix, numero, evolution) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");

// Associer les paramètres
$sql->bind_param("ssisssssdsis", $nom, $complment, $pv, $type, $collection, $annee, $langue, $pays, $rarete, $prix, $numero, $evolution);

if ($sql->execute()) {
    echo "Nouveau Pokémon ajouté avec succès";
} else {
    echo "Erreur: " . $sql->error;
}

$sql->close();
$conn->close();
?>