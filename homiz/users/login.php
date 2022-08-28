<?php
    require_once __DIR__ . '/includes/functions.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign</title>
</head>

<body>
    <div>
        <form action="includes/login.php" method="post">
            <div>
                <label for="email">Email</label>
                <input id="email" type="text" name="email" value="" placeholder="Email"/>
            </div>
            <div>
                <label for="password">Password</label>
                <input type="password" name="password" />
            </div>
            <div><input type="submit" value="login">sigin</div>
        </form>
    </div>
</body>

</html>
