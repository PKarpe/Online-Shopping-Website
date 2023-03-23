<?php
/* Navbar */
echo '


<nav class="navbar navbar-expand-sm navbar-dark bg-dark sticky-top" >
  <div class="container">
    <!-- Brand -->
    <a href="#about" class="navbar-brand">
      <img src="images/CW.png" alt="CW Logo" loading="lazy" style="width: 200px; max-width: 100%; height: auto" /></a>

    <!-- Burger Menu -->
    <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#nav" aria-controls="nav" aria-label="Expand Navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

  

    <!-- Nav items -->
    <div class="collapse navbar-collapse " id="nav">
      <ul class="navbar-nav text-center">
        <li class="nav-item ">
          <a href="index.php" class="nav-link  " aria-current="page">Home</a>
        </li>
        <li class="nav-item">
          <a href="index.php#about" class="nav-link " aria-current="page">About</a>
        </li>
        <li class="nav-item">
          <a href="store.php" class="nav-link" aria-current="page">Store</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="login.php" aria-current="page">Login</a>
        </li>

        <li class="nav-item">
          <a href="cart.php" class="nav-link" aria-current="page">
            <i  class="fa fa-shopping-cart" style="font-size: 24px"></i>
          </a>
        </li>


        
      </ul>
    </div>
  </div>
</nav>

'
?>