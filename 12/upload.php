<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $uploadDir = 'image/';
    $uploadedFile = $uploadDir . basename($_FILES['image']['name']);
    $allowedExtensions = array('jpg', 'jpeg', 'gif', 'png');
    $fileExtension = strtolower(pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION));
    $fileDescription = $_POST['description'];

    // Check if the uploaded file is a valid image with the allowed extensions
    if (in_array($fileExtension, $allowedExtensions)) {
        if (move_uploaded_file($_FILES['image']['tmp_name'], $uploadedFile)) {
            // Display the uploaded image information
            $uploadedFileName = $_FILES['image']['name'];
            $uploadedFileType = $_FILES['image']['type'];
            $uploadedFileSize = $_FILES['image']['size'];
            $storedIn = $uploadedFile;

            echo "<h2>Uploaded File Information</h2>";
            echo "uploaded file name: $uploadedFileName<br>";
            echo "file type: $uploadedFileType<br>";
            echo "file size: $uploadedFileSize bytes<br>";
            echo "file description: $fileDescription<br>";
            echo "stored in: $storedIn<br>";
            echo "uploaded file:<br>";
            echo "<img src='$storedIn' alt='$uploadedFileName' width='200'>";
        } else {
            echo "Error uploading the file.";
        }
    } else {
        echo "Invalid file type. Please upload a JPG, JPEG, GIF, or PNG file.";
    }
}
?>
