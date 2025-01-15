<?php

include '../Back/connexion.php';

$nom = $_POST['nom'];
$complement = isset($_POST['comp']) ? implode(',', $_POST['comp']) : '';
$pv = $_POST['pv'];
$type = $_POST['type'];
$collection = $_POST['collec'];
$annee = $_POST['date'];
$langue = $_POST['lang'];
$pays = $_POST['pays'];
$rarete = $_POST['rare'];
$prix = $_POST['prix'];
$numero = $_POST['num'];
$evolution = $_POST['evo'];

$sql = $conn->prepare("INSERT INTO pokemon (nom, complement, pv, type, collection, annee, langue, pays, rarete, prix, numero, evolution) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");

// Associer les paramètres
$sql->bind_param("ssisssssdsis", $nom, $complement, $pv, $type, $collection, $annee, $langue, $pays, $rarete, $prix, $numero, $evo);

if ($sql->execute()) {
    header('Location: ../index.php');
    exit();
} else {
    echo "Erreur: " . $sql->error;
}

$sql->close();
$conn->close();
?>