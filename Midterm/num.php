<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<center>
            <form method="get" action="num.php">
            
                <tr>
                    <td > ค่าเริ่มต้น :</td>
                    <td><input type="text" name="start" value="" /></td>
                </tr><br>
                <tr>
                    <td > ค่าสุดท้าย:</td>
                    <td><input type="text" name="end" value="" /></td>
                </tr><br>
                <tr>
                    <td > ตัวเลขที่นำไปหาร:</td>
                    <td><input type="text" name="sum" value="" /></td>
                </tr><br>
                <tr>
                    <td colspan="2" align="center"><input type="submit" name="sud" value="Check num" />
                    </td>
                </tr>
                <?php
                if (isset($_GET['sub'])) { 
                    $start=$_GET['start'];
                    $end=$_GET['end'];
                    $sum=$_GET['sum'];
                 } ?>
            </form>
    </center>
</body>
</html>