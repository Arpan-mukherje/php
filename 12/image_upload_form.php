
<!DOCTYPE html>
<html>
<head>
    <title>Image Upload Form</title>
</head>
<body>
    <h2>Upload Image</h2>
    <form action="upload.php" method="POST" enctype="multipart/form-data">
        <label for="image">Select an image (JPG, JPEG, GIF, or PNG):</label>
        <input type="file" name="image" accept=".jpg, .jpeg, .gif, .png" required><br>

        <label for="description">Image Description:</label>
        <input type="text" name="description" required><br>

        <input type="submit" value="Upload">
    </form>
</body>
</html>
