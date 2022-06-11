<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        form input{
            display: block;
        }
    </style>
</head>
<body>
    <h1>Signup</h1>
    <form action="includes/signup.inc.php" method="POST">
        <input type="text" name="uid" placeholder="Username">
        <input type="password" name="pwd" placeholder="Password">
        <input type="password" name="pwdrepeat" placeholder="Password repeat">
        <input type="text" name="email" placeholder="Email">
        <br>
        <button type="submit" name="submit">Sign up</button>
    </form>
    <h1>Login</h1>
    <form action="includes/login.inc.php" method="POST">
        <input type="text" name="uid" placeholder="Username">
        <input type="password" name="pwd" placeholder="Password">
        <br>
        <button type="submit" name="submit">Login</button>
    </form>
</body>
</html>