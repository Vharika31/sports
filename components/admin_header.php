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

   <div class="logo">
         <a href="dashboard.php"> <img src="../images/single21.png" alt="">
         </a>
      </div>
    

      <nav class="navbar">
         <a href="../admin/dashboard.php">Home</a>
         <a href="../admin/products.php">Products</a>
         <a href="../admin/placed_orders.php">Orders</a>
         <!-- <a href="../admin/admin_accounts.php">Admins</a> -->
       
      </nav>

      <div class="icons">
         <div id="menu-btn" class="fas fa-bars"></div>
         <div id="user-btn" class="fas fa-user-circle"></div>
      </div>

      <div class="profile">
         <?php
            $select_profile = $conn->prepare("SELECT * FROM `admins` WHERE id = ?");
            $select_profile->execute([$admin_id]);
            $fetch_profile = $select_profile->fetch(PDO::FETCH_ASSOC);
         ?>
         <p><?= $fetch_profile['firstName']; ?></p>
         <!-- <a href="../admin/update_profile.php" class="btn">update profile</a> -->
         <div class="flex-btn">
            <a href="../admin/register_admin1.php" class="option-btn">register</a>
            <!-- <a href="../admin/admin_login.php" class="option-btn">login</a> -->
         </div>
         <a href="../components/admin_logout.php" class="delete-btn" onclick="return confirm('logout from the website?');">logout</a> 
      </div>

   </section>

</header>