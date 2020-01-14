<?php
include_once ("inc/inc.php");
$delete = new CommentController();
$deleteComment = $delete->destroy($_GET['id']);