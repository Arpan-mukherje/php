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
        
        // Sanitize user input
        $folderName = htmlspecialchars($folderName);
        $fileName = htmlspecialchars($fileName);
        $fileData = htmlspecialchars($fileData);
        
        if (!empty($folderName) && !empty($fileName)) {
            if (!file_exists($folderName)) {
                if (mkdir($folderName, 0755, true)) {
                    echo "Folder '$folderName' created successfully.<br>";
                } else {
                    echo "Failed to create folder '$folderName'. Check permissions.<br>";
                }
            }
            
            $filePath = $folderName . '/' . $fileName;
            if (!file_exists($filePath)) {
                $file = fopen($filePath, 'w');
                if ($file) {
                    if (fwrite($file, $fileData)) {
                        echo "File '$fileName' created inside '$folderName' folder, and data saved.";
                    } else {
                        echo "Failed to write data to the file.";
                    }
                    fclose($file);
                } else {
                    echo "Failed to create the file. Check permissions.";
                }
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
