<?php
/**
 * Created by PhpStorm.
 * User: lokang
 * Date: 5/1/20
 * Time: 1:42 AM
 */
include_once ("inc/inc.php");
$page = new PageController();
$page->edit($_GET['url']);