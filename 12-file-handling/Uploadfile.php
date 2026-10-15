<?php

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    if (!isset($_FILES["Uploadfile"])) {
        die("Error: No file was received. Check your HTML form.");
    }

    $file = $_FILES["Uploadfile"];

    if ($file["error"] !== UPLOAD_ERR_OK) {
        die("File upload failed. Error code: " . $file["error"]);
    }

    $fileName = basename($file["name"]);
    $fileType = $file["type"];
    $fileSize = $file["size"];
    $tmpName = $file["tmp_name"];

    $uploadDir = "shiko/";

    // Create the uploads directory if it doesn't exist
    if (!is_dir($uploadDir)) {
        mkdir($uploadDir, 0755, true);
    }

    $destination = $uploadDir . $fileName;

    echo "File to be uploaded: " . htmlspecialchars($fileName) . "<br>";
    echo "Type: " . htmlspecialchars($fileType) . "<br>";
    echo "File size: " . $fileSize . " bytes<br>";
    echo "Store in: " . htmlspecialchars($destination) . "<br>";

    if (move_uploaded_file($tmpName, $destination)) {
        echo "File successfully uploaded.";
    } else {
        echo "Error: Unable to upload the file.";
    }

} else {
    echo "Please submit the upload form first.";
}
?>