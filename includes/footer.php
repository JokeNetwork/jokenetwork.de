  <footer>
      <div class="footer_nav">
        <div class="flexbox">
          <ul>
            <p>2011 - 20<?php echo date('y'); ?> &copy; JokeNetwork</p>
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
            <li><a href="/badges">GitHub Status Badges</a></li>
          </ul>
        </div>
        <div class="flexbox">
          <ul>
            <p>Participate</p>
            <li><a href="//github.com/jokenetwork">Contribute on GitHub</a></li>
            <li><a href="https://github.com/sponsors/philipbrembeck">Sponsor on GitHub</a></li>
            <li><a href="https://www.paypal.com/donate?hosted_button_id=N4F7DAQH7ET2G">Donate via PayPal</a></li>
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
    </footer>


    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/scroll.js"></script>

    <?php 
        header('Access-Control-Allow-Origin: https://analytics.jokenetwork.de'); 
        if (isset($_COOKIE['log']) && $_COOKIE['log'] == "Yes"){echo '<script async src="https://analytics.jokenetwork.de/tracker.js" data-ackee-server="https://analytics.jokenetwork.de" data-ackee-domain-id="5c67c30a-b240-419a-867d-410abf7eb1db" data-ackee-opts=\'{ "detailed": true }\'></script>';}  
        elseif (isset($_COOKIE['log']) && $_COOKIE['log'] == "No"){echo '<script async src="https://analytics.jokenetwork.de/tracker.js" data-ackee-server="https://analytics.jokenetwork.de" data-ackee-domain-id="5c67c30a-b240-419a-867d-410abf7eb1db"></script>';}  
        else{echo '<script async src="https://analytics.jokenetwork.de/tracker.js" data-ackee-server="https://analytics.jokenetwork.de" data-ackee-domain-id="5c67c30a-b240-419a-867d-410abf7eb1db" data-ackee-opts=\'{ "detailed": true }\'></script>';} 
      ?>