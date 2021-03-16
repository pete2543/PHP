<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

    $num1 = $_GET['num1'];
    $num2 = $_GET['num2'];
    $num3 = $_GET['num3'];
    if (!empty($num1)) {

        echo "ตัวเลขที่1 :";
        echo $num1 . "<br><br>";
    }
    if (!empty($num2)) {

        echo "ตัวเลขที่2 :";
        echo $num2 . "<br><br>";
    }
    if (!empty($num3)) {

        echo "ตัวเลขที่3 :";
        echo $num3 . "<br><br>";
    }
    echo "<a href=minmax.php> <big>Back</big></a>";
    ?>
</body>

</html>