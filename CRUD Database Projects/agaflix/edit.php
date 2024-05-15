<?php
include("config.php");
include("firebaseRDB.php");

$db = new firebaseRDB($databaseURL);
$id = $_GET['id'];
$retrieve = $db->retrieve("film/$id");
$data = json_decode($retrieve, 1);


?>
<form method="post" action="action_edit.php">
   <table border="0" width="500">
      <tr>
         <td>Title</td>
         <td>:</td>
         <td><input type="text" name="title" value="<?php echo $data['title']?>"></td>
      </tr>
      <tr>
         <td>Thumbnail</td>
         <td>:</td>
         <td><input type="text" name="thumbnail" value="<?php echo $data['thumbnail']?>"></td>
      </tr>
      <tr>
         <td>Year</td>
         <td>:</td>
         <td><input type="text" name="year" value="<?php echo $data['year']?>"></td>
      </tr>
      <tr>
         <td>Rating</td>
         <td>:</td>
         <td><input type="text" name="rating" value="<?php echo $data['rating']?>"></td>
      </tr>
      <tr>
         <td>
            <input type="hidden" name="id" value="<?php echo $id?>">
            <input type="submit" value="SAVE">
         </td>
      </tr>
   </table>
</form>

