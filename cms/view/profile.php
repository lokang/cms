<form method="post" action="">
    <label for="name">Name:</label>
    <input type="text" name="name" value="<?=$this->auth['name'] ?>">
    <br>
    <label for="email">Email:</label>
    <input name="email" value="<?=$this->auth['email'] ?>" type="email">
    <br>
    <label for="newPassword" >newPassword</label>
    <input name="newPassword" type="password">
    <br>
    <p>Enter New password if you want to change it.</p>
    <button type="submit">Submit</button>
</form>