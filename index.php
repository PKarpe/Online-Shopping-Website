<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>CW</title>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
  <!--  Bootstrap CSS & JavaScript links  -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
  <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="css/style.css" />
</head>

<body>
  <!-- Navbar-->
  <?php require("components/header.php"); ?>

  <!-- Banner section  -->
  <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>

      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>

      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>

    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="images/hero1.png" class="d-block w-100" alt="traditional wear" style="object-position: top" />
        <div class="carousel-caption d-md-block display-6">
          <h5 class="display-4" style="text-transform: uppercase">
            Shop Now
          </h5>
          <p style="font-style: oblique">
            Exclusive brands | traditional wear | best prizes
          </p>
        </div>
      </div>

      <div class="carousel-item">
        <img src="images/hero2.png" class="d-block w-100" alt="semi-formals" style="object-position: top" />
        <div class="carousel-caption d-md-block display-6" style="text-transform: uppercase">
          <h5 class="display-4">Compare Wardrobe</h5>
          <p>One Stop Shop</p>
        </div>
      </div>

      <div class="carousel-item">
        <img src="images/hero3.jpg" class="d-block w-100" alt="clothes on hangers" style="object-position: bottom" />
        <div class="carousel-caption d-md-block display-6" style="text-transform: uppercase">
          <h5 class="display-4">Get 50% off</h5>
          <p style="border-top: dotted; padding-top: 0.5rem">
            Latest fashion | best deals
          </p>
        </div>
      </div>
    </div>

    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>

    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>

  <!-- About Us -->
  <section class="about my-5" id="about">
    <div class="text-center">
      <h1 class="display-4">About Us</h1>
      <hr class="w-25 mx-auto" />
    </div>
    <div class="container ">
      <div class="row my-5">
        <div class="col-lg-6 col-md-6 col-xxl-6 col-12">
          <figure>
            <img src="images/shop.png" alt="shop" class="img-thumbnail about-image" />
          </figure>
        </div>
        <div class="col-lg-6 col-md-6 col-xxl-6 col-12 d-flex align-items-start justify-content-center flex-column">
          <h1>Our Journey</h1>
          <p class="display-7">
            On Compare Wardrobe you will find all well-known fashion brands
            and even discover some new ones! Choosing one specific brand is
            entirely about one's choice and affordability.Then comes the
            reliability and product specialization. Some brands may have
            specialization in manufacturing one product that they are known
            for, and others may be good in offering economical or
            extraordinary price. Here on Compare Wardrobe you can compare the
            same product manufactured by different brands, be it designer or
            department store brands. We have it all!
          </p>
        </div>
      </div>
    </div>
  </section>

  <!--Footer-->
  <footer class="bg-dark py-5 mt-5">
    <div class="container text-light text-center">
      <p class="display-6 mb-1 text-uppercase">Compare Wardrobe</p>
      <small class="text-white-50"> Made with &hearts; by PKarpe. </small>
    </div>
  </footer>
  
</body>

</html>