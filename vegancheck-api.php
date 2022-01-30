<!DOCTYPE html>
<html>
   <head>
      <title>VeganCheck API v0 | JokeNetwork - Open Web</title>
      <meta charset="UTF-8">
      <meta name="description" content="Get access to the VeganCheck.me API v0">
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
               <a href="#introduction">Introduction</a>
               <a href="#how-to-use">How to use</a>
               <a href="#responses">Responses</a>
               <a href="#code-examples">Examples</a>
            </nav>
         </div>
      </header>
      <div class="content">
         <section class="left">
            <h1 id="vegancheck-me-api-documentation">VeganCheck.me API Documentation</h1>
            <h2 id="introduction">Introduction</h2>
            <p>The VeganCheck.me API is currently in it's early <strong>alpha</strong>-phase. </p>
            <p>The API combines <strong>parts</strong> of the <a href="https://openfoodfacts.org/">OpenFoodFacts Database</a>, the <a href="https://openbeautyfacts.org/">OpenBeautyFacts Database</a>, the <a href="https://brocade.io">Brocade.io Database</a> and the <a href="https://opengtindb.org">Open EAN/GTIN Database</a>.
               It gives out the following information about a product through the products EAN/UPC/GTIN code:
            </p>
            <ul>
               <li>Name of the product</li>
               <li>Is it vegan?</li>
               <li>Is it vegetarian?</li>
               <li>Does it contain palmoil?</li>
               <li>The nutriscore of the product</li>
               <li>If it has been tested on animals</li>
               <li>Where this data comes from</li>
            </ul>
            <h2 id="how-to-use">How to use</h2>
            <h3 id="json-end-point">JSON End-Point</h3>
            <p>The APIs base path is <span class="highlight">https://vegancheck.me/api/v0/product</span> and gives out a JSON response.</p>

            <h3 id="authenticate">Authenticate</h2>
            <p>To use the API, you currently have to authenticate using the non-standard HTTP-Header <span class="highlight">AUTH-KEY</span>.</p>
            <p>For testing purposes, you can use the key <span class="highlight">"alpha"</span>, but as of now, it is limited to 5 requests/day. If you need your own key with a higher limit, please contact us at <a href="mailto:info@philip.media">info@philip.media</a>.</p>
            <p><strong>Attention:</strong> We're planning to drop the authentication and implement a general rate limit of 1,000 requests/day.</p>

            <h3 id="parameters">Parameters</h3>
            <p>The following parameters are available as of now:</p>
            <table>
                <tr>
                    <td><strong>parameter</strong></td>
                    <td><strong>usage</strong></td>
                    <td><strong>method</strong></td>
                </tr>
                <tr>
                    <td>product</td>
                    <td>transmit the barcode of the product</td>
                    <td>url-parameter</td>
                </tr>
                <tr>
                    <td>ean</td>
                    <td>transmit the barcode of the product</td>
                    <td>post (form-encoded)</td>
                </tr>
            </table>
            <ul>
              <li>
                The URL-parameter <span class="highlight">product</span> can be passed directly through the url of the request as in:<br>
                <script src="https://gist.github.com/philipbrembeck/2ba9ee8445fc45c7933cda9b051b036f.js"></script>
              </li>
              <li>
                The post-parameter <span class="highlight">ean</span> can be passed through the request together with a <span class="highlight">form-encoded</span> header:<br>
                <script src="https://gist.github.com/philipbrembeck/957be33bcdb3f4327305ec9edb0c4672.js"></script>
              </li>
            </ul>
            <p>Both requests get you the exact same results and you can use the one you like more. At least one of those methods is required, otherwise the API will throw an error.</p>
            <h3 id="responses">Responses</h3>
            <p>We use standardized HTTP status codes as responses. Depending on which language you want to use to implement the API in, you may have to disable error-handling or ignore errors.</p>

            <h4 id="positive-response">Positive response</h4>
            <p>A successful request will throw a result like this:</p>
            <script src="https://gist.github.com/philipbrembeck/203579400565403b8b4285965485055c.js"></script>
            <p>Please note:</p>
            <ul>
              <li>The field <span class="highlight">nutriscore</span> will always return <span class="highlight">n/a</span> when <span class="highlight">data_source→database</span> is OpenBeautyFacts, Brocade.io or Open EAN Database.</li>
              <li>The field <span class="highlight">not_tested_on_animals</span> will always return <span class="highlight">n/a</span> if <span class="highlight">data_source→database</span> is not OpenBeautyFacts.</li>
              <li>All fields, except <span class="highlight">name</span>, will return <span class="highlight">n/a</span> if <span class="highlight">data_source→database</span> is Open EAN Database.</li>
              <li><span class="highlight">n/a</span> is not an error but just means that we don't have any data about the field.</li>
            </ul>
            <h4 id="error-responses">Error responses</h4>
            <p>The following error responses can be expected:</p>
            <ul>
              <li><span class="highlight">400</span> - Missing required parameter, please make sure you sent at least one of the parameters mentioned in <a href="#parameters">Parameters</a>:<br>
              <script src="https://gist.github.com/philipbrembeck/c7fbcfe62f5e252e54ea116007e11b14.js"></script></li>
              <li><span class="highlight">400</span> - Required parameter is empty, please make sure the parameter you sent wasn't empty:<br>
              <script src="https://gist.github.com/philipbrembeck/638f18f02abd15a0da54fcd3d4dd1578.js"></script></li>
              <li><span class="highlight">401</span> - Please make sure you sent the <span class="highlight">AUTH-KEY</span> as a header:<br>
              <script src="https://gist.github.com/philipbrembeck/98a33b4bc7916b73f9843c4e2bd904f3.js"></script></li>
              <li><span class="highlight">401</span> - The <span class="highlight">AUTH-KEY</span> you sent is unknown:<br>
              <script src="https://gist.github.com/philipbrembeck/a81b73e33111b30a139fb4c9636a6c19.js"></script></li>
              <li><span class="highlight">404</span> - We couldn't find that product in the databases:<br>
              <script src="https://gist.github.com/philipbrembeck/f9a2eac33de64699df81d19e7c38bc52.js"></script></li>
              <li><span class="highlight">429</span> - Your rate limit has exceeded. Please try again later/try another <span class="highlight">AUTH-KEY</span>:<br>
              <script src="https://gist.github.com/philipbrembeck/d8a2773e4d53fb9aa3edb2bdf0e4f45c.js"></script></li>
              <li><span class="highlight">504</span> - The database server took to long to respond, please try again later (Timeout after 5 seconds):<br>
              <script src="https://gist.github.com/philipbrembeck/13c9d69b32e061179c4e8fdb4e927d58.js"></script></li>
            </ul>

            <h3 id="code-examples">Code examples</h3>
            <h4 id="python">Python</h4>
            <script src="https://gist.github.com/philipbrembeck/2ccb784fa99121857fb42068e483c97c.js"></script>
            <h4 id="php">PHP</h4>
            <script src="https://gist.github.com/philipbrembeck/66899f1f988f6e79f76acd6a0a7a18ae.js"></script>
            <h4 id="javascript">Javascript</h4>
            <script src="https://gist.github.com/philipbrembeck/f550798c44d8391a277b6d21226f85c0.js"></script>
            <h4 id="cs">C#</h4>
            <script src="https://gist.github.com/philipbrembeck/6c170bd0ab11c7f2cb7de10ecf6c8b85.js"></script>
         </section>
      </div>
      </div>
      <?php include ('includes/footer.php'); ?>
   </body>
</html>