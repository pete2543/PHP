<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>ตัวอย่างที่ 10-6 </title>
</head>

<body>
    <?php
    // open file
    $fp = @fopen("photo.jpg", "rb");
    if ($fp) {
        $fpnew = @fopen("new_photo.jpg", "wb");
        while ($ln = @fread($fp, 1024)) {
            fwrite($fpnew, $ln);
        }
        @fclose($fp);
        @fclose($fpnew);
        copy("photo.jpg", "photo_copy.jpg");
        echo "<h3>File Copy Finish...</h3>";
        echo "<image src='new_photo.jpg' width='720' height='440'>";
    } else {
        die("ไม่สามารถเปิดไฟล์ photo.jpg ได้ !");
    }
    ?>
</body>

</html>