<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> </title>
</head>

<body>
    <?php
    $salary = $_GET['num1'];
    $s = $salary;
    echo "เงินเดือน : $s <br><br>";

    $s = $s * 12;
    echo "เงินรายปี : $s<br>";
    if ($s <= 499999) {
        $s = 5;
        echo "ภาษี : $s%<br>";
    } else if ($s >= 2000000) {
        $s = 30;
        echo "ภาษี : $s%<br>";
    }
    ?>

    <a href="Salary.php"> Back </a>
</body>

</html>