<!doctype html>
<html lang="en">
    <!--Headers commands-->
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <!--front awesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">   
    <!--google font-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;800&family=Raleway:wght@300;400;500;600;700;800;900&family=Roboto:ital,wght@0,300;0,400;0,500;0,700;0,900;1,300&display=swap" rel="stylesheet">
      <!--CSS & JS Linking--> 
    <link rel="stylesheet" type="text/css" href="home.css">
    <script src="https://kit.fontawesome.com/787cdab6b6.js" crossorigin="anonymous"></script>
    <script src="./home.js" defer></script>
    

    <title>Administrator</title> 
  </head>


  <body>
    <!--Banner section-->
    <section id="hero" class="d-flex align-items-center">    
        <div class="container text-center">
        <h1>Climate Tracker </h1>
        <h2>Track and report climate change impacts</h2>       
        <a href="https://www.bbc.com/weather/1185241" class="btn_get_started">Learn More</a>
        <!-- <button onclick="scrollToSection('aboutUsSection')">Learn More</button> -->
       </div>        
        </section> 
               
        <div class="nav">
          <div class="left">
            <a href="home.php">Home</a>
            <a href="temperature_report.php">Temperature Reports</a>
            <a href="rain_report.php">Rain Reports</a>
            <a href="weather_dashboard.php">Weekly Forecast</a>
          </div>
          <div class="right">
            <a href="login.php">Login</a>
            <a href="register-type.php">Sign up</a>
          </div>
        </div>

    <section>
<!-- ADDING TEXT WITH CURRENT WEATHER -->
    <div class="card-content">
      <div class="text-section">
          <p>You Can Check Your daily Weather Forecasting Here</p>
          <i class="fa-solid fa-arrow-turn-down-right"></i>
    </div>
  


<!-- ADDING CURRENT WEATHER -->

    <div class="card">
        <div class="search">
          <input type="text" class="search-bar" placeholder="Search">
          <button><svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 1024 1024" height="1.5em"
              width="1.5em" xmlns="http://www.w3.org/2000/svg">
              <path
                d="M909.6 854.5L649.9 594.8C690.2 542.7 712 479 712 412c0-80.2-31.3-155.4-87.9-212.1-56.6-56.7-132-87.9-212.1-87.9s-155.5 31.3-212.1 87.9C143.2 256.5 112 331.8 112 412c0 80.1 31.3 155.5 87.9 212.1C256.5 680.8 331.8 712 412 712c67 0 130.6-21.8 182.7-62l259.7 259.6a8.2 8.2 0 0 0 11.6 0l43.6-43.5a8.2 8.2 0 0 0 0-11.6zM570.4 570.4C528 612.7 471.8 636 412 636s-116-23.3-158.4-65.6C211.3 528 188 471.8 188 412s23.3-116.1 65.6-158.4C296 211.3 352.2 188 412 188s116.1 23.2 158.4 65.6S636 352.2 636 412s-23.3 116.1-65.6 158.4z">
              </path>
            </svg></button>
        
        </div>
        <div class="weather loading">
          <h2 class="city">Weather in Dhaka</h2>
          <h1 class="temp">51°C</h1>
          <div class="flex">
            <img src="https://openweathermap.org/img/wn/04n.png" alt="" class="icon" />
            <div class="description">Cloudy</div>
          </div>
          <div class="humidity">Humidity: 60%</div>
          <div class="wind">Wind speed: 6.2 km/h</div>
        </div>
      </div>
    </section>


  <!---Daisy UI Our vission--->
<!-- OUR VISION -->
<section id="ourVisionSection">
  <div class="container">
    
    <div class="cardV">
      <!-- <div class="card-body"> -->
        <img src="image/climate.jpg" alt="Our Vision Image" class="img-fluid">
        <!-- <div class="text-content"> -->
          <h3>Our Vision</h3>
          <p>
            At Climate Tracker, we envision a world where individuals, 
            communities, and nations unite to combat climate change and work
             towards a sustainable and resilient future. Through the power of
              information, education, and collective action, we strive to be 
              a catalyst for positive change.
          </p>
          <a href="#" class="btn btn-primary">Learn More</a>
        <!-- </div> -->
      </div>
    </div>
  </div>


<!--New Version-->
<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="image/2.jpg" alt="First slide">
      <div class="carousel-caption d-none d-md-block">
        <h5>What Drives Us</h5>
        <p>
          The urgency of addressing climate change has never been more apparent. 
          Rising temperatures, extreme weather events, melting ice caps, 
          and biodiversity loss are just a few of the alarming signs that 
          demand our attention. We are driven by a sense of responsibility 
          to be a source of reliable information, fostering a deeper 
          understanding of the issues at hand.
          </p>
      </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="image/5.png" alt="Second slide">
      <div class="carousel-caption d-none d-md-block">
        <h5>Our Commitment</h5>
        <p>Education: We believe knowledge is a powerful tool for change. 
          Our platform is dedicated to providing accurate, up-to-date information 
          on climate change, its causes, and its impact on ecosystems and communities.

          Awareness: By sharing stories, research findings, and 
          real-world examples, we aim to increase awareness of the 
          urgency and severity of climate change. Understanding the 
          problem is the first step towards finding meaningful solutions.
          
          Action: We advocate for individual and collective action.
           Whether it's making sustainable lifestyle choices, supporting 
           environmentally responsible policies, or participating in community 
           initiatives, every action counts.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="image/3.jpg" alt="Third slide">
      <div class="carousel-caption d-none d-md-block">
        <h5>Join Us on the Journey</h5>
        <p>[Your Website Name] is not just a website; it's a community 
          of like-minded individuals
           who share a passion for the well-being
            of our planet. We invite you to explore the resources, 
            engage in discussions, and take steps, big or small, 
            towards a more sustainable future.</p>
      </div>
    </div>
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

</section>
<!--ABOUT US-->
<section id="aboutUsSection">
  <div class="container">
      <h3>About Us</h3>
      <p>
        Welcome to Climate Tracker, a 
        platform committed to raising awareness 
        about the critical issue of climate change 
        and its far-reaching impact on our planet. 
        Our mission is to provide valuable insights, 
        inspire positive action, and foster a community
        dedicated to addressing the challenges 
        posed by climate change.
      </p>
  </div>
</section>


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <script type="text/javascript" src="home.js"></script>
    <!-- <script src="Home-learnMore.js"></script> -->

  </body>
</html>
