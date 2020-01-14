<form action="" method="post">
    <label for="slug">Slug:</label>
    <input type="text" name="slug" value="<?=$edit['slug']?>" placeholder="">
    <br>
    <label for="description">Description:</label>
    <textarea name="description" placeholder=""><?=$edit['description']?></textarea>
    <button type="submit">Submit</button>
</form>