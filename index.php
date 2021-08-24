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
          <a href="#projects">Projects</a>
          <a href="//github.com/jokenetwork">GitHub</a>
        </nav>
      </div>
    </header>

    <main>
    <div class="content">
     <section class="first" name="intro">
       <h1>Web-development just reached a new level.</h1>
       <h2>Everything we do is Open-Source.</h2>
       <p>We're a young team of webdesigners and web-developers and we're offering free tools and apps!</p>
       <a class="button" href="#projects">See our current work</a>
    </section> 
     <section class="projects" name="projects">
       <div class="flexbox">
         <h2>Current Projects</h2>
         <h3>JokeNetwork Docs</h3>
         <p>JokeNetworks FAQ included questions that weren't asked frequently.</p>
         <p>Recently we brought FAQ back to live as JokeNetwork Docs - While the original idea of our faq page was the documentation of our own services, it is now mainly used as an overview and documentation page for MetaExtensions listed in the WHATWG HTML Standard.</p>
         <p>Maintained by <a href="//github.com/philipbrembeck">@philipbrembeck</a>, <a href="//github.com/gitgauner">@gitgauner</a> &amp; <a href="//github.com/fastrcloud">@fastrcloud</a> </p>
         <a href="//faq.jokenetwork.de">See it in action</a> / <a href="//github.com/jokenetwork/faq">Contribute on GitHub</a> 
       </div>
       <div class="flexbox">
         <div class="hero"><img src="assets/img/docs.svg" alt="JokeNetwork Docs"></div>
       </div>
      </section> 
      <section class="projects">
       <div class="flexbox">
         <div class="hero2"><img src="assets/img/vegancheck.svg" alt="JokeNetwork Docs"></div>
       </div>
       <div class="flexbox">
         <h3>Community based: VeganCheck.me</h3>
         <p>VeganCheck.me is made by our vegan friend <a href="//philipbrembeck.com">@philipbrembeck</a> and will be further developed by JokeNetwork.</p>
         <p>VeganCheck.me scans the EAN or UPC-Code of a product and simply tells you if it's vegan or not.</p>
         <p>Planned for the future:</p>
         <ul>
           <li>Open-source JavaScript-based scanner</li>
           <li>Text search</li>
           <li>Options for vegetarians</li>
           <li>Sustainability assessment</li>
           <li>Nutri-Score integration</li>
         </ul>
         <a href="//vegancheck.me">See it in action</a> / <a href="//github.com/jokenetwork/VeganCheck.me">Contribute on GitHub</a> 
       </div>
      </section> 


       <section class="contact" name="contact">
       <h1>Wanna hang out?</h1>
       <h3>Contribute to one of our projects on <a href="//github.com/jokenetwork">GitHub</a> or drop us an <a href="mailto:contribute@jokenetwork.de">e-mail</a>.</h3>
       <h3>Everyone is welcome 💖</h3>
      </section> 
    </div>
    </main>

    <footer>
      <div class="footer_nav">
        <div class="flexbox">
          <ul>
            <p>Labels</p>
            <li><img src="assets/img/opensource.svg" alt="Open Source"></li>
            <li><img src="assets/img/greenhosted.svg" alt="Hosted Green"></li>
          </ul>
        </div>
        <div class="flexbox">
          <ul>
            <p>Projects</p>
            <li><a href="//faq.jokenetwork.de">Docs</a></li>
            <li><a href="//vegancheck.me">VeganCheck.me</a></li>
            <li><a href="//github.com/JokeNetwork/SCSS-Scratch">SCSS Scratch</a></li>
          </ul>
        </div>
        <div class="flexbox">
          <ul>
            <p>Participate</p>
            <li><a href="//github.com/jokenetwork">Contribute on GitHub</a></li>
            <li><a href="mailto:contribute@jokenetwork.de">Mail us</a></li>
          </ul>
        </div>
        <div class="flexbox">
          <ul>
            <p>Legal</p>
            <li><a href="impressum">Imprint</a></li>
            <li><a href="privacy-policy">Privacy Policy</a></li>
          </ul>
        </div>
      </div>
      <p>&copy; 20<?php echo date('y'); ?> JokeNetwork</p>
    </footer>

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