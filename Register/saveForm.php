

<?php
/**
 * Created by PhpStorm.
 * User: Mauro-Alexandre.COST
 * Date: 07.01.2019
 * Time: 11:49
 */
function registerProcess($tableau){
    $file=fopen("ficher.csv", "a");
    foreach($tableau as $valeur){
        echo $valeur."<br>";
        fwrite($file,$valeur.";");

    }
    fwrite($file,"\n");
    fclose($file);
}
function displayRegisterForm(){
    require "formRegister.php";
}
?>