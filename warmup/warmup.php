<?php
/**
 * Created by PhpStorm.
 * User: Mauro-Alexandre.COST
 * Date: 04.12.2018
 * Time: 16:22
 */
/*D�claration des variables*/
$resultOperation=0;//le r�sultat obtenu suite au calcul
$op1 = 3;//premi�re op�rande qui sera utilis�e pour les tests
$op2 = 7;//deuxi�me op�rande qui sera utilis�e pour les tests

//on test et affiche l'addition
$resultOperation = add($op1, $op2);
printf("Le calcul est ". $op1 ." + ". $op2 ." = ". $resultOperation ."\n");

//on test et affiche la soustraction
$resultOperation = sub($op1, $op2);
printf("Le calcul est ". $op1 ." - ". $op2 ." = ". $resultOperation ."\n");

//on test et affiche la multiplication
$resultOperation = mul($op1, $op2);
printf("Le calcul est ". $op1 ." * ". $op2 ." = ". $resultOperation ."\n");

return 0;

function add($op1, $op2)
{
    $tempAdd = 0;
    $tempAdd = $op1 + $op2;
    return $tempAdd;
}

function sub($op1, $op2)
{
    $tempSub = 0;
    $tempSub = $op1 - $op2;
    return $tempSub;
}

function mul($op1, $op2)
{
    $tempMul = 0;
    $tempMul = $op1 * $op2;
    return $tempMul;
}
?>