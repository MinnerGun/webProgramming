<?php

include 'connect.php'

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="admin_style.css">
</head>

<body>
    <section class="form-container">
        <form action="" method="POST">
            <h3>login now</h3>
            <input type="text" name="username" maxlength="20" required placeholder="enter you username" class="box" oninputs="this.value = this.value.replace(/\s/g, '')">
            <input type="password" name="password" maxlength="20" required placeholder="enter you password" class="box" oninputs="this.value = this.value.replace(/\s/g, '')">
            <input type="submit" value="login now" name="submit" class="btn">
    </form>
    </section>
</body>
</html>
