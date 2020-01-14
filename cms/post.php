<?php
include_once ("inc/inc.php");
$post = new PostController();
$post->get($_GET['id']);