<form action="" method="post">
    <label for="title">Title:</label>
    <input type="text" name="title" value="<?=$postData['title'] ?>">
    <br>
    <label for="description">Description:</label>
    <textarea name="description"><?=$postData['description'] ?></textarea>
    <br>
    <button type="submit">Submit</button>
</form>