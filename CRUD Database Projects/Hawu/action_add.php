<?php
include("config.php");
include("firebaseRDB.php");
$db = new firebaseRDB($databaseURL);

$insert = $db->insert("musik", [
   "title"     => $_POST['title'],
   "thumbnail" => $_POST['thumbnail'],
   "year"      => $_POST['year'],
   "album"    => $_POST['album']
]);

echo "data saved";
header("Location: index.php");
exit; 
