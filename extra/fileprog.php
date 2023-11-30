<!DOCTYPE html>
<html>
<head>
    <title>Create Folder, File, and Save Data</title>
</head>
<body>
    <form method="post">
        <label for="folderName">Folder Name:</label>
        <input type="text" id="folderName" name="folderName">
        <br>
        <label for="fileName">File Name:</label>
        <input type="text" id="fileName" name="fileName">
        <br>
        <label for="fileData">File Data:</label>
        <textarea id="fileData" name="fileData"></textarea>
        <br>
        <input type="submit" value="Create Folder, File, and Save Data">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $folderName = $_POST["folderName"];
        $fileName = $_POST["fileName"];
        $fileData = $_POST["fileData"];
        
        if (!empty($folderName) && !empty($fileName)) {
            if (!file_exists($folderName)) {
                mkdir($folderName);
                echo "Folder '$folderName' created successfully.<br>";
            }
            
            $filePath = $folderName . '/' . $fileName;
            if (!file_exists($filePath)) {
                $file = fopen($filePath, 'w');
                fwrite($file, $fileData);  // Write data to file
                fclose($file);
                echo "File '$fileName' created inside '$folderName' folder and data saved.";
            } else {
                echo "File '$fileName' already exists in '$folderName' folder.";
            }
        } else {
            echo "Please enter both folder and file names.";
        }
    }
    ?>
</body>
</html>