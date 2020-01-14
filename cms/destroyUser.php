<?php
include_once ("inc/inc.php");
$user = new UserController();
$account = $user->destroyUser($_GET['id']);