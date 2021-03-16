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
        $name = $_GET['fn'];
        $lastName = $_GET['ln']

        ?>

        <h1>onlypage.php</h1>
        <h2>Result</h2>
        <table>
            <tr>
                <td>
                    frist name : <?php echo $name ?>
                </td>
            </tr>
            <tr>
                <td>
                    last name : <?php echo $lastName ?>
                </td>
            </tr>
            <tr>
                <td>
                    frist and last : <?php echo $name . " " . $lastName ?>
                </td>
            </tr>

        </table>

    <?php } else { ?>

        <form method="get" action="onlypage.php">
            <center>
                <table>
                    <tr>
                        <td>First Name : </td>
                        <td><input type="text" name="fn" id=""></td>
                    </tr>
                    <tr>
                        <td>Last Name : </td>
                        <td><input type="text" name="ln" id=""></td>
                    </tr>
                    <tr>
                        <td colspan="2"><input name="btnOk" type="submit" value=" OK "></td>
                    </tr>

                </table>
            </center>
        </form>



    <?php } ?>

</body>

</html>