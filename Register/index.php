<?php
/**
 * Created by PhpStorm.
 * User: Mauro-Alexandre.COST
 * Date: 21.01.2019
 * Time: 10:35
 */
require "saveForm.php";
    if(isset($_GET["action"])){
        $action=$_GET['action'];
        switch ($action) {
            case 'register' :
                registerProcess($_POST);
                break;
            default :
                displayRegisterForm();
                break;
        }
    }else{
        displayRegisterForm();
    }
?>