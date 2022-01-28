<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="../css/ajout.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dongle:wght@300;400&display=swap" rel="stylesheet"> 

    <script src="../js/ajout.js"></script>

    <title>Ajouter des slides</title>
</head>


<body>

    <h1>Personnaliser une slide</h1>
    <p id="ada">Made with ΔDΔ</p>
    <div class="shape-gche">
        <a id="gestionnaire" href="gestionslides.php">⚡ Gérer les slides +</a>
        <p id="creation">Créer une slide</p>
        <form action="insertslide.php" method="post" enctype="multipart/form-data">
            <label>Titre</label>
            <input type="text" name="titre">

            <label>Visuel de la slide</label>
            <input id="file" type="file" name="fichier">
            <label for="file" id="file-button">Choisir un fichier</label>
            <div id="file-upload-filename"></div> 

            <label>Description</label>
            <textarea type="text" name="description"></textarea>             

            <button>// Créer</button>
        </form>
    </div>   
</body>
</html>