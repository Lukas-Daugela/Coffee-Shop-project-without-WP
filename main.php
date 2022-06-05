<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="style\global_style.css?v=1">
    <link rel="stylesheet" href="style\main_style.css?v=2">
    <title>Document</title>
</head>
<body>

  <!-- Showcase -->
  <div class="showcase-img">
    <!-- Navbar -->
    <?php include'C:\xampp\htdocs\coffee_php\home_header.php'; ?>

    <div class="colona">
        <div class="text_container text-center">
          <h4>Lorem ipsum dolor sit amet.</h4>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus
            deserunt velit provident corrupti earum quis!
          </p>
          <div class="btn btn-primary">read more</div>
        </div>
      </div>
  </div>

  <!-- Drinks section with cards -->
  <section class="test-drinks-section">
    <div class="container">
      <div class="container pt-4">
        <h4>Drinks showcase example</h4>
      </div>
      <div class="row row-cols-1 row-cols-md-3 py-4 g-4">
        <div class="col">
          <div class="card">
            <div class="card-img img-1"></div>
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">
                Some quick example text to build on the card title and make up
                the bulk of the card's content.
              </p>
              <a href="#" class="btn btn-primary">Read more</a>
            </div>
          </div>
        </div>

        <div class="col">
          <div class="card">
            <div class="card-img img-2"></div>
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">
                Some quick example text to build on the card title and make up
                the bulk of the card's content.
              </p>
              <a href="#" class="btn btn-primary">Read more</a>
            </div>
          </div>
        </div>

        <div class="col">
          <div class="card">
            <div class="card-img img-3"></div>
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">
                Some quick example text to build on the card title and make up
                the bulk of the card's content.
              </p>
              <a href="#" class="btn btn-primary">Read more</a>
            </div>
          </div>
        </div>
      </div>

      <a
        class="btn btn-primary menu-button d-block"
        href="coffee_menu.php"
      >
        Open menu
      </a>
    </div>
  </section>

  <!-- Food section with cards -->
  <section class="test-food-section">
    <div class="container">
      <div class="container pt-4">
        <h4>Food showcase example</h4>
      </div>
      <div class="row row-cols-1 row-cols-md-3 py-4 g-4">
        <div class="col">
          <div class="card">
            <div class="card-img img-1"></div>
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">
                Some quick example text to build on the card title and make up
                the bulk of the card's content.
              </p>
              <a href="#" class="btn btn-primary">Read more</a>
            </div>
          </div>
        </div>

        <div class="col">
          <div class="card">
            <div class="card-img img-2"></div>
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">
                Some quick example text to build on the card title and make up
                the bulk of the card's content.
              </p>
              <a href="#" class="btn btn-primary">Read more</a>
            </div>
          </div>
        </div>

        <div class="col">
          <div class="card">
            <div class="card-img img-3"></div>
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">
                Some quick example text to build on the card title and make up
                the bulk of the card's content.
              </p>
              <a href="#" class="btn btn-primary">Read more</a>
            </div>
          </div>
        </div>
      </div>

      <a
        class="btn btn-primary menu-button d-block"
        href="food_menu.php"
      >
        Open menu
      </a>
    </div>
  </section>

  <!-- Owl carousel -->
  <section>
    <div class="container pt-4">
      <h4>3D Owl carousel for coffee shop photos</h4>
    </div>
    <div class="owl-carousel"></div>
  </section>

</body>
</html>