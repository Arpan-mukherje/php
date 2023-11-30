&lt;!DOCTYPE html&gt;
&lt;html&gt;
&lt;head&gt;
    &lt;title&gt;Create Folder, File, and Save Data&lt;/title&gt;
&lt;/head&gt;
&lt;body&gt;
    &lt;form method=&quot;post&quot;&gt;
        &lt;label for=&quot;folderName&quot;&gt;Folder Name:&lt;/label&gt;
        &lt;input type=&quot;text&quot; id=&quot;folderName&quot; name=&quot;folderName&quot;&gt;
        &lt;br&gt;
        &lt;label for=&quot;fileName&quot;&gt;File Name:&lt;/label&gt;
        &lt;input type=&quot;text&quot; id=&quot;fileName&quot; name=&quot;fileName&quot;&gt;
        &lt;br&gt;
        &lt;label for=&quot;fileData&quot;&gt;File Data:&lt;/label&gt;
        &lt;textarea id=&quot;fileData&quot; name=&quot;fileData&quot;&gt;&lt;/textarea&gt;
        &lt;br&gt;
        &lt;input type=&quot;submit&quot; value=&quot;Create Folder, File, and Save Data&quot;&gt;
    &lt;/form&gt;

    &lt;?php
    if ($_SERVER[&quot;REQUEST_METHOD&quot;] == &quot;POST&quot;) {
        $folderName = $_POST[&quot;folderName&quot;];
        $fileName = $_POST[&quot;fileName&quot;];
        $fileData = $_POST[&quot;fileData&quot;];
        
        // Sanitize user input
        $folderName = htmlspecialchars($folderName);
        $fileName = htmlspecialchars($fileName);
        $fileData = htmlspecialchars($fileData);
        
        if (!empty($folderName) &amp;&amp; !empty($fileName)) {
            if (!file_exists($folderName)) {
                if (mkdir($folderName, 0755, true)) {
                    echo &quot;Folder &#039;$folderName&#039; created successfully.&lt;br&gt;&quot;;
                } else {
                    echo &quot;Failed to create folder &#039;$folderName&#039;. Check permissions.&lt;br&gt;&quot;;
                }
            }
            
            $filePath = $folderName . &#039;/&#039; . $fileName;
            if (!file_exists($filePath)) {
                $file = fopen($filePath, &#039;w&#039;);
                if ($file) {
                    if (fwrite($file, $fileData)) {
                        echo &quot;File &#039;$fileName&#039; created inside &#039;$folderName&#039; folder, and data saved.&quot;;
                    } else {
                        echo &quot;Failed to write data to the file.&quot;;
                    }
                    fclose($file);
                } else {
                    echo &quot;Failed to create the file. Check permissions.&quot;;
                }
            } else {
                echo &quot;File &#039;$fileName&#039; already exists in &#039;$folderName&#039; folder.&quot;;
            }
        } else {
            echo &quot;Please enter both folder and file names.&quot;;
        }
    }
    ?&gt;
&lt;/body&gt;
&lt;/html&gt;
