<?php
/**
 * Created by PhpStorm.
 * User: lokang
 * Date: 5/1/20
 * Time: 2:17 AM
 */
include_once ("inc/inc.php");
$page  = new PageController();
$page->destroy($_GET['id']);