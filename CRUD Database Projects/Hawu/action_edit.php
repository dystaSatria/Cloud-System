<?php
include("config.php");
include("firebaseRDB.php");

$db = new firebaseRDB($databaseURL);
$id = $_POST['id'];
$update = $db->update("musik", $id, [
   "title"     => $_POST['title'],
   "thumbnail" => $_POST['thumbnail'],
   "year"      => $_POST['year'],
   "album"    => $_POST['album']
]);

header("Location: index.php");
exit; 
?>
