<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    echo"<h3> array_combine</h3>";
    $arr = array("Name", "Age", "City");
    $values = array("Rahul", 19, "Junagadh");
    print_r(array_combine($arr, $values));
?>
</body>
</html>