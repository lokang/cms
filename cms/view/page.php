<?php if($this->auth['id'] == 1) : ?>
<?php endIf ?>

<?php
$slug = $_GET['url'];
$pages = new Pages();
$page = $pages->page($slug);
echo nl2br($page['description']);
?>
<?php if($this->auth['id'] == 1) : ?>
    <br>
<right><a href="editPage.php?url=<?=$page['slug'];?>"> Edit</a> <a href="destroyPage.php?id=<?=$page['id'];?>" onclick="return confirm('Are you sure you want to delete?')"> Delete</a> <a href="createPage.php">Create</a></right>
<?php endif ?>