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
        $Radius=$_GET['r'];
        $sum=$_GET['sum'];
        if($sum=='1'){
            echo "เส้นผ่าศูนย์กลาง= $Radius";
        }
    ?>
</body>
</html>