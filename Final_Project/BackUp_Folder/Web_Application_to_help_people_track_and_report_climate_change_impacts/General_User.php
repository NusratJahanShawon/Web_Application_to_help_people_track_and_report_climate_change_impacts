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
    <link rel="stylesheet" type="text/css" href="General_User_01.css">
    <script src="https://kit.fontawesome.com/787cdab6b6.js" crossorigin="anonymous"></script>
    <script src="./General_User.js" defer></script>
    

    <title>Administrator</title> 
  </head>


  <body>
    <!--Banner section-->
    <section id="hero" class="d-flex align-items-center">    
        <div class="container text-center">
        <h1>
            🌍 Welcome to Climate Tracker </h1>
            <h2> Where Climate Action Begins! 🌿</h2> 
        <h2>Track and report climate change impacts</h2>     
          
        <a href="#" class="btn_get_started">Learn More</a>
        <!-- <button onclick="scrollToSection('aboutUsSection')">Learn More</button> -->
       </div>        
        </section> 
               
        <div class="nav">
          <div class="left">
            <a href="HomePage-AfterLogin.php">Home</a>
            <a href="temperature_report.php">Temperature Reports</a>
            <a href="rain_report.php">Rain Reports</a>
            <a href="weather_dashboard.html">Weekly Forecast</a>
            <a href="#">Request Data</a>
            <a href="#">Send Report</a>
            
          </div>
          <div class="right">
            <!-- <a href="#">Notification</a> -->
            <button href="#">Notification</button>
            <a href="login.php">Sign Out</a>
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
          <h3>Welcome</h3>
          <p>
            Happy 1 year anniversary to our community of 
            Earth advocates! It's with great joy and purpose 
            that we welcome you to our digital home — a space 
            dedicated to understanding, addressing, and mitigating 
            the impacts of climate change.

            As we celebrate our first year together, we reflect on the 
            collective strides we've taken towards a more sustainable future.
            Your presence here adds immeasurable value to our shared mission.
             Whether you're a climate expert, an eco-conscious individual,
              or someone just starting their journey into environmental awareness,
              you've found a place where your commitment to the planet is celebrated and nurtured.
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
      <img class="d-block w-100" src="image/mountains.jpg" alt="First slide">
      <div class="carousel-caption d-none d-md-block">
        <h5> 🌱 Why Climate Tracker?</h5>
        <p>
            At Climate Tracker, we believe that knowledge is the first step 
            towards meaningful change. Here, you'll discover a wealth of information,
             resources, and community engagement opportunities. From the latest climate
              science to practical tips for sustainable living, we strive to empower you
               to make informed decisions that contribute to a healthier planet.
          </p>
      </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="image/5.png" alt="Second slide">
      <div class="carousel-caption d-none d-md-block">
        <h5>🌊 Our Community, Our Strength</h5>
        <p>This platform is more than a website; it's a community united by 
            a shared passion for the environment. Engage in conversations, 
            share your insights, and be inspired by the incredible stories
             of individuals and organizations making a positive impact. 
             Together, we amplify our voices and actions, creating a ripple 
             effect that resonates globally.</p>
      </div>

    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="image/3.jpg" alt="Third slide">
      <div class="carousel-caption d-none d-md-block">
        <h5>Take Action Today</h5>
        <p>Beyond awareness, we champion actionable steps.
             Explore our actionable guides, participate in community
              initiatives, and discover how small changes in your daily 
              life can contribute to a greener, more sustainable world. 
              Your choices matter, and collectively, we can drive significant change.</p>
      </div>
    </div>
  </div>

  <!-- <div class="carousel-item">
    <img class="d-block w-100" src="../image/3.jpg" alt="Third slide">
    <div class="carousel-caption d-none d-md-block">
      <h5>🎉 Join the Celebration</h5>
      <p>As we mark our one-year milestone, we invite you to celebrate with us.
         Share your thoughts, experiences, and hopes for the future.
         Let's use this anniversary as a moment to reflect on the progress 
         we've made and to inspire each other for the challenges that lie ahead.</p>
    </div>
  </div>
</div> -->
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
      <h3>🎉 Join the Celebration</h3>
      <p>
        As we mark our one-year milestone, we invite you to celebrate with us.
         Share your thoughts, experiences, and hopes for the future.
         Let's use this anniversary as a moment to reflect on the progress 
         we've made and to inspire each other for the challenges that lie ahead.
      </p>
  </div>
</section>

<section id="aboutUsSection">
    <div class="container">
        <!-- <h3>🎉 Join the Celebration</h3> -->
        <p>
            Thank you for being a vital part of Climate Tracker. 
            Together, we are the force that will shape a resilient,
             thriving future for our planet.
        </p>
    </div>
  </section>


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <script type="text/javascript" src="home.js"></script>
    <!-- <script src="Home-learnMore.js"></script> -->

  </body>
</html>
