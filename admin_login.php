<?php
include 'connect.php';
ob_start();
session_start();

if(isset($_POST['submit'])){
    if($_POST['name']=="" or $_POST['password']==""){
      echo"<center><h1>Username or Password cannot be empty</h1></center>";
    } else{
        $name = strip_tags(trim($_POST["name"]));
        $pass = strip_tags(trim($_POST["password"]));
        $query=$db->prepare("SELECT * FROM `admin` WHERE name = ? AND password = ?");
        $query->execute(array($name,$pass));
        $control=$query->fetch(PDO::FETCH_OBJ);
        IF($control>0){
            $_SESSION["name"]=$name;
            header("Location:dashboard.php");
            exit();
        }
        echo "<center><h1>Username or Password is incorrect</h1></center>";
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
            <span>'.$message.'</span>
            <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
            </div>
            ';
        }
    }
?>


<section class="form-container">
    <form action="" method="POST">
            <h3>login now</h3>
            <input type="text" name="name" required placeholder="enter your username" maxlength="20"  class="box" oninput="this.value = this.value.replace(/\s/g, '')">
            <input type="password" name="password" required placeholder="enter your password" maxlength="20"  class="box" oninput="this.value = this.value.replace(/\s/g, '')">
            <input type="submit" value="login now" name="submit" class="btn">
    </form>
</section>
</body>
</html>
