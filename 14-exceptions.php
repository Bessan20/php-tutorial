<?php

try {
    $x = 10;
    $y = 0;
    if($y == 0) {
    throw new Exception("Cannot divide by zero.");
    }
  return $x / $y;
}

catch (Exception $e) {
    $file = $e->getFile();
  $line = $e->getLine();
  $code = $e->getCode();
  $message = $e->getMessage();
  echo "Exception thrown in $file on line $line: [Code $code] $message";
}

finally {
    echo "\n<br>Finally block executed.";
}
?>