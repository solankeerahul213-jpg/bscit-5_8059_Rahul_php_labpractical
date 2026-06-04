<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        function static_var(){
            static $num1 = 3;
            $num2 = 6;
            $num1++;
            $num2++;
            echo"Static:".$num1."</br>";
            echo"Non-static:".$num2."</br>";
        }
        static_var();
        static_var();
    ?>
</body>
</html>