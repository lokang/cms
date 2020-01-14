<?php
include_once ("inc/inc.php");
$user = new UserController();
$users = $user->users();