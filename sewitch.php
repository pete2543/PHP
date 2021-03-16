<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $d = 'day';
    $color = '';
    switch ($d) {
        case 'Monday':
            $color = 'yellow';
            break;
        case 'Tuesday':
            $color = 'pink';
            break;
        case 'Wednesday':
            $color = 'green';
            break;
        case 'Thursday':
            $color = 'orange';
            break;
        case 'Friday':
            $color = 'blue';
            break;
        case 'Saturday':
            $color = 'purple';
            break;
        case 'Sunday':
            $color = 'red';
            break;
    }

    echo "you is: $d.<br/>";
    echo "color is: $color<br/>";
    ?>
</body>

</html>