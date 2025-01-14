<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>navber</title>
    <!--Boosterp Css-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="../fixed_navber/style.css" rel="stylesheet">

  </head>
<body>
  <!--Navber-->
    <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container-fluid">
          <div class="logo">
            <h3 >Soner Hasel</h3>
          
          </div>
        
          
          <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
            <div class="offcanvas-header">
              <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Offcanvas</h5>
              <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
              <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                <li class="nav-item">
                  <a class="nav-link " aria-current="page" href="../slider/index.php">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="../about us/index.php">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " aria-current="page" href="../menupage/menu.php">Menu</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="../gallery/index.php">Gallery</a>
                  </li>
                  
                  <li class="nav-item">
                    <a class="nav-link" href="../contact us/index.php">Contact us</a>
                  </li>
            </div>
          </div>
          <a href="../menupage/cart.php"class=cart-button>Cart</a>
          <a href="../login_from/login.php"class=login-button>Login</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
        </div>
      </nav>

      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
       <script src="script.js"></script>
    </body>
</html>