<?php

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $line = $_POST["line"] ?? "";

    if ($line !== "") {
        $file = "output.txt";
        file_put_contents($file, $line . PHP_EOL, FILE_APPEND | LOCK_EX);
        echo "Line written";
    } else {
        echo "Empty line";
    }
} else {
    echo "POST only";
}

?>