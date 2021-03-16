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
        <form method="get" action="testshow.php">
            <table>
                <tr>
                    <td>เครื่องคำนวณวงกลมเเละทรงกลม</td>
                </tr>
                <tr>
                    <td> รัศมี :</td>
                    <td><input type="text" name="r" value="" /></td>
                </tr>
                <tr>
                    <td> เลือกการคำนวน :</td>
                    <td> <select name="sum" id="it">
                            <option value="0">---ลือกการคำนวณ--</option>
                            <option value="1">เส้นผ่าศูนย์กลาง</option>
                            <option value="2">เส้นรอบวง</option>
                            <option value="3">พื้นที่วงกลม</option>
                            <option value="4">พื้นที่ผิวของทรงกลม</option>
                            <option value="5">ปริมาณของทรงกลม</option>
                        </select></td>
                </tr>
                <tr>
                    <td> <input type="submit" name="btnsubmit" value="Show Data" style="color:black"></td>
                    <td> <input type="button" name="back" value="Back" onclick="jascrip:history.go(-1)" style="color:black"></td>

                </tr>


            </table>
        </form>
    </center>
</body>

</html>