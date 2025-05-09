<?php 
include 'db.php'; 
$produits = $pdo->query("SELECT * FROM card_information"); 
?>

<!DOCTYPE html>
<html lang="en">
  <head> 
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Shop Homepage - Start Bootstrap Template</title>
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <link href="css/styles.css" rel="stylesheet" />
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-secondary bg-info  ">
      <div class="container px-4 px-lg-5">
        <a class="navbar-brand text-danger" href="#!">Solii shop</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
            <li class="nav-item"><a class="nav-link active" aria-current="page" href="#!">Home</a></li>
            <li class="nav-item"><a class="nav-link" href="#!">About</a></li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Shop</a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="#!">All Products</a></li>
                <li><hr class="dropdown-divider" /></li>
                <li><a class="dropdown-item" href="#!">Popular Items</a></li>
                <li><a class="dropdown-item" href="#!">New Arrivals</a></li>
              </ul>
            </li>
          </ul>
          <form class="d-flex">
            <button class="btn btn-outline-dark" type="submit">
              <i class="bi-cart-fill me-1"></i>
              Cart
              <span class="badge bg-dark text-white ms-1 rounded-pill">0</span>
            </button>
          </form>
          <a href="./login.php" class="btn btn-primary ms-5">Sign Up</a>
        </div>
      </div>
    </nav>
    <header class="bg-info py-5">
      <div class="container px-4 px-lg-5 my-5">
        <div class="text-center text-white">
          <h1 class="display-4 fw-bolder">Soli Shop </h1>
          <p class="lead fw-normal text-white-50 mb-0"> WELCOM TO SOLISHOP </p>
        </div>
      </div>
    </header>
    <section class="py-5">
      <div class="container px-4 px-lg-5 mt-5">
        <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
          <?php foreach ($produits as $key => $value): ?>
            <div class="col mb-5">
              <div class="card h-100">
                <!-- Product image-->
                <img class="card-img-top" src="photo/<?= $value['image'] ?>" />
                <!-- Product details-->
                <div class="card-body p-4">
                  <div class="text-center">
                    <!-- Product title-->
                    <h5 class="fw-bolder"><?= $value['title'] ?></h5>
                    <!-- Product price-->
                    <h1 class="text-success    small"><?= $value['prix'] ?></h1><br>
                    <h1 class="text-black  small"><?= $value['detail'] ?></h1>
                  </div>
                </div>
                <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                  <div class="text-center">
                    <a class="btn btn-outline-dark mt-auto" href="#"> Add to cart</a>
                  </div>
                </div>
              </div>
            </div>
          <?php endforeach; ?>
        </div>
      </div>
    </section>
    <footer class="py-5 bg-info">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; Ad  Website 2024</p>
      </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/scripts.js"></script>
  </body>
</html>
