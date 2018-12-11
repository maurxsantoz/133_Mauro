<?php
/**
 * Author   : nicolas.glassey@cpnv.ch
 * Project  : 133 - Calendar - Step 01
 * Created  : 09.12.2018 - 19h:30
 *
 * Last update :    [01.12.2018 author]
 *                  [add $logName in function setFullPath]
 * Git source  :    [link]
 */


//region global variables
$title = "Calendar";                                  //html title page
const monthNames=array("January","February","March","April","May","June","July","August","September","October","November","December");
const monthDays=array(31,28,31,30,31,30,31,31,30,31,30,31);
//set Timestamp(Date("j/n/o"));
$date=Date($timestamp=time());
$month=Date("m",$date);
$year=$date->format("m");
//endregion

//region initialization
//endregion

//region entry point
//endregion

//region functions
//endregion

?>

<!--region gabarit-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>
        <?php
        echo $title;
        ?>
    </title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<!--region calendar-->
<div class="month">
    <ul>
        <li><?php
            echo $month;
            ?><br><?php
            echo $year;
            ?></li>
    </ul>
</div>
<ul class="weekdays">
    <li>Mo</li>
    <li>Tu</li>
    <li>We</li>
    <li>Th</li>
    <li>Fr</li>
    <li>Sa</li>
    <li>Su</li>
</ul>
<ul class="days">
    <li>1</li>
    <li>2</li>
    <li>3</li>
    <li>4</li>
    <li>5</li>
    <li>6</li>
    <li>7</li>
    <li>8</li>
    <li>9</li>
    <li><span class="active">10</span></li>
    <li>11</li>
</ul>
<!--endregion-->
</body>
</html>
<!--endregion-->