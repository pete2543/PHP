<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    if (isset($_GET['bb'])) {  ?>
        
         <?php 
         $num1 =$_GET['number'];
         $num2 =$_GET['name'];
         $num3 =$_GET['gen'];
         $num4 =$_GET['it'];
         $num5 =$_GET['grade'];
         

         echo  "PROFILE </br>";
         echo " รหัสนักศึกษา : $num1 </br>";
         echo " ชื่อ  :  $num2 </br>";
         echo " เพศ  :  $num3 </br>";
         echo " สาขา  :  $num4 </br>";
         echo " เกรดเฉลี่ย  :  $num5 </br>";
        

      ?>

    <?php } else { ?>

        < <table>
        <form method="get" action="onlypage.php">
            <table border="1" align="center" width="500">
                <tr>
                    <td colspan="2" align="center">
                        <strong>กรุณากรอกชื่อ - นามสกุล </strong>
                    </td>
                <tr>
                <tr>
                    <td>รหัสนักศึกษา : </td>
                    <td>
                        <input type="text" name="number" size="15" value="" />
                    </td>
                </tr>
                <tr>
                    <td>ชื่อ - นามสกุล: </td>
                    <td>
                        <input type="text" name="name" size="15" value="" />
                    </td>
                </tr>
                <tr>
                    <td>เพศ </td>
                    <td>
                        <input type="radio" id="male" name="gen" value="M">
                        <label for="male">ชาย</label>
                        <input type="radio" id="female" name="gen" value="F">
                        <label for="female">หญิง</label>
                    </td>
                <tr>
                    <td>ภาควิชา :</td>
                    <td><select name="it" id="it">
                            <option value="IT">it</option>
                            <option value="ITI">iti</option>

                        </select>
                    </td>
                </tr>
                <tr>
                    <td>เกรดเฉลี่ย : </td>
                    <td>
                        <input type="text" name="grade" size="15" value="" />
                    </td>
                </tr>
                </tr>
                </tr>
                </tr>
                <tr>
                    <td colspan="2" align="center"><input type="submit" name="bb" value="OK" />
                    </td>
                </tr>
            </table>
        </form>

    <?php } ?>

</body>

</html>