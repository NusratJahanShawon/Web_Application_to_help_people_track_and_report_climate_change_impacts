<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="research.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Della+Respira&display=swap" rel="stylesheet">
    <title>Research Department</title>
</head>
<body>

    <h1>Research Department</h1>

    <div class="navbar">
        <button id="homeButton">Home</button>
        <button id="sendMailButton">Send Mail</button>
        <button id="showMailButton">Show Mail</button>
        <button id="showGraphButton">Show Graph</button>
        <button id="rainDataButton">Rain Data</button>
        <button id="temperatureDataButton">Temperature Data</button>
        <button id="logoutButton">Log out</button>
    </div>
    <script>
        function navigateToPage(pageName) {
          window.location.href = pageName + '.php'; // Replace '.html' with the actual extension of your pages
        }
  
        document.getElementById('homeButton').addEventListener('click', function() {
          navigateToPage('HomePage-AfterLogin');
        });
  
        document.getElementById('sendMailButton').addEventListener('click', function() {
          navigateToPage('send-mail');
        });
  
        document.getElementById('showMailButton').addEventListener('click', function() {
          navigateToPage('show-mail');
        });
  
        document.getElementById('showGraphButton').addEventListener('click', function() {
          navigateToPage('show-graph');
        });
  
        document.getElementById('rainDataButton').addEventListener('click', function() {
          navigateToPage('rain_report');
        });
  
        document.getElementById('temperatureDataButton').addEventListener('click', function() {
          navigateToPage('temperature_report');
        });
  
        document.getElementById('logoutButton').addEventListener('click', function() {
          navigateToPage('login');
        });
      </script>

</body>
</html>