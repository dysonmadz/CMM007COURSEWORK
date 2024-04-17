<?php
   // check if an image file was uploaded
   if(isset($_FILES['images']) && $_FILES['images']['error'] == 0) {
      $name = $_FILES['images']['name'];
      $type = $_FILES['images']['type'];
      $data = file_get_contents($_FILES['images']['tmp_name']);
      // connect to the database
      $pdo = new PDO('mysql:host=localhost;dbname=mydb', 'username', 'password');
      // insert the image data into the database
      $stmt = $pdo->prepare("INSERT INTO images (name, type, data) VALUES (?, ?, ?)");
      $stmt->bindParam(1, $name);
      $stmt->bindParam(2, $type);
      $stmt->bindParam(3, $data);
      $stmt->execute();
   }
?>