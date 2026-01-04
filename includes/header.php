<?php
 session_start();

 $username = $_SESSION['username'] ?? "Sign in";
 $cartCount = $_SESSION['cart_count'] ?? 0;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ZenMart - Online Shopping</title>
    
    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!--Icons-->
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="/ZENMART/assets/css/styles.css">
</head>
<body>
  <!--main header-->  
<header>
   <nav class="navbar bg-body-tertiary">
     <div class="container-fluid">

    <!--<a class="navbar-brand" href="#">Navbar</a>-->
      <a href="#" style="text-decoration:none">
                   <img class="logo-image" src="../assets/images/logo.png"style="width:80px">
                    <span class="logo-text">ZenMart</span>
      </a>

      <form class="d-flex zenmart-search mx-auto" action="/zenmart/includes/products.php" method="GET">
                 <!-- Category Dropdown -->
                    <select class="form-select category-select" name="category">
                          <option value="all">All</option>
                          <option value="electronics">Electronics</option>
                          <option value="fashion">Fashion</option>
                          <option value="books">Books</option>
                          <option value="groceries">Groceries</option>
                      </select>

                     <!-- Search Input -->
                     <input type="text" name="search" class="form-control form-control-lg search-input" placeholder="Search Products Here">
                     <!-- Search Button -->
                     <button class="btn search-btn" type="submit">
                        <i class="bi bi-search"></i>
                     </button>
      </form>


    <ul class="navbar-nav flex-row align-items-center gap-3">
      <!--<li class="nav-item">
        <a class="nav-link active" href="#">Home</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>-->

   <li class="nav-item dropdown">
  <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">
    <small class="text-white">
      Hello,
      <?= isset($_SESSION['user']) ? $_SESSION['user'] : 'Sign in'; ?>
    </small><br>
    <strong class="text-white">Account & Lists</strong>
  </a>

  <ul class="dropdown-menu">
    <?php if (!isset($_SESSION['user'])) { ?>
      <li><a class="dropdown-item" href="login.php">Sign in</a></li>
      <li>
        <small class="dropdown-item-text">
          New customer?
          <a href="register.php">Start here</a>
        </small>
      </li>
    <?php } else { ?>
      <li><h6 class="dropdown-header">Your Account</h6></li>
      <li><a class="dropdown-item" href="orders.php">Your Orders</a></li>
      <li><a class="dropdown-item" href="profile.php">Profile</a></li>
      <li><hr class="dropdown-divider"></li>
      <li><a class="dropdown-item text-danger" href="logout.php">Logout</a></li>
    <?php } ?>
  </ul>
</li>

    <li class="nav-item">
        <a class="nav-link active text-white text-decoration-none" href="#">Returns & Orders</a>
      </li>
    
    <li class="nav-item">
        <a href="cart.php" class="cart-link">
   <i class="bi bi-cart"></i>
   <span class="cart-count">Cart
      <?= $_SESSION['cart_count'] ?? 0 ?>
   </span>
</a>

      </li>  

    
    </ul>

    

  </div>
</nav>


</header> 
                    
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
       
</body>
</html>
    
