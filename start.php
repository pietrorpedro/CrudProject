<?php
//banco de dados:
include_once 'config.php';

//autoloader das classes:
spl_autoload_register(
    function($class){
        require "class/$class.class.php";
    }
);