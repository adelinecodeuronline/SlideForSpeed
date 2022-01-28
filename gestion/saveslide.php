<?php

require_once 'config.php';

$get_id=$_REQUEST['id'];

$titre = $_POST['titre'];
$description = $_POST['description'];
$tmpName = $_FILES['fichier']['tmp_name'];
$name = $_FILES['fichier']['name'];
$error = $_FILES['fichier']['error']; 
$upload_dir='../upload/';

$uniqueName = uniqid('', true);        
$extension = pathinfo($name, PATHINFO_EXTENSION);
$unique_file = $uniqueName.".".$extension;
//unlink($upload_dir.$name);
move_uploaded_file($tmpName, '../upload/'.$unique_file);

$result = $db->prepare("UPDATE slide SET titre ='$titre', visuel = '$unique_file', description ='$description' WHERE id = '$get_id' ");
$result->execute();
header('Location: gestionslides.php');
