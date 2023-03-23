<!DOCTYPE html>

<?php
$servername = "localhost";
$username = 'root';
$password = '';
$dbname = 'Online_shopping';

$conn = new mysqli($servername, $username, $password, $dbname);

$sql = "SELECT * FROM product";
$all_product = $conn->query($sql);


?>


<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>CW-Store</title>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
  <!--  Bootstrap CSS & JavaScript links  -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
  <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="css/style.css" />
</head>

<body>
  <!-- Navbar-->
  <?php require("components/header.php"); ?>

  <main>

    <!--Products-->
    <div class="container my-2 py-3">
      <h1 class="mb-4">Shop Now</h1>
      <div class="row  g-4">
        <?php
        while ($row = mysqli_fetch_assoc($all_product)) {

        ?>
          <div class="col-12 col-lg-4  col-md-6 col-xxl-3">
            <div class="card h-100 text-center">
              <img src="images/<?php echo $row["product_image"]; ?>" class="card-img-top img-fluid" alt="Pink Saree">
              <div class="card-body">
                <h5 class="card-title"><?php echo $row["product_name"]; ?></h5>
                <p class="card-text"><?php echo $row["brand"]; ?></p>
                <p class="card-text">Rs. <?php echo $row["prize"]; ?></p>
                <button type="button" class="btn mb-0 btn-outline-dark ">Add to Cart</button>
              </div>
            </div>
          </div>
        <?php
        }
        ?>

      </div>
    </div>

  </main>

  <!--Footer-->
  <footer class="bg-dark py-5 mt-5">
    <div class="container text-light text-center">
      <p class="display-6 mb-1 text-uppercase">Compare Wardrobe</p>
      <small class="text-white-50"> Made with &hearts; by PKarpe. </small>
    </div>
  </footer>
</body>

</html>