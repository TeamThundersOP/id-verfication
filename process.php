<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Processing...</title>
  <style>
    .loading {
      text-align: center;
      font-size: 24px;
      margin-top: 100px;
    }
    .success {
      text-align: center;
      font-size: 24px;
      margin-top: 100px;
    }
    .tick {
      color: green;
    }
  </style>
</head>
<body>
  <?php
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Display loading message
    echo '<div class="loading">Processing...</div>';
    ob_flush();
    flush();
    sleep(5);

    // Generate a unique folder name
    $folderName = uniqid();

    // Create the folder
    $destination = "uploads/" . $folderName;
    if (!mkdir($destination, 0777, true)) {
      // Failed to create the folder
      echo '<div class="loading">Failed to create the folder.</div>';
      exit;
    }

    // Check if any files were uploaded
    if (isset($_FILES['file1']) && isset($_FILES['file2']) && isset($_FILES['file3'])) {
      // Handle file uploads
      $file1 = $_FILES['file1'];
      $file2 = $_FILES['file2'];
      $file3 = $_FILES['file3'];

      // Process and move file1 with the name "Holding_id.jpg"
      $file1Name = "Holding_id.jpg";
      $file1TmpName = $file1['tmp_name'];
      move_uploaded_file($file1TmpName, $destination . "/" . $file1Name);

      // Process and move file2 with the name "front.jpg"
      $file2Name = "front.jpg";
      $file2TmpName = $file2['tmp_name'];
      move_uploaded_file($file2TmpName, $destination . "/" . $file2Name);

      // Process and move file3 with the name "back.jpg"
      $file3Name = "back.jpg";
      $file3TmpName = $file3['tmp_name'];
      move_uploaded_file($file3TmpName, $destination . "/" . $file3Name);

      // Display success message with tick symbol
      echo '<div class="success">Files uploaded successfully! Folder: ' . $folderName . ' <span class="tick">&#10004;</span></div>';

      // Redirect to another page after 5 seconds
      header("refresh:5;url=redirect.php"); // Replace "redirect.php" with the actual URL of the target page
    } else {
      // No files were uploaded
      echo '<div class="loading">Please select files to upload.</div>';
    }
  }
  ?>
</body>
</html>
