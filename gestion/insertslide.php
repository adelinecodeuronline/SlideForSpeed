<?php
require_once 'config.php';

if(isEmpty($_POST) && isset($_FILES['fichier'])) {
   
    $titre = $_POST['titre'];
    $description = $_POST['description'];
    //File variable
    $tmpName = $_FILES['fichier']['tmp_name'];
    $name = $_FILES['fichier']['name'];
    $error = $_FILES['fichier']['error'];   

    //Check error
    if($error == 0) {
        $uniqueName = uniqid('', true);
        
        $extension = pathinfo($name, PATHINFO_EXTENSION);
        
        //uniqid generation : 5f586bf96dcd38.73540086
        $unique_file = $uniqueName.".".$extension;
        
        //$unique_file = 5f586bf96dcd38.73540086.jpg
        move_uploaded_file($tmpName, '../upload/'.$unique_file);
       
        $req = $db->prepare('INSERT INTO slide (titre, visuel, description) VALUES (?, ?, ?)');
        $req->execute([$titre, $unique_file, $description]);
        $id = $db->lastInsertId(); 
       
        header("location: gestionslides.php");
        
    } else {
        echo "<script>alert('Huston, on a une erreur');</script>";       
    }

} else {
    echo "<script>alert('Tous les champs sont requis');</script>";
}

function isEmpty($values) {
    foreach($values as $value) {
        if(empty($value)) {
            return false;
        }
    }
    return true;
}
