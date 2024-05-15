<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Firebase RDB CRUD</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <a href="add.php"><button>ADD DATA</button></a><br><br>
    <table border="1">
       <tr align="center" bgcolor="#dddddd">
          <th>Thumbnail</th>
          <th>Title</th>
          <th>Year</th>
          <th>Rating</th>
          <th colspan="2">Action</th>
       </tr>
       <?php
       include("config.php");
       include("firebaseRDB.php");

       $db = new firebaseRDB($databaseURL);
       
       $data = $db->retrieve("film");
       $data = json_decode($data, 1);
       
       if(is_array($data)){
          foreach($data as $id => $film){
             echo "<tr>
             <td><img src='{$film['thumbnail']}'></td>
             <td>{$film['title']}</td>
             <td>{$film['year']}</td>
             <td>{$film['rating']}</td>
             <td><a href='edit.php?id=$id'>EDIT</a></td>
             <td><a href='delete.php?id=$id'>DELETE</a></td>
          </tr>";
          }
       }
       ?>
    </table>
</body>
</html>
