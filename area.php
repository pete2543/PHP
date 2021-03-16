<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input numeric</title>
</head>
<body>
    <form method="get" action="areacal.php">

               <table border="0"align="center"width="300">
                    <td colspan="2" align="center">
                        <strong> เครื่องคำนวนวงกลมและทรงกลม  </strong>
                    </td>
               <tr>
                        <td>รัศมี :</td>
                        <td>
                             <input type="number"name="num1"max=""min="1"step="1"value="">                    
                        </td>
                    </tr>
                    <tr>
                        <td>เลือกการคำนวน</td>
                        <td>
                                <select name="c">
                                <option value="">-เลือกการคำนวน-</option>
                                <option value="1"> เส้นผ่าศูนย์กลาง</option>
                                <option value="2"> เส้นรอบวง</option>
                                <option value="3"> พื้นที่วงกลม</option>
                                <option value="4"> พื้นที่ผิวของทรงกลม</option>
                                <option value="5"> ปริมาตรของทรงกลม</option>
                                </select></td>
                        
               </tr>
               
               <tr>
               <td colspan="2" align="center">
               <input name="btnSubmit"type="submit"value="calculate">
               <input name="btnReset"type="reset"value="Clear">
               </td>
               </tr>
               </table>

    </from>
</body>
</html>