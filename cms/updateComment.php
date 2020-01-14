<?php
include_once ("inc/inc.php");
$comment = new CommentController();
$comment->update($_GET['id']);