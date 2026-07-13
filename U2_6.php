<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="GET">
        <br>Enter Number 1:<input type="number" name="num1" required></br>
        <br>Enter Number 2:<input type="number" name="num2"required></br>

    <br><label>select operator </label>
    <select name="op">
        <option value="+"> + </option><br><br>
        <option value="-"> - </option><br><br>
        <option value="*"> * </option><br><br>
        <option value="/"> / </option><br><br>
    </select>
    </br>

    <br><input type="Submit" name="Submit" value="="></br>
    </form>
    <?php
        function calculate($num1,$num2,$op){
            switch($op){
                case '+':
                    return $num1 + $num2;

                case '-':
                    return $num1 - $num2;

                case '*':
                    return $num1 * $num2;

                case '/':
                    return $num2 != 0 ? $num1 / $num2: "Cannot devide by zero";
                
                default:
                    return "invalid operation";
            }
        }

        if(isset($_GET['Submit']))
        {
            $n1 = $_GET['num1'];
            $n2 = $_GET['num2'];
            $op = $_GET['op'];

            $result = calculate($n1, $n2, $op);
            
            echo"<h2>Result: $result</h2>";
        }
    ?>

</body>
</html>