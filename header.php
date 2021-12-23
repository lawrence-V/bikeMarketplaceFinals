
<?php

if (!isset($_SESSION)) {
    session_start();
}

if (isset($_SESSION['UserLogin'])) {
    echo "Welcome ".$_SESSION['UserLogin'];
} else {
    echo "WELCOME Guest";
}


// if(isset($_SESSION['Access']) && $_SESSION['Access'] == "administrator"){
//   echo "WElcome ".$_SESSION['UserLogin'];
// }else {
//   echo header("Location: user.php");
// }
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./css/style.css" />
    <link rel="shortcut icon" href="./assets/logo.png" type="image/png"></link>
    
    <link
      rel="stylesheet"
      href="https://unpkg.com/boxicons@latest/css/boxicons.min.css"
    />
    <title>Bike Marketplace</title>
  </head>
  <body>
    <!-- Header -->

    <header class="header" id="header">
      <nav class="nav container">
        <a href="#" class="nav_logo">
          <img src="./assets/logo.png" alt="" class="img-logo" />
          Bike Marketplace
        </a>

        <div class="nav_menu" id="nav-menu">
          <ul class="nav_list">
            <li class="nav_item">
              <a href="./index.php" class="nav_link">Home</a>
            </li>
            <li class="nav_item">
              <a href="./shop.php" class="nav_link">Shop</a>
            </li>

            <li class="nav_item">
              <a href="./insert.php" class="nav_link">Add Product</a>
            </li>
            <?php if(isset($_SESSION['UserLogin'])){?>
            <li class="nav_item">
              <a href="./logout.php" class="nav_link">Log-out</a>
            </li>
            <?php } else{ ?>    
               <li class="nav_item">
                <a href="./login.php" class="nav_link">Log-in</a>
            </li> 
          <?php } ?>
       
          </ul>

          <div class="nav_close" id="nav-close">
            <i class="bx bx-x"></i>
</div>

          <img src="./assets/main-pic.png" alt="" class="nav_img" />
        </div>

        <div class="nav_toggle" id="nav-toggle">
          <i class="bx bx-grid-alt"></i>
        </div>
      </nav>
    </header>
    
<script src="./js/index.js"></script>