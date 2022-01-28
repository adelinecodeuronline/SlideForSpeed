<?php

require_once 'config.php';

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

	<link rel="stylesheet" href="../css/gestion.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dongle:wght@300;400&display=swap" rel="stylesheet"> 

    <title>Gestion des slides</title>

</head>


<body>
<div id="container">
            <h1>Gérer les slides</h1>           
            <table class="table">
                <tbody>
                <?php foreach ($slide as $s):  ?>  
                        <tr>
                            <td><?php echo $s['titre'] ?></td>
                            <td><img class="preview" src="../upload/<?php echo $s['visuel'] ?>" alt=""></td>
                            <td><?php echo $s['description'] ?></td>									
							
							<td id="action">
                                <a id="edit" href="./edition.php?id=<?php echo htmlspecialchars($s['id']) ?>">Editer</a>
								<a id="delete" href="./deleteslide.php?id=<?php echo htmlspecialchars($s['id']) ?>">Supprimer</a>
							</td>
						</tr>
                <?php endforeach; ?>
                </tbody>
            </table>

			<a id="button" href="./index.php">// Nouvelle slide</a>            
</body>

</html>







