<!DOCTYPE html>
<html>
  <head>
    <title>JokeNetwork - Open Web</title>
    <meta charset="UTF-8">

    <meta name="description" content="We're a young team of webdesigners and web-developers and we're offering free and open  source tools and apps.">
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
         <h3 name="vegancheck">VeganCheck.me - Check if it's vegan!</h3>
         <p>VeganCheck.me is our first PWA (Progressive Web App) and focused on simplicity, therefore it only shows what matters:<br>
         This includes information about the product being vegan or not, information about palm-oil in the product and if animals were harmed in the products testing.</p>
         <p>Simply scan the EAN or UPC-Code of a product to start with VeganCheck.me!</p>
         <a href="//vegancheck.me">See in action</a> / <a href="//github.com/jokenetwork/VeganCheck.me">Contribute on GitHub</a> / <a href="https://jokenetwork.de/vegancheck-api">Use the API</a>
         <p><a href="//vegancheck.me"><img src="assets/img/PWA.svg" alt="Open PWA in Browser" width="150" loading="lazy"></a></p>
       </div>
       <div class="flexbox">
         <div class="hero"><img src="assets/img/vegancheck.svg" alt="JokeNetwork Docs" loading="lazy"></div>
       </div>
      </section> 
      <section class="projects">
        <div class="flexbox">
         <div class="hero2"><img src="assets/img/docs.svg" alt="JokeNetwork Docs" loading="lazy"></div>
       </div>
       <div class="flexbox">
         <h3>JokeNetwork Docs</h3>
         <p>JokeNetworks FAQ originally answered questions that weren't asked frequently.</p>
         <p>Recently we brought FAQ back to live as JokeNetwork Docs - While the original idea of our faq page was the documentation of our own services, it is now mainly used as an overview and documentation page for MetaExtensions listed in the WHATWG HTML standard.</p>
         <p>Maintained by <a href="//github.com/philipbrembeck">@philipbrembeck</a>, <a href="//github.com/gitgauner">@gitgauner</a> &amp; <a href="//github.com/fastrcloud">@fastrcloud</a> </p>
         <a href="//faq.jokenetwork.de">See it in action</a> / <a href="//github.com/jokenetwork/faq">Contribute on GitHub</a> 
       </div>
      </section> 
       <section class="projects">
        <div class="flexbox">
         <h3 name="SCSS-Scratch">SCSS Scratch</h3>
         <p>SCSS Scratch is a barebones structure/starting-point for SCSS/SASS-projects.</p>
         <p>The structure is used to create websites and web-apps, including the JokeNetwork page you're on now.</p>
         <a href="//github.com/JokeNetwork/SCSS-Scratch">Contribute or download on GitHub</a> 
       </div>
        <div class="flexbox">
         <div class="hero"><img src="assets/img/scss-scratch.png" alt="JokeNetwork SCSS Scratch" loading="lazy"></div>
       </div>
      </section> 


       <section class="contact" name="contact">
       <h1>Wanna hang out?</h1>
       <h3>Contribute to one of our projects on <a href="//github.com/jokenetwork">GitHub</a> or drop us an <a href="mailto:contribute@jokenetwork.de">e-mail ????</a>.</h3>
       <h3>Everyone is welcome ????</h3>
      </section> 
    </div>
    </main>

    <?php include ('includes/footer.php'); ?>
    
  </body>
</html>