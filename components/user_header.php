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

<header class="header">

   <section class="flex">

      <a href="index.php" class="logo">Elgato La Fonte</a>

      <nav class="navbar">
         <a href="index.php">DASHBOARD</a>
         <a href="orders.php">ORDER</a>
         <a href="menu.php">MENU</a>
         <a href="about.php">ABOUT US</a>
      </nav>

      <div class="icons">
         <?php
            $count_cart_items = $conn->prepare("SELECT * FROM `cart` WHERE user_id = ?");
            $count_cart_items->execute([$user_id]);
            $total_cart_items = $count_cart_items->rowCount();
         ?>
         <a href="search.php"><i class="fa-solid fa-magnifying-glass-dollar"></i></a>
         <a href="cart.php"><i class="fa-solid fa-basket-shopping"></i></i><span>(<?= $total_cart_items; ?>)</span></a>
         <div id="user-btn" class="fa-solid fa-users"></div>
         <div id="menu-btn" class="fa-solid fa-users"></div>
      </div>

      <div class="profile">
         <?php
            $select_profile = $conn->prepare("SELECT * FROM `users` WHERE id = ?");
            $select_profile->execute([$user_id]);
            if($select_profile->rowCount() > 0){
               $fetch_profile = $select_profile->fetch(PDO::FETCH_ASSOC);
         ?>
         <p class="name"><?= $fetch_profile['name']; ?></p>
         <div class="flex">
            <a href="profile.php" class="btn">Profile</a>
            <a href="components/user_logout.php" onclick="return confirm('logout from this website?');" class="delete-btn">logout</a>
         </div>
         <?php
            } else{
         ?>
            <p class="name">Please Login First!</p>
            <a href="login.php" class="btn">Login</a>
            <a href="../admin/admin_login.php" class="hehe-btn">Admin</a>
         <?php
          }
         ?>
      </div>

   </section>

</header>

