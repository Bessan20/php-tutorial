<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Upload Form</title>
</head>
<body>
    <h2>File Upload Form</h2>
<form action="Uploadfile.php" method="POST" enctype="multipart/form-data">
    <label>Select a file:</label>
    <input type="file" name="Uploadfile" required>
    <input type="submit" value="Upload">
</form>
</body>
</html>