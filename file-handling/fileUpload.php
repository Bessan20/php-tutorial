<?php
/*
Why we dont use isset($_FILES["file"]) to check if a file is uploaded or not?
if the file not uploaded :
$_FILES["file"] = [
    "name"     => "",
    "type"     => "",
    "tmp_name" => "",
    "error"    => 4,
    "size"     => 0
];

$_FILES["file"]["error"]
Error Code	Constant	      Meaning
0	UPLOAD_ERR_OK	The file was uploaded successfully. No error occurred.
1	UPLOAD_ERR_INI_SIZE	The uploaded file exceeds the maximum file size allowed by the PHP configuration (upload_max_filesize).
2	UPLOAD_ERR_FORM_SIZE	The uploaded file exceeds the maximum file size specified in the HTML form using MAX_FILE_SIZE.
3	UPLOAD_ERR_PARTIAL	The file was only partially uploaded.
4	UPLOAD_ERR_NO_FILE	No file was selected for upload.
6	UPLOAD_ERR_NO_TMP_DIR	The temporary folder is missing.
7	UPLOAD_ERR_CANT_WRITE	PHP failed to write the uploaded file to the disk.
8	UPLOAD_ERR_EXTENSION	A PHP extension stopped the file upload.
*/


// if(isset($_FILES["file"]) ) {
//    echo $_FILES['file']."\n<br>";    //will cause error because $_FILES['file'] is an array and cannot be converted to string
//    echo isset($_FILES['file'])."\n<br>";  //true
//    echo $_FILES['file']['name']."\n<br>";   //empty string
//     echo "File uploaded successfully.\n<br>";
// } else {
//     echo "No file uploaded.\n<br>";
// }

if(isset($_FILES["file"]) && $_FILES['file']['error'] === UPLOAD_ERR_OK) {
   
    move_uploaded_file($_FILES['file']['tmp_name'], "uploads/".$_FILES['file']['name']);
    echo "File uploaded successfully.\n<br>";
    echo $_FILES['file']['name']."\n<br>";
    echo $_FILES['file']['type']."\n<br>";
    echo $_FILES['file']['size']."\n<br>";
    echo $_FILES['file']['tmp_name']."\n<br>";
    echo $_FILES['file']['error']."\n<br>";

} else {
    echo "No file uploaded.\n<br>";
}


?>