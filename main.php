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
    <link rel="stylesheet" href="style\main_style.css?v=3">
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



  <!-- Owl carousel -->
  <section>
    <div class="container pt-4">
      <h4>3D Owl carousel for coffee shop photos</h4>
    </div>
    <div class="owl-carousel"></div>
  </section>

</body>
</html>