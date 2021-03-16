<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>ตัวอย่างที่ 9-8 </title>
</head>

<body>
    <?php
    $products = array(
        "T0001" => array("name" => "บล็อกหยอดหมีพูห์", "price" => 599),
        "T0004" => array("name" => "ตุ๊กตากบ สอน ABC", "price" => 2400),
        "T0005" => array("name" => "โต๊ะกิจกรรม", "price" => 1690),
        "P0001" => array("name" => "กระดานลื่นสุขสันต์", "price" => 9800),
        "B0001" => array("name" => "หนังสือมีเสียง: Pooh's Musical", "price" => 550)
    );
    echo "<table align='center' width='100%' border='1'>";
    echo "<tr><th>รหัสสินค้า</th><th>ชื่อสินค้า</th><th>ราคา</th></tr>";
    foreach ($products as $key1 => $value1) {//value1 คือ name  , price
        echo "<tr><td align='center'> $key1 </td>";// key1 คือ "T000"
        foreach ($value1 as $key2 => $value2) {// key2 คือ "name"
            if ($key2 == "name")
                echo "<td> $value2 </td>";
            else {
                echo "<td align='right'>";
                echo number_format($value2, 2) . " </td>";//number_format เป็นการเเสดงค่าตัวเลข 2 คือการเเสดงทศนิยม2ตำเเหน่ง
            }
        }
        echo "</tr>";
    }
    echo "</table>";
    ?>
</body>

</html>