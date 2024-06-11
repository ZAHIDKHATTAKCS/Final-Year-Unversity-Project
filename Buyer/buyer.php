<!DOCTYPE html>
<html lang="en">

<head>
  <title>Buyer Sign up</title>
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

  <!-- Bootstrap CSS v5.0.2 -->
  <link rel="stylesheet" href="../assets/Bootstrap 5/css/bootstrap.min.css" />

  <!-- Bootstrap 4 link -->
  <link rel="stylesheet" href="../assets/Bootstrap 4/css/bootstrap.min.css" />

  <!-- font awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
    integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />

  <!-- Animate.css -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

  <!-- min.js link -->
  <script type="text/JavaScript" src="../assets/Bootstrap 5/js/bootstrap.min.js"></script>

  <!-- font awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
    integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />

  <!-- css link -->
  <link rel="stylesheet" href="../assets/Custom Css/fyp.css" />
</head>

<body class="body">

  <nav class="navbar w-100 navbar_container">
    <div class="container-fluid container-md d-flex d-sm-flex justify-content-sm-around justify-content-md-between">
      <!-- Logo -->
      <img src="../assets/Icons/main_logo.jpeg" style="width: 80px; height: 70px" alt="logo" class="rounded" />
      <!-- User Icon -->
      <div>
        <div class="dropdown">
          <img src="../assets/Icons/User icon.png" alt="..." width="70px" class="dropdown-toggle me-sm-5" type="button"
            id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false" />
          <ul class="dropdown-menu" style="left: auto; right: 0;" aria-labelledby="dropdownMenuButton1">
            <li>
              <a class="dropdown-item" href="../Seller/seller signin.php">Seller</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </nav>



  <!-- Sign up Form -->
  <div class="row d-flex justify-content-center w-100">
    <form class="col-11 col-sm-8 col-md-4 form border border-danger mb-3 text-dark rounded-2 ">
      <h3 class="mb-5 text-dark">Create account as a Buyer</h3>
      <!-- Name -->
      <div class="input-group mb-3 ">
        <i class="fa-regular fa-user input-group-text"></i>
        <input type="text" name="username" class="form-control" placeholder="Enter your Full Name" required />
      </div>


      <!-- Email -->
      <div class="input-group">
        <i class="fa-regular fa-envelope input-group-text"></i>
        <input type="email" name="email" class="form-control" placeholder="Enter your Email" required />
      </div>

      <!-- Phone -->
      <div class="input-group mt-3">
        <i class="fas fa-phone input-group-text"></i>
        <input type="phone" name="phone" class="form-control" placeholder="Enter your Phone Number" required />
      </div>


      <!-- Password -->
      <div class="mt-3 input-group">
        <i class="fa-solid fa-lock input-group-text"></i>
        <input type="password" name="" class="form-control" placeholder="Create Password" required />
      </div>


      <!-- Confirm Password -->
      <div class="mt-3 input-group">
        <i class="fa-solid fa-lock input-group-text"></i>
        <input type="password" name="cpassword" class="form-control" placeholder="Confirm your Password" required />
      </div>

      <!-- Image -->
      <div class="input-group mt-3">
        <input type="file" name="profile" class="form-control" required />
      </div>


      <!-- Sign in Button -->
      <div class="d-flex justify-content-center">
        <button type="submit" class="mt-3 btn btn-primary w-100">
          Create Account
        </button>
      </div>

      <!-- already have account -->
      <p class="d-flex justify-content-center mt-3">
        <span>
          Already have an account?
        </span>
        <a href="buyer signin.php" class="ml-2">Sign in</a>
      </p>
    </form>
  </div>
</body>

</html>