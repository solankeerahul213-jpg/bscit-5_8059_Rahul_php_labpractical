<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    $str = "Welcome to PHP";

    echo"<h3>1. strlen()</h3>";
    echo"String: $str <br>";
    echo"Length = " . strlen($str);

    echo"<hr>";

    echo"<h3>4. strrev()</h3>";
    echo"Revrse String = " . strrev($str);

    echo("<hr>");

    echo"<h3>5. str_replace()</h3>";
    echo str_replace("PHP", "Java", $str);

    echo"<hr>";

    echo"<h3>6. strlower()</h3>";
    echo strtolower($str);

    echo"<hr>";

    echo"<h3>7. strupper()</h3>";
    echo strToupper($str);

    echo"<hr>";
    ?>
</body>
</html>