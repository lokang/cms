<?php echo $this->errors() ?>
<form action="" method="post">
    <label for="email">Email:</label>
    <input name="email" type="email">
    <br>
    <label for="password">Password:</label>
    <input name="password" type="password">
    <br>
    <button type="submit">Login</button>
</form>
<a href="passwordRecovery.php">Forgot Password?</a>