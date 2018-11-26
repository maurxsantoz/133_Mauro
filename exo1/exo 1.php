<?php
/**
 * Created by PhpStorm.
 * User: Mauro-Alexandre.COST
 * Date: 20.11.2018
 * Time: 16:23
 */
$value=20;
$step=3;
$i;
for($i=0;$i<10;$i++){
    if($value>=30){
        echo("Le nombre vaut .$value.<br>");
    }else{
        echo("nombre trop petit <br>");
    }
    $value+=$step;
}

?>