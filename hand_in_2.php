<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login.css" />
    <title>Document</title>
</head>

<body>
    <?php
    $username = $_POST["uname"];
    $password = $_POST["psw"];

    if ($username == "HejHej" && $password == "abc123") {
        echo "<h1>Welcome</h1><br><h2>Login was a success</h2>";
    } else {
        echo "<h1>Access denied</h1>";
    }
    ?>

    <a href="login.html">Back to main site</a>
</body>

</html>