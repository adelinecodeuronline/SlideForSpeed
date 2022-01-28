<?php
require_once 'config.php';

 $getId = $_GET['id']; 
 $filePath = '../upload/';
 $name = $_FILES['fichier']['name'];
 $tmpName = $_FILES['fichier']['tmp_name'];

if(isset($_GET['id'])) {
  $requete = $db->prepare("DELETE FROM slide WHERE id=$getId"); 
  $requete->execute();
  unlink($filePath.$name);   
   
  header('Location: gestionslides.php');

}