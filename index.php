<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Array Challenge</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>

<h1>Task 1</h1>
    <?php 

$fruit = array('plum', 'banana', 'apple', 'carrot', 'potatoe');

$break = "</br>";

    echo $fruit[0].$break;
    echo end($fruit).$break;

$string = implode(", ", $fruit);

    echo $string.$break;

    sort($fruit);

    echo "$fruit[0] $fruit[1] $fruit[2] $fruit[3]";
?>
</body>
</html>