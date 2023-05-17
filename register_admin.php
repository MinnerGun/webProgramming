<?php

include 'connect.php';
ob_start();
session_start();


if(isset($_POST['submit'])){

    $name = $_POST['name'];
    $name = filter_var($name, FILTER_SANITIZE_STRING);
    $pass = ($_POST['pass']);
    $pass = filter_var($pass, FILTER_SANITIZE_STRING);
    $cpass = ($_POST['cpass']);
    $cpass = filter_var($cpass, FILTER_SANITIZE_STRING);
 
    $select_admin = $db->prepare("SELECT * FROM `admin` WHERE name = ?");
    $select_admin->execute([$name]);
 
    if($select_admin->rowCount() > 0){
        echo "<center><h1>Username already existed!</h1></center>";
    }else{
       if($pass != $cpass){
        echo "<center><h1>Password not matching!</h1></center>";
       }else{
          $insert_admin = $db->prepare("INSERT INTO `admin`(name, password) VALUES(?,?)");
          $insert_admin->execute([$name, $cpass]);
          echo "<center><h1>Registered succesfully!</h1></center>";
          header("Location:dashboard.php");
          exit();
       }
    }
 
 }
 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="admin_style.css">
</head>

<body>
<section class="form-container">
   <form action="" method="post">
      <h3>register now</h3>
      <input type="text" name="name" required placeholder="enter your username" maxlength="20"  class="box" oninput="this.value = this.value.replace(/\s/g, '')">
      <input type="password" name="pass" required placeholder="enter your password" maxlength="20"  class="box" oninput="this.value = this.value.replace(/\s/g, '')">
      <input type="password" name="cpass" required placeholder="confirm your password" maxlength="20"  class="box" oninput="this.value = this.value.replace(/\s/g, '')">
      <input type="submit" value="register now" class="btn" name="submit">
   </form>
</section


    <script src="admin_script.js"></script>
</body>
</html>
