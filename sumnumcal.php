<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <?php
        $Res=0;
        $num1=$_GET['num1'];
        $num2=$_GET['num2'];
            echo "Enter number1 :$num1";
            echo "Enter number2 :$num2";
            for($n=$num1;$n <= $num2;$n++){
                $Res += $n;
            }
            echo  "Enter :$Res"; 
        ?>
        <a href="sumnum.php">PPP</a>


</body>
</html>