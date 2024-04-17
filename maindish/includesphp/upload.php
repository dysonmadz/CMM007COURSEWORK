<!-- <?php
   // check if an image file was uploaded
   // if(isset($_FILES['images']) && $_FILES['images']['error'] == 0) {
   //    $name = $_FILES['images']['name'];
   //    $type = $_FILES['images']['type'];
   //    $data = file_get_contents($_FILES['images']['tmp_name']);
   //    // connect to the database
   //    $pdo = new PDO('mysql:host=localhost;dbname=mydb', 'username', 'password');
   //    // insert the image data into the database
   //    $stmt = $pdo->prepare("INSERT INTO images (name, type, data) VALUES (?, ?, ?)");
   //    $stmt->bindParam(1, $name);
   //    $stmt->bindParam(2, $type);
   //    $stmt->bindParam(3, $data);
   //    $stmt->execute();
   // }
?> -->

<?php

include('connection.php');



    if ($_SERVER["REQUEST_METHOD"] == "POST"){

      $recipe_name = $_POST['recipe_name'];
      $description = $_POST['description'];
      $details = $_POST['details'];
      $img = $_FILES['image']['name'];
      
        $sql = "INSERT INTO recipes (recipe_name, description, details, img) VALUES ('$recipe_name', '$description', '$details', '$img')";
        $result = mysqli_query($db, $sql);

        if ($result) {
            // echo "Registered Successfully";
            header ("Location: ../public/upload.html");
        } else {
            // echo "Something Went Wrong!":
            header("Location: ../public/chef1.html");
        }
    }