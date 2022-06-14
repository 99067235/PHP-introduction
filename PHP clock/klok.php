<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style.css">
    <title>clock</title>
</head>
<body>
    <?php
    date_default_timezone_set("Europe/Amsterdam");
    $time = date("H:i ");
    $hour = date("H");
    if ($time < "12") {
        echo "<center>Goede morgen!</center>";
        echo  "<center>Het is nu $time</center>";
        ?>
        <img src="morning.png" alt="morning">
    <?php
    } else
    if ($time >= "12" && $time < "17") {
        echo "<center>Goede middag!</center>";
        echo  "<center>Het is nu $time</center>";
        ?>
        <img src="afternoon.png" alt="afternoon">
    <?php
    } else
    if ($time >= "17" && $time < "19") {
        echo "<center>Goede avond!</center>";
        echo  "<center>Het is nu $time</center>";
        ?>
        <img src="evening.png" alt="afternoon">
    <?php
    } else
    if ($time >= "19") {
        echo "<center>Goede nacht!</center>";
        echo  "<center>Het is nu $time</center>";
        ?>
        <img src="night.png" alt="afternoon">
    <?php
    }
    ?>
</body>
</html>