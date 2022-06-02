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
    <link rel="stylesheet" href="style\indexas_style.css">
    <link rel="stylesheet" href="style\global_style.css">
    <title>Document</title>
</head>
<body>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script
      src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
      integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js"
      integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"
      integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
      crossorigin="anonymous"
    ></script>

<!-- Navbar -->
    <?php include'C:\xampp\htdocs\coffee_php\header.php'; ?>

 <!-- Showcase -->
    <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
        <button
            type="button"
            data-bs-target="#myCarousel"
            data-bs-slide-to="0"
            class="active"
            aria-current="true"
            aria-label="Slide 1"
        ></button>
        <button
            type="button"
            data-bs-target="#myCarousel"
            data-bs-slide-to="1"
            aria-label="Slide 2"
        ></button>
        <button
            type="button"
            data-bs-target="#myCarousel"
            data-bs-slide-to="2"
            aria-label="Slide 3"
        ></button>
        </div>
        <div class="carousel-inner">
        <div class="carousel-item active">
            <div class="overlay-image first"></div>
            <div class="container">
            <h1>Example Headline</h1>
            <p>
                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sit
                adipisci doloribus magni quos nam earum fugit error perferendis
                recusandae! Libero.
            </p>
            <a href="#" class="btn btn-lg btn-primary"> Sign up today </a>
            </div>
        </div>
        <div class="carousel-item">
            <div class="overlay-image second"></div>
            <div class="container">
            <h1>Example Headline</h1>
            <p>
                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sit
                adipisci doloribus magni quos nam earum fugit error perferendis
                recusandae! Libero.
            </p>
            <a href="#" class="btn btn-lg btn-primary"> Sign up today </a>
            </div>
        </div>
        <div class="carousel-item">
            <div class="overlay-image third"></div>
            <div class="container">
            <h1>Example Headline</h1>
            <p>
                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sit
                adipisci doloribus magni quos nam earum fugit error perferendis
                recusandae! Libero.
            </p>
            <a href="#" class="btn btn-lg btn-primary"> Sign up today </a>
            </div>
        </div>
        </div>
        <a
        href="#myCarousel"
        class="carousel-control-prev"
        role="button"
        data-bs-slide="prev"
        >
        <span class="sr-only"></span>
        <span class="carousel-control-prev-icon"></span>
        </a>
        <a
        href="#myCarousel"
        class="carousel-control-next"
        role="button"
        data-bs-slide="next"
        >
        <span class="sr-only"></span>
        <span class="carousel-control-next-icon"></span>
        </a>
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

    <!-- Footer -->
    <?php include'C:\xampp\htdocs\coffee_php\footer.php' ?>
</body>
</html>