<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $group1 = array("Rahul","Meet");
        $group2 = array("Foram","Parth");
        
        echo "MERGE ARRAY" . "</br>";
        
        $x = array_merge($group1,$group2);
        foreach($x as $students){
            echo $students ."</br>";
        }
    ?>
</body>
</html>