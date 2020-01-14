<form action="" method="post">
        <label for="email">Enter Email:</label>
        <input type="text" name="email" id="email" placeholder="please enter email" value="<?=$this->value('email'); ?>" required>
        <br>
    <label for="message">Message:</label>
        &nbsp; &nbsp;<textarea class="form-control" name="message" id="message" placeholder="Please enter message" required><?=$this->value('message'); ?></textarea>
    <br>
        <label for="captcha">Captcha:</label>
        <strong>(<?=$_SESSION['random'] ?>)</strong>
        <input type="text" class="form-control" name="captcha" id="captcha" placeholder="Enter the number above" required>
    <br>
    <button class="btn btn-secondary" type="submit">Send</button>
</form>