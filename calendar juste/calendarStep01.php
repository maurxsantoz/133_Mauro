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
$monthDays = array(0, 31, 28, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31);
$weekDays="";
$days="";
setlocale(LC_TIME, "FR");
$date = Date($timestamp = time());
$day = Date("j", $date);
$month = strftime("%B", $date);
$year = Date("Y", $date);
$monthNb = Date("n", $date);
//fn leap year
$leap = Date("L", $date);
for ($i = 0; $i <= 6; $i++) {
    $weekDays+= "<li>" . strftime("%a", strtotime("+$i day", strtotime('Monday'))) . "</li>";
}
if ($leap == 1) {
    $monthDays[2] = 29;
} else {
    $monthDays[2] = 28;
}
//fn decalage
$tempdecal = Date("w", strtotime($year . "-" . $monthNb . "-1"));
switch ($tempdecal) {
    case 0:
        $decalage = 6;
        break;
    case 1:
        $decalage = 0;
        break;
    case 2:
        $decalage = 1;
        break;
    case 3:
        $decalage = 2;
        break;
    case 4:
        $decalage = 3;
        break;
    case 5:
        $decalage = 4;
        break;
    case 6:
        $decalage = 5;
        break;
}
for ($i = 0; $i < $decalage; $i++) {
    $days+= "<li> </li>";
}
for ($i = 1; $i <= $monthDays[$monthNb]; $i++) {
    if ($i != $day) {
        $days+= "<li>" . $i . "</li>";
    } else {
        $days+= "<li><span class='active'>" . $i . "</span></li>";
    }
}
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
<html lang="fr">
<head>
    <meta charset="ISO-8859-1">
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
    <?php
        echo $weekDays;
    ?>
</ul>
<ul class="days">
    <?php
        echo $days;
    ?>
</ul>
<!--endregion-->
</body>
</html>
<!--endregion-->