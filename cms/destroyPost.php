<?php
include_once ("inc/inc.php");
$post = new PostController();
$destroy = $post->destroy($_GET['id']);