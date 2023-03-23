<!DOCTYPE html>

<?php
$servername = "localhost";
$username = 'root';
$password = '';
$dbname = 'Online_shopping';

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (isset($_POST['signin'])) {
  $email = $_POST['email'];
  $user_password = $_POST['pass'];
  $query = "SELECT email, user_password FROM customers WHERE email=? AND user_password=?";
  $stmt = mysqli_prepare($conn, $query);
  mysqli_stmt_bind_param($stmt, 'ss', $email, $user_password);
  mysqli_stmt_execute($stmt);
  
  if (mysqli_stmt_fetch($stmt)) {
    echo "<script type='text/javascript'>alert('You are successfully Logged In'); window.location.href='store.php';</script>";
  }else {
   
  }
}

?>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>CW-Login</title>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
  <!--  Bootstrap CSS & JavaScript links  -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
  <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="css/style.css" />
</head>

<body>
  <!-- Navbar -->

  <?php require("components/header.php"); ?>


  <!-- LOGIN -->

  <div class="container my-5 py-5">
    <div class="row">
      <div class="col-lg-4"></div>
      <div class="col-lg-4">
        <form class="px-4 py-3" method="POST">
          <h1>Login</h1>
          <div class="mb-3">
            <label for="exampleDropdownFormEmail1" class="form-label">Email address</label>
            <input type="email" class="form-control" id="exampleDropdownFormEmail1" placeholder="email@example.com" name="email" />
          </div>
          <div class="mb-3">
            <label for="exampleDropdownFormPassword1" class="form-label">Password</label>
            <input type="password" class="form-control" id="exampleDropdownFormPassword1" placeholder="Password" name="pass" />
          </div>

          <button type="submit" class="btn btn-dark" name="signin">Sign in</button>
        </form>
        <div class="dropdown-divider"></div>
        <a class="dropdown-item" href="signup.php">New around here? Sign up</a>
      </div>
    </div>
  </div>

</body>

</html>