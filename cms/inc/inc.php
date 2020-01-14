<?php
session_start();
spl_autoload_register(function ($class) {
    if(file_exists('model/' . $class . '.php')){
        include 'model/' . $class . '.php';
    }else{
        include 'controller/' . $class .'.php';
    }
});
