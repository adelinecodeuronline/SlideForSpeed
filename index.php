<?php
require_once './gestion/config.php';
$req = $db->prepare('SELECT * FROM slide');
$req->execute();
$slide = $req->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dongle:wght@300;400&display=swap" rel="stylesheet"> 
   
    <link rel="stylesheet" href="./css/style.css">
    <script src="./js/script.js" defer></script>
   
    <title>Slide for speed |</title>
</head>


<body>
    <div class="slider">
      
        <?php foreach ($slide as $s):  ?> 
        <div class="slide">
            <div class="shape-gche"></div>
            <div class="global-shapes"><!---formes à droite-->
                <div class="header-slide">
                    <img class="cover" src="./upload/<?php echo $s['visuel'] ?>">
                    <h1 class="titre"><?php echo $s['titre'] ?></h1>
                </div>

                <div class="content">
                    <p class="txt-content"><?php echo $s['description'] ?></p>
                </div>
            </div>
        </div>
        <?php endforeach; ?>    

    </div>  
</body>
</html>