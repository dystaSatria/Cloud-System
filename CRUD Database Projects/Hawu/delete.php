<?php
include("config.php");
include("firebaseRDB.php");

$db = new firebaseRDB($databaseURL);
$id = $_GET['id'];
if($id != ""){
   $delete = $db->delete("musik", $id);
   echo "data deleted";

   header("Location: index.php");
   exit; 
}
