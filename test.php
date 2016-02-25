<?php
/**
 * Created by PhpStorm.
 * User: Mohamed
 * Date: 25/02/16
 * Time: 20:49
 */
session_start();
echo 'ok';
if(!function_exists('set_flash')){
    function set_flash($message, $type= 'info'){
            $_SESSION['notification']['message']=$message;
            $_SESSION['notification']['type']= $type;

    }
}

set_flash('tout va bien');

print_r($_SESSION);