<!DOCTYPE html>
<html>
<head>
    <title>Create Folder, File, and Save Data</title>
</head>
<body>
    <form method="post">
        <label for="operation">Select an operation:</label>
        <select name="operation" id="operation" required>
            <option value="DirectoryCreate">Create Directory</option>
            <option value="FileCreate">Create File</option>
            <option value="FileWrite">Write in the File</option>
            <option value="FileAppend">Append in the File</option>
            <option value="FileOverwrite">Overwrite the File</option>
            <option value="FileRead">Read the File</option>
        </select>

        <label for="name">Enter Directory or File Name:</label>
        <input type="text" name="name" id="name">
        
        <label for="description">Description:</label>
        <textarea name="description" id="description" rows="4" cols="50"></textarea>

        <input type="submit" value="Submit">
        <input type="reset" value="Reset">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $operation = $_POST["operation"];
        $name = $_POST["name"];
        $description = $_POST["description"];
        
        if (!empty($name)) {
            if ($operation === "DirectoryCreate") {
                if (!is_dir($name)) {
                    if (mkdir($name)) {
                        echo "Directory '$name' created successfully.";
                    } else {
                        echo "Failed to create the directory.";
                    }
                } else {
                    echo "Directory already exists.";
                }
            } elseif ($operation === "FileCreate") {
                if (!file_exists($name)) {
                    if (touch($name)) {
                        echo "File '$name' created successfully.";
                    } else {
                        echo "Failed to create the file.";
                    }
                } else {
                    echo "File already exists.";
                }
            } elseif ($operation === "FileWrite" || $operation === "FileAppend" || $operation === "FileOverwrite") {
                if (empty($description)) {
                    echo "Please enter a description for the file operation.";
                } else {
                    $mode = ($operation === "FileAppend") ? "a" : "w";
                    $file = fopen($name, $mode);
                    if ($file) {
                        if (fwrite($file, $description)) {
                            echo "Operation completed. File updated.";
                        } else {
                            echo "Failed to write to the file.";
                        }
                        fclose($file);
                    } else {
                        echo "Failed to open the file for writing.";
                    }
                }
            } elseif ($operation === "FileRead") {
                if (file_exists($name)) {
                    $fileContent = file_get_contents($name);
                    echo "<textarea rows='4' cols='50'>$fileContent</textarea>";
                } else {
                    echo "File does not exist.";
                }
            }
        } else {
            echo "Please enter a name for the operation.";
        }
    }
    ?>
</body>
</html>
