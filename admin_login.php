<?php

include 'connect.php';

session_start();
if(isset($_POST['submit'])){
    $name = $_POST['username'];
    $name = filter_var($name, FILTER_SANITIZE_STRING);
    $pass = sha1($_POST['password']);
    $pass = filter_var($pass, FILTER_SANITIZE_STRING);
    $select_admin = $conn->prepare('SELECT * FROM "admin" WHERE name = ? AND password = ?');
    $select_admin->execute([$name, $pass]);

    if($select_admin->rowCount() > 0){
        $fetch_admin_id = $select_admin->fetch(PDO::FETCH_ASSOC);
        $_SESSION['admin_id'] = $fetch_admin_id['id'];
        header('location:index.html');
        $message[] = 'login succesfully';
    }else{
        $message[] = 'wrong username or password';
    }
}

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

<?php
    if(isset($message)){
        foreach($message as $message){
            echo '
            <div class="message">
            <span>.$message</span>
            <i class="fas fa-times" onlick="this.parentElement.remove();"></i>
            ';
        }
    }
?>


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
