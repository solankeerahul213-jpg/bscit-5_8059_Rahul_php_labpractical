<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php   
        $num = array("Milan","Tirth","Sunil");
        echo "Emp1 is :". $num[0] . "</br>";
        echo "Emp2 is :". $num[1] . "</br>";
        echo "Emp3 is :". $num[2] . "</br>";

        echo " REVERSE FUNCTION" . "</br>";
         
       $emp = array_reverse($num);
       echo $emp[0] . "</br>";
       echo $emp[1] . "</br>";
       echo $emp[2] . "</br>";
    ?>
</body>
</html>