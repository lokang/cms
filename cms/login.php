<?php
/**
 * Created by PhpStorm.
 * User: lokang
 * Date: 4/1/20
 * Time: 1:58 AM
 */
include_once("inc/inc.php");
$user = new User();
$home = new HomeController();
$home->login();