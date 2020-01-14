<?php
include_once ("inc/inc.php");
$update = new PostController();
$update->update($_GET['id']);