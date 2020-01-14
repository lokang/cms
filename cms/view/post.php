<div class="title">
<h5><?php echo $postData['name'] ?> <?php echo $postData['title'] ?> <?php echo date('d-m-Y h:i:s a', strtotime($postData['dateCreated'])) ?></h5>
</div>
<p><?php echo nl2br($postData['description'])?></p>

<?php if($this->auth) : ?>
<form action="" method="post">
    <label for="comment">Comment:</label>
    <textarea name="comment"></textarea>
    <button type="submit">Submit</button>
</form>
<?php else : ?>
<p>Please <a href="login.php">login</a> or <a href="register.php"> sign up</a> to add comment</p>
<?php endif;?>
<span id="comment"></span>
<?php if($comments) : ?>
    <?php foreach($comments as $comment) :?>
        <div class="title"><?php echo $comment['name'] ?> <?php echo date('d-m-Y h:i:s a', strtotime($comment['dateCreated'])) ?></div>
        <br>
        <?php echo $comment['comment'] ?>
        <?php if($this->auth['id'] == $comment['userId']): ?>
            <br>
            <a href="updateComment.php?id=<?=$comment['id']?>">Update</a> <a href="destroyComment.php?id=<?=$comment['id']?>" onclick="return confirm('Are you sure you want to delete this comment?')">Delete</a>
        <?php endif ?>
    <?php endforeach; ?>
<?php else :?>
    <p>There are currently no comments.</p>
<?php endif; ?>

