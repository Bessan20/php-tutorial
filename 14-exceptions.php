<?php



try {
    $file = fopen("myfile.txt", "r");

    if ($file === false) {
        throw new Exception("Failed to open the file");
    }

    echo "File opened successfully!";
    fclose($file);

} catch (Exception $e) {
     echo $e->getMessage() . "<br>";
    echo $e->getLine() . "<br>";
    echo $e->getCode() . "<br>";
    echo $e->getFile() . "<br>";
}
?>
