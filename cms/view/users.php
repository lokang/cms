<table>
    <thead>
    <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Action</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach($users as $user) : ?>
        <tr>
            <td><?=$user['name']?></td>
            <td><?=$user['email']?></td>
            <td><a href="destroyUser.php?id=<?=$user['id'] ?>" onclick="return confirm('Are you sure you want to delete ' + '<?=$user['name']?>' + '?')">Delete</a></td>
        </tr>
    <?php endForEach ?>
    </tbody>
</table>