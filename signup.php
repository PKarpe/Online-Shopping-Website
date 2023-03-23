<!DOCTYPE html>

<?php
$servername = "localhost";
$username = 'root';
$password = '';
$dbname = 'Online_shopping';

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (isset($_POST['signup'])) {
  $email = $_POST['email'];
  $user_password = $_POST['pass'];
  $name = $_POST['name'];
  $address = $_POST['addr'];
  $UPI = $_POST['upi'];
  $Gender = $_POST['gender'];
  $PhoneNo = $_POST['phone'];
  $query = 'INSERT INTO customers (email, user_password, name, address, UPI, Gender, PhoneNo) VALUES(?,?,?,?,?,?,?)';
  $stmt = mysqli_prepare($conn, $query);
  mysqli_stmt_bind_param($stmt, 'ssssssi', $email, $user_password, $name, $address, $UPI, $Gender, $PhoneNo);
  mysqli_stmt_execute($stmt);
 echo "<script type='text/javascript'>alert('Signup is Successful'); window.location.href='login.php';</script>";
}
?>


<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>CW-Signup</title>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />

  <!--  Bootstrap CSS & JavaScript links  -->

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
  <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="css/style.css" />
</head>

<body>
  <!-- Navbar -->

  <?php require("components/header.php"); ?>

  <div class="container my-5 py-5">
    <form class="row g-3 py-3 px-4" method="post">

      <h1>Sign Up</h1>

      <div class="col-md-6">
        <label for="inputEmail4" class="form-label">Email</label>
        <input type="email" class="form-control" id="inputEmail4" name="email">
      </div>
      <div class="col-md-6">
        <label for="inputPassword4" class="form-label">Password</label>
        <input type="password" class="form-control" id="inputPassword4" name="pass">
      </div>
      <div class="col-md-12">
        <label for="inputname" class="form-label">Name</label>
        <input type="text" class="form-control" id="inputname" name="name">
      </div>

      <div class="col-12">
        <label for="inputAddress" class="form-label">Address</label>
        <input type="text" class="form-control" id="inputAddress" name="addr">
      </div>

      <div class="col-md-4">
        <label for="inputUPI" class="form-label">UPI</label>
        <input type="text" class="form-control" id="inputUPI" name="upi">
      </div>
      <div class="col-md-4">
        <label for="inputgender" class="form-label">Gender</label>
        <select id="inputgender" class="form-select" name="gender">
          <option selected>Select Gender</option>
          <option>Female</option>
          <option>Male</option>

        </select>
      </div>
      <div class="col-md-4">
        <label for="inputphone" class="form-label">Phone</label>
        <input type="tel" class="form-control" id="inputphone" name="phone">
      </div>

      <div class="col-12">
        <button type="submit" class="btn btn-dark" name="signup">Sign Up</button>
      </div>
    </form>
  </div>
</body>

</html>