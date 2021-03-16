<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    if (isset($_GET['btnOk'])) {  ?>

        <?php
        $num1 = $_GET['num1'];
        $num2 = $_GET['num2'];
        $num3 = $_GET['num3'];
        $num4 = $_GET['s2'];
        $num5 = $_GET['s3'];


        echo  "PROFILE </br>";
        echo " รหัสนักศึกษา : $num1 </br>";
        echo " ชื่อ  :  $num2 </br>";
        echo " เพศ  :  $num4 </br>";
        echo " สาขา  :  $num5 </br>";
        echo " เกรดเฉลี่ย  :  $num3 </br>";


        ?>

    <?php } else { ?>

        <form method="get" action="onlypage.php">
            <center>
                <table>
                    <tr>
                        <td align="right"> รหัสนักศึกษา :</td>
                        <td><input type="text" name="num1" size="15" value=""></td>
                    </tr>
                    <tr>
                        <td align="right"> ชื่อ : </td>
                        <td><input type="text" name="num2" size="15" value=""></td>
                    </tr>
                    <tr>
                        <td align="right">เพศ : </td>
                        <td><input type="radio" name="s2" size="1" value="ชาย">ชาย<input type="radio" name="s2" size="1" value="หญิง">หญิง</td>
                    </tr>
                    <tr>
                        <td align="right">สาขา : </td>
                        <td><input type="radio" name="s3" size="1" value="IT">IT<input type="radio" name="s3" size="1" value="ITI">ITI<input type="radio" name="s3" size="1" value="INE">INE</td>
                    </tr>
                    <tr>
                        <td align="right">เกรดเฉลี่ย : </td>
                        <td><input type="float" name="num3" size="15" value=""></td>
                    </tr>
                    <td colspan="2"><input name="btnOk" type="submit" value=" OK "></td>
                    <td colspan="2"><input name="btnReset" type="reset" value="Clear"></td>
                    </tr>

                </table>
            </center>
        </form>



    <?php } ?>

</body>

</html>