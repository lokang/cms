<?php
$posts = new Posts();
$comment = new Comments();
foreach($posts->post() as $post){ ?>
    <?php $commentCount = $comment->countComments($post['id']); ?>
    <div class="title">
        <strong><a href="post.php?id=<?=$post['id'] ?>"> <?php echo $post['name'] ?> <?php echo $post['title']; ?></a></strong> <?php echo date('d-m-Y h:i:s a', strtotime($post['dateCreated']))."<br>"; ?>
    </div>
    <?php
    echo nl2br($post['description']);
    ?>
    <right><a href="post.php?id=<?=$post['id']?>#comment"> Comments(<?=$commentCount?>)</a></right>
    <?php if($this->auth['id'] == 1) : ?>
    <right><a href="createPost.php">Create</a> <a href="update.php?id=<?=$post['id'] ?>">Edit</a> <a href="destroyPost.php?id=<?=$post['id'] ?>" onclick="return confirm('Are you sure you want to delete the post?')">Delete</a> </right>
        <?php endIf ?>
    <br><br>
<?php } ?>

