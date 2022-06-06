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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="style\global_style.css?v=1">
    <link rel="stylesheet" href="style\main_style.css?v=5">
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


  <!-- Menu cards -->
  <!-- uzdeti tinkamas img, background color, opacity, JS paryskinanti efekta on hover -->
  <section class="menu-cards">
    <div class="container mt-4">
      <div class="row row-cols-1 row-cols-md-3 g-3">
        <div class="col">
          <div class="card-bg-img first">
            <p>Lorem, ipsum dolor.</p>
            <h2>Lorem, ipsum.</h2>
          </div>
        </div>

        <div class="col">
        <div class="card-bg-img second">
          <p>Lorem, ipsum dolor.</p>
          <h2>Lorem, ipsum.</h2>
        </div>
        </div>

        <div class="col">
        <div class="card-bg-img third">
          <p>Lorem, ipsum dolor.</p>
          <h2>Lorem, ipsum.</h2>
        </div>
        </div>
      </div>
    </div>
  </section>


  <!-- Text with Photo's -->
  <section class="text-and-img">
    <div class="container mt-4">
      <div class="row row-cols-1 row-cols-md-3 g-3">
        <div class="col text">
          <h2>Lorem ipsum dolor sit amet.</h2>
          <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Veritatis accusantium porro sequi error animi mollitia.</p>
          <!-- mygtukas nukelia i photo galery puslapi -->
          <div class="btn btn-primary">Read more</div>
        </div>
        
        <div class="col">
          <div class="img-container img1"></div>
        </div>

        <div class="col">
          <div class="img-container img2"></div>
        </div>
    </div>
    </div>
  </section>


  <!-- Discound card section -->
  <section class="discount-card">
    <div class="container my-4">
      <div class="row row-cols-1 row-cols-md-2 g-3">
        <div class="col">
          <div class="text text-center">
            <h2>Get your discount card</h2>
            <div class="card-img my-2"></div>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Et aperiam culpa iste veritatis soluta minima error magni quos? Culpa, earum?</p>
            <div class="btn btn-primary">Get now</div>
          </div>
        </div>
        <div class="col">
          <div class="img"></div>
        </div>
      </div>
    </div>
  </section>


  <!-- Coffee shop good properties cards -->
  <section class="cards-section">
    <div class="container">
      <div class="row row-cols-1 row-cols-md-4 g-3">
        <div class="col">
          <div class="card text-center">
            <p class="icon"><i class="bi bi-cup-straw"></i></p>
            <h4>High Quality</h4>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium, mollitia.</p>
          </div>
        </div>

        <div class="col">
          <div class="card text-center">
            <p class="icon"><i class="bi bi-cup-straw"></i></p>
            <h4>High Quality</h4>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium, mollitia.</p>
          </div>
        </div>

        <div class="col">
          <div class="card text-center">
            <p class="icon"><i class="bi bi-cup-straw"></i></p>
            <h4>High Quality</h4>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium, mollitia.</p>
          </div>
        </div>

        <div class="col">
          <div class="card text-center">
            <p class="icon"><i class="bi bi-cup-straw"></i></p>
            <h4>High Quality</h4>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium, mollitia.</p>
          </div>
        </div>
      </div>
    </div>
  </section>


  <!-- Booking form -->
  <section class="booking-section">
    <div class="container my-4">
      <div class="form-box">
        <form action="" class="booking-form">
          <div class="form-container">
            <h2>Contact us <br> <span>for booking a table</span></h2>
            <input type="text" class="input" placeholder="Name"><br>
            <input type="text" class="input" placeholder="Phone"><br>
            <input type="text" class="input" placeholder="Comment"><br>
            <div class="btn btn-primary">Book Now</div>
          </div>
        </form>
      </div>
    </div>
  </section>


  <!-- About -->
  <section class="about-section">
    <div class="container my-4">
      <div class="row row-cols-1 row-cols-md-3 g-3">
        <div class="col about-col">
          <div class="text">
            <h2>About our <br> coffee shop</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum rem necessitatibus iure non facere veniam, officiis dignissimos maiores nisi autem?</p>
          </div>
          <div class="btn btn-primary">Read more</div>
        </div>

        <div class="col opening-hours">
          <h4>Opening Hours</h4>
          <p><span>Monday:</span> 9:00-21:00</p>
          <p><span>Tuesday:</span> 9:00-21:00</p>
          <p><span>Wednesday:</span> 9:00-21:00</p>
          <p><span>Thursday:</span> 9:00-21:00</p>
          <p><span>Friday:</span> 9:00-21:00</p>
          <p><span>Saturday:</span> 11:00-17:00</p>
          <p><span>Sunday:</span> CLOSED</p>
        </div>

        <div class="photo"></div>
      </div>
    </div>
  </section>


  <!-- Feedback -->
  <section class="feedback-section">
    <div class="container">
      <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="slides first-slide text-center">
              <h2>What our clients say</h2>
              <div class="underline"></div>
              <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit a minima quam quae vitae nobis consequuntur ullam impedit, odit iusto non tempore facilis velit mollitia perferendis voluptate obcaecati quas corrupti. <br>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt, rerum? Quia ad, nulla iusto minima est expedita quo? Nesciunt quae amet maxime fugiat minima fugit eligendi est! Eius, quaerat voluptatem!
              </p>
              <div class="person-img"></div>
              <p class="person-name">Tomas, Tomaitis</p>
              <p class="post-date">June 15 2022</p>
            </div>
          </div>
          <!-- <div class="carousel-item">
            <img class="d-block w-100" src="..." alt="Second slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="..." alt="Third slide">
          </div> -->
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>
  </section>

</body>
</html>