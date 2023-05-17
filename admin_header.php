<?php
    $id = ("SELECT * FROM `admin` WHERE id = ?");
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

<header class="header">
    <section class="flex">    
        <a href="dashboard.php" class="logo">Admin<span>Panel</span></a>
        <nav class="navbar">
            <a href="dashboard.php">Home</a>
            <a href="products.php">Products</a>
            <a href="placed_orders.php">Orders</a>
            <a href="admin_accounts.php">Admin_account</a>
            <a href="services.php">Services</a>
        </nav>
        <div class="icons">
            <div id="menu-btn" class="fas fa-bars"></div>
            <div id="user-btn" class="fas fa-user"></div>
        </div>
        <div class="profile">
            <?php
                $select_profile = $db->prepare("SELECT * FROM `admin` WHERE id = ?");
                $select_profile->execute([$id]);
                $fetch_profile = $select_profile->fetch(PDO::FETCH_ASSOC);
            ?>
            <p><?= $fetch_profile['name'] ??= 'admin panel'; ?></p>
            <a href="update_profile.php" class="btn">Update Profile</a>
            <div class="flex-btn">
            <a href="admin_login.php" class="option-btn">Login</a>
            <a href="register_admin.php" class="option-btn">Register</a>
            </div>
            <a href="admin_logout.php" class="delete-btn" onclick="return confirm('logout from the website?');">Logout</a> 
        </div>

    </section>
</header>