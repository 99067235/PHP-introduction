<!DOCTYPE html>
<html lang="en">
<head>
    <title>Hello world!</title>
</head>
<body>
    <h1>Hello world!</h1>
    <?php
    define("text", "Hello world!");
    echo text;
    $txt = "Hello world!";
    echo "<br>";
    echo $txt;
    echo "<br>";
    define("txt", "Learning PHP");
    echo txt;
    $txt1 = "Hello ";
    $txt2 = "world!";
    echo "<html><h1>".$txt1,$txt2."</h1></html>";
    $array = array("Hello ", "world!");
    echo $array[0]. $array[1];
    ?>
    <h1></h1>
</body>
</html>