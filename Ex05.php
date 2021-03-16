<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <table>
        <form method="get" action="Ex05_1.php">
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
                        <input type="radio" id="male" name="gen" value="ชาย">
                        <label for="male">ชาย</label>
                        <input type="radio" id="female" name="gen" value="หญิง">
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
                    <td colspan="2" align="center"><input type="submit" name="bnok" value="OK" />
                    </td>
                </tr>
            </table>
        </form>
</body>

</html>