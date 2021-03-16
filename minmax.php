<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form method="get" action="minmaxx.php">
        <tr>
            <td>ตัวเลขที่1</td>
            <td><input type="number" name="num1" max="10" step="1" min="1" value="" /></td>
        </tr>
        <tr>
            <td>ตัวเลขที่2</td>
            <td><input type="number" name="num2" max="100" step="5" min="5" value="" /></td>
        </tr>
        <tr>
            <td>ตัวเลขที่3</td>
            <td><input type="number" name="num3" max="1000" step="100" min="500" value="" /></td>
        </tr>
        <p>
            what is your Gender?
            <select name="gender">
                <option value="M">Meale</option>
                <option value="F">Female</option>
            </select>
        </p>
        <tr>
            <td colspan="2"><input type="submit" name="btnok" value="OK" />
            </td>
        </tr>
        <img src='img/City.png' border = '0'>
    </form>
</body>

</html>