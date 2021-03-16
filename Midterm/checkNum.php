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
    if (isset($_GET['ok'])) {
        $num1 = $_GET['num1'];
        $num2 = $_GET['num2'];
        $num3 = $_GET['num3'];
        $num = 0;
        $total = 0;
    ?>
        <table align="center">
            <?PHP
            echo "<tr>";
            echo "<td> ค่าเริ่มต้น : </td>";
            echo "<td><input type='text' name ='num1' value='$num1'/></td>";
            echo "</tr>";

            echo "<tr>";
            echo "<td> ค่าสุดท้าย : </td>";
            echo "<td><input type='text' name ='num1' value='$num2'/></td>";
            echo "</tr>";

            echo "<tr>";
            echo "<td> ตัวเลขที่นำไปหาร : </td>";
            echo "<td ><input type='text' name ='num1' value='$num3'/></td>";
            echo "</tr>";

            echo "<tr>";
            echo "<td> <input type='submit' name='ok' value='Check Num'/> </td>";
            echo "</tr>";




            ?>


            <center>
                <?php





                function checkNum($num1, $num2, $num3, &$num, &$total)
                {
                    echo "<tr>";
                    echo "<td>";
                    for ($i = $num1; $i <= $num2; $i++) {
                        if (($i % $num3) == 0) {
                            $x1 = $i;
                            echo $x1 . " , ";
                            $num += 1;
                            $total += $i;
                        }
                    }
                }
                echo "</td>";
                echo "</tr>";

                function countNum(&$num)
                {
                    echo "<tr>";
                    echo "<td>";
                    echo "จำนวนที่หารลงตัว = " . $num . " ตัว";
                    echo "</td>";
                    echo "</tr>";
                }
                function sumNum(&$total)
                {
                    echo "<tr>";
                    echo "<td>";
                    echo "ผลรวมของตัวเลขที่หารลงตัว = " . $total;
                    echo "</td>";
                    echo "</tr>";
                }
                checkNum($num1, $num2, $num3, $num, $total);
                countNum($num);
                sumNum($total);
            } else {
                ?>
        </table>
        </center>


        <form method="get" action="checkNum.php">
            <table align="center">
                <?PHP
                echo "<tr>";
                echo "<td> ค่าเริ่มต้น : </td>";
                echo "<td><input type='text' name ='num1' value=''/></td>";
                echo "</tr>";

                echo "<tr>";
                echo "<td> ค่าสุดท้าย : </td>";
                echo "<td><input type='text' name ='num2' value=''/></td>";
                echo "</tr>";

                echo "<tr>";
                echo "<td> ตัวเลขที่นำไปหาร : </td>";
                echo "<td ><input type='text' name ='num3' value=''/></td>";
                echo "</tr>";

                echo "<tr>";
                echo "<td> <input type='submit' name='ok' value='Check Num'/> </td>";
                echo "</tr>";



                ?>

            </table>
        </form>

    <?php
            }
    ?>
</body>

</html