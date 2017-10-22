<?php
  if (sizeof($_FILES["fileToUpload"]["name"]) > 1){
    for($i = 0; $i < sizeof($_FILES["fileToUpload"]["name"]); $i++){
      $target_dir = "./";
      $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"][$i]);
      $uploadOk = 1;
      if (file_exists($target_file) && !isset($_POST["checkBox"])){
        $uploadOk = 0;
      }
      if ($uploadOk == 0) {
        echo "Sorry, your file ". basename( $_FILES["fileToUpload"]["name"][$i]). " was not uploaded. <br>";
      } else {
          if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"][$i], $target_file)) {
              echo "The file ". basename( $_FILES["fileToUpload"]["name"][$i]). " has been uploaded. <br>";
          } else {
              echo "Sorry, there was an error uploading your file ". basename( $_FILES["fileToUpload"]["name"][$i]). ". <br>";
          }
      }
    }
  } elseif (sizeof($_FILES["fileToUpload"]["name"]) == 1) {
    $target_dir = "./";
    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"][0]);
    $uploadOk = 1;
    if (file_exists($target_file) && !isset($_POST["checkBox"])){
      $uploadOk = 0;
    }
    if ($uploadOk == 0) {
      echo "Sorry, your file ". basename( $_FILES["fileToUpload"]["name"][0]). " was not uploaded. <br>";
    } else {
        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"][0], $target_file)) {
            echo "The file ". basename( $_FILES["fileToUpload"]["name"][0]). " has been uploaded. <br>";
        } else {
            echo "Sorry, there was an error uploading your file ". basename( $_FILES["fileToUpload"]["name"][0]). ". <br>";
        }
    }
  } else {
    echo "Transfer failure";
  }
 ?>
