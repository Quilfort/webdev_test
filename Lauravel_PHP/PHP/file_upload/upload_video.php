<?php
  $target_dir = "uploads/video/";
  $index = uniqid();
//   $target_file = $target_dir . $index . '_' . basename($_FILES["fileToUpload"]["name"]);
    $target_file = $target_dir . '1'. '_' . 'productvideo.mp4';
  $uploadOk = 1;
  $videoFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

  if ($videoFileType != "mp4") {
      echo "Sorry, only MP4 files are allowed.";
      $uploadOk = 0;
  }

  if ($_FILES["fileToUpload"]["size"] > 3 * 1024 * 1024) {
      echo "Sorry, your file is too large. Maximum file size is 3 MB.";
      $uploadOk = 0;
  }

  if (file_exists($target_file)) {
      echo "Sorry, file already exists.";
      $uploadOk = 0;
  }

  if ($uploadOk == 1) {
      if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
          echo "The file " . htmlspecialchars(basename($_FILES["fileToUpload"]["name"])) . " has been uploaded with index: " . $index;
      } else {
          echo "Sorry, there was an error uploading your file.";
      }
  } else {
      echo "File upload failed.";
  }
?>
