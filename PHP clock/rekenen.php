<!DOCTYPE html>
<html lang="en">
<head>
    <title>Rekenen</title>
</head>
<body>
    <?php
    $var1 = (rand(1,100));
    $var2 = (rand(1,100));
    $sum=$var1+$var2;
    $sum2=$var1*$var2;
    $sum3=$var1-$var2;
    $sum4=$var1/$var2;
    echo $var1,"+",$var2,"=",$sum;
    echo "<br>";
    echo $var1,"-",$var2,"=",$sum3;
    echo "<br>";
    echo $var1,"x",$var2,"=",$sum2;
    echo "<br>";
    echo $var1,":",$var2,"=",$sum4;
    echo "<br>";
    echo "<br>";
    $numbers = array("3", "5", "8", "12");
    function tablesix($number) {
        for ($x = 0; $x <= 10; $x++) {
            $newsum = $x * $number;
            echo "6 X $x = $newsum <br>";
        }
    echo "<br>";
    }
    tablesix(6);
    foreach ($numbers as $yes) {
        for ($x = 0; $x <= 10; $x++) {
            echo $x. "x".$yes."=".($x * $yes). "<br>";
        };
        echo "<br>";
    }
    ?>
</body>
</html>