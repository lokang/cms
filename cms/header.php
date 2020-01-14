<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/stylesheet.css" type="text/css">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title><?=$title; ?></title>
</head>
<header>
    &nbsp; &nbsp;<a href="/"> <img src="images/logo.png" width="60" height="50" alt="logo"></a>
    <logo>
        <br>
        <a href="/">Home</a>
        <a href="page.php?url=about">About</a>
    </logo>
    <menu>
        <?php if($this->auth['id'] == 1) : ?>
            <a href="users.php">Users</a>
        <?php endif ?>
        <?php if($this->auth):?>
        <a href="account.php">Account</a>
        <a href="profile.php">Profile</a>
        <a class="red" href="logout.php">Logout</a>
        <?php else: ?>
        <a href="register.php">Register</a>
        <a href="login.php">Login</a>
        <?php endIf ?>
    </menu>
</header>
<body>
<main>