<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>ตัวอย่างที่ 9-7 </title>
</head>

<body>
    <?php
    $maxRow = 10;
    $maxCol = 3;
    for ($r = 0; $r < $maxRow; $r++) {//วนแถว
        for ($c = 0; $c < $maxCol; $c++) {//วนคอลัม
            $score[$r][$c] = rand(0, 100);//random ค่า 0-100
        }
    }
    echo "<table border='1' align='center' width='100%'>";
    echo "<tr><td width='80' align='center'>Homework</td>";
    echo "<td width='80' align='center'>Midterm</td>";
    echo "<td width='80' align='center'>Final</td></tr>";
    for ($r = 0; $r < $maxRow; $r++) { //ทำการเเสดงตารางเเละผลลัพออกมา
        echo "<tr>";
        for ($c = 0; $c < $maxCol; $c++) {
            echo "<td align='center'>" . $score[$r][$c] . "</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
    ?>
</body>

</html>