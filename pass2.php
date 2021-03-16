<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">

</head>

<body>
    <center>
        <?php

        $num1 = $_GET['name'];
        $num2 = $_GET['number'];
        $num3 = $_GET['gen'];
        $num4 = $_GET['grade'];
        $num5 = $_GET['it'];
        function show($num1, $num2, $num3, $num4, $num5)
        {
            echo "รหัสนศ. : <i> $num1 </i> <br/>";
            echo "ชื่อ - นามสกุล  : <i> $num2 </i> <br/>";
            echo "เพศ  : <i> $num3 </i> <br/>";
            echo "ภาควิชา  : <i> $num4 </i> <br/>";
            echo "เกรดเฉลี่ย  : <i> $num5</i> <br/>";
            echo "<a href=Ex04.php> <big>OK </big></a>";
        }
        echo show($num1, $num2, $num3, $num4, $num5);
        ?>
    </center>

</body>

</html>