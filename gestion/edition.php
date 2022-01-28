<?php
require_once 'config.php';
$ID=$_GET['id'];
$req = $db->prepare("SELECT * FROM slide where id='$ID'");
$req->execute();
$slide = $req->fetchAll(PDO::FETCH_ASSOC);
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

    <title>Editer une slide</title>
</head>


<body>

    <h1>Editer une slide</h1>   
    <div class="shape-gche">
        <a id="gestionnaire" href="gestionslides.php">⚡ Gérer les slides +</a>
        <p id="creation">Editer une slide</p>

        <?php foreach ($slide as $s):  ?>
        <form action="saveslide.php<?php echo '?id='.$s['id']; ?>" method="post" enctype="multipart/form-data">
            <label>Titre</label>
            <input type="text" name="titre" value="<?php echo $s['titre']; ?>">

            <label>Visuel de la slide</label>
            <input id="file" type="file" name="fichier" value="<?php echo $s['visuel']; ?>">
            <label for="file" id="file-button">Choisir un fichier</label>
            <div id="file-upload-filename"><?php echo $s['visuel']; ?></div> 

            <label>Description</label>
            <textarea type="text" name="description" ><?php echo $s['description']; ?></textarea>             

            <button>// Actualiser</button>
        </form>
        <?php endforeach; ?>  
    </div>   
</body>
</html>