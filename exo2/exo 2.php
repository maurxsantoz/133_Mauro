<?php
/**
 * Created by PhpStorm.
 * User: Mauro-Alexandre.COST
 * Date: 26.11.2018
 * Time: 10:32
 */
date_default_timezone_set("Europe/Paris");
//Saturday 17 November 2018
echo date("l j F Y") . "\n";
//Nov 17th 2018
echo date("M jS Y") . "\n";
//17/11/18 11:16 pm
echo date("j/m/y g:i a" ) . "\n";
//17 Nov 2018, 23:43:7
echo date("j M Y, g:i:s" ) . "\n";
//Sat, 17 Nov 2018 23:48:47 +0100
echo date(DATE_RFC822) . "\n";
?>