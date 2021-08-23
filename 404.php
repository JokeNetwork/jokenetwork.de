<!DOCTYPE html>
<html>
  <head>
    <title>JokeNetwork - Open Web</title>
    <meta charset="UTF-8">

    <meta name="description" content="We're a young team of webdesigners and web-developers and we're offering (ads-)free tools and apps as well as open source projects.">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <link rel="apple-touch-icon" sizes="180x180" href="/assets/img/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/assets/img/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/assets/img/favicon-16x16.png">
    <link rel="mask-icon" href="/assets/img/safari-pinned-tab.svg" color="#5bbad5">
    <link rel="shortcut icon" href="/assets/img/favicon.ico">

    <link href="assets/css/style.min.css" rel="stylesheet">
  </head>

  <body>
    <header>
      <div class="container">
        <div class="logo">
          <a href="//jokenetwork.de"><img src="assets/img/plain.svg" alt="Logo"></a>
        </div>
        <nav>
          <a href="//github.com/jokenetwork">GitHub</a>
        </nav>
      </div>
    </header>
    <main>
    <div class="content">
     <section class="first" name="intro">
       <h1>404 &middot; Not found.</h1>
       <h2>We're sorry, but the page you're looking for is not available.</h2>
      </section> 
    </div>
    </main>

    <div class="container">
      <footer>
      <p>&copy; 20<?php echo date('y'); ?> JokeNetwork</p>
        <ul>
          <li><a href="//github.com/jokenetwork">GitHub</a></li>
          <li><a href="impressum">Imprint</a></li>
          <li><a href="privacy-policy">Privacy Policy</a></li>
        </ul>
      </footer>
   </div>

    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/scroll.js"></script>

    <?php 
        header('Access-Control-Allow-Origin: https://analytics.jokenetwork.de'); 
        if (isset($_COOKIE['log']) && $_COOKIE['log'] == "Yes"){echo '<script async src="https://analytics.jokenetwork.de/tracker.js" data-ackee-server="https://analytics.jokenetwork.de" data-ackee-domain-id="5c67c30a-b240-419a-867d-410abf7eb1db" data-ackee-opts=\'{ "detailed": true }\'></script>';}  
        elseif (isset($_COOKIE['log']) && $_COOKIE['log'] == "No"){echo '<script async src="https://analytics.jokenetwork.de/tracker.js" data-ackee-server="https://analytics.jokenetwork.de" data-ackee-domain-id="5c67c30a-b240-419a-867d-410abf7eb1db"></script>';}  
        else{echo '<script async src="https://analytics.jokenetwork.de/tracker.js" data-ackee-server="https://analytics.jokenetwork.de" data-ackee-domain-id="5c67c30a-b240-419a-867d-410abf7eb1db" data-ackee-opts=\'{ "detailed": true }\'></script>';} 
    ?>
  </body>
</html>