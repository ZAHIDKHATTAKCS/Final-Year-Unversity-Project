<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Add to cart </title>

  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

  <!-- Bootstrap CSS v5.0.2 -->
  <link rel="stylesheet" href="assets/Bootstrap 5/css/bootstrap.min.css" />


  <!-- Animate.css -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">

  <!-- min.js link -->
  <script type="text/JavaScript" src="assets/Bootstrap 5/js/bootstrap.min.js"></script>


  <!-- font awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
    integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />

  <!-- favicon link -->
  <link rel="shortcut icon" href="assets/Icons/Favicons/add to cart.svg" type="image/x-icon">

  <!-- css link -->
  <link rel="stylesheet" href="assets/Custom Css/Add-To-Cart.css" />
</head>

<body class="body text-dark">

  <header class="header w-100 d-flex align-item-center justify-content-between p-1 bg-info">
    <div>
      <a href="home.php">
        <img src="assets/Icons/main_logo.jpeg" style="width: 70px; height: 70px" alt="logo" class="rounded-circle m-1"
          alt="Shop-Logo">
      </a>
    </div>
    <div>
      <img src="assets/Team Members Images/Muhammad Zahid Backend Developer.JPG" style="width: 70px; height: 70px"
        alt="Buyer Image" class="rounded-circle m-1">
    </div>
  </header>

  <div class="container mt-4">
    <h2 class="text-center mb-4 fw-bolder">Your Cart</h2>

    <!-- Product Info Section -->

    <!-- image, description and remove button row -->
    <div class="row d-sm-block d-md-flex justify-content-md-between align-items-center p-2 m-2 bg-light shadow-lg">
      <!-- image -->
      <div class="img col-md-3 col-sm-8 d-flex justify-content-center align-items-center p-3 border-primary ">
        <img src="assets/Icons/Cameras/camera1.png" style="width: 100px; height: 70px" class="img-fluid"
          alt="Product Image">
      </div>
      <div class="img-description  col-md-3 col-sm-8 justify-content-center align-items-center text-center fw-bolder ">
        <h4>Product Name</h4>
        <p>Product Description: Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet maiores cupiditate architecto aliquam reprehenderit fugit.</p>
        <p> <span class="bg-danger text-white rounded p-1"> $100 </span></p>
      </div>

      <div class="remove col-md-3 col-sm-8 justify-content-center align-items-center text-center">
        <button class="btn btn-danger">Remove from Cart</button>
      </div>
    </div> <br>

    <!-- Product Summary row -->

    <div class="row d-sm-block d-md-flex justify-content-center align-items-center p-2 m-2 fw-bolder bg-light shadow-lg ">
      <!-- Summary Section -->
      <div class="summary col-8 col-md-8 col-sm-8  justify-content-center align-items-center text-center">
        <div>
          <h5>Summary of Product Details</h5>
          <p>Product Name</p>
          <p>Quantity: 1</p>
          <p>Price: $100</p>
        </div>
        <div class="totals">
          <p>Subtotal: $100</p>
          <h5><span class="bg-danger text-white rounded p-1">Total: $100</span></h5>
        </div>


        <div class="text-center mt-4">
          <button class="btn btn-success">View Cart</button>
        </div>
      </div>
    </div>


  </div>




</body>

</html>