<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array Change Key Case</title>
</head>
<body>
<?php
echo"<h3>Lower Case<br></h3>";
$arr = ["Name" => "Alice", "AGE" => 25, "City" => "New York" ];
    print_r(array_change_key_case($arr,CASE_LOWER));
echo"<h3>Upper Case<br></h3>";
$arr = ["Name" => "Parth", "AGE" => 40, "City" => "Rajkot" ];
    print_r(array_change_key_case($arr,CASE_UPPER));
?>
</body>
</html>