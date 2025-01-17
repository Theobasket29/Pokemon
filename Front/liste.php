<?php
include '../Back/connexion.php';

// Retrieve data from the database
$sql = "SELECT nom, complement, pv, type, collection, annee, langue, pays, rarete, prix, numero, evolution FROM pokemon";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table border='1'>
            <tr>
                <th>Nom</th>
                <th>Complément</th>
                <th>PV</th>
                <th>Type</th>
                <th>Collection</th>
                <th>Année</th>
                <th>Langue</th>
                <th>Pays</th>
                <th>Rareté</th>
                <th>Prix</th>
                <th>Numéro</th>
                <th>Évolution</th>
            </tr>";
    // Output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>" . $row["nom"]. "</td>
                <td>" . $row["complement"]. "</td>
                <td>" . $row["pv"]. "</td>
                <td>" . $row["type"]. "</td>
                <td>" . $row["collection"]. "</td>
                <td>" . $row["annee"]. "</td>
                <td>" . $row["langue"]. "</td>
                <td>" . $row["pays"]. "</td>
                <td>" . $row["rarete"]. "</td>
                <td>" . $row["prix"]. "</td>
                <td>" . $row["numero"]. "</td>
                <td>" . $row["evolution"]. "</td>
              </tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}
$conn->close();
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
</head>
<body>
</body>
</html>