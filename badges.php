<!DOCTYPE html>
<html>
  <head>
    <title>Badges | JokeNetwork - Open Web</title>
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

      <div class="content">
       <section class="message">
        <h1>GitHub Badges</h1>

          <p>We love open-source projects, but sometimes it is hard to see if a project is still actively maintained or not.<br>
          Because of this, we've created the fowllowing Badges for your README files on GitHub based on  <a href="https://opensource.box.com/badges/">box's open source project status badges</a> but with other options to choose from:</p>
          
            <table>
              <tbody>
                  <tr>
                  <td><img src="/assets/img/gitstatus/communitybased.svg" alt="Status: Active"></td>
                  <td><span class="bold">Community based:</span><br>This badge indicates that the project is still actively maintained by the community, but not necessarily by the original creator (May apply to active maintained forks too).</td>
                </tr>
                <tr>
                  <td><img src="/assets/img/gitstatus/active.svg" alt="Status: Active"></td>
                  <td><span class="bold">Active:</span><br>This badge indicates that the project is actively maintained.</td>
                </tr>
                <tr>
                  <td><img src="/assets/img/gitstatus/inactive.svg" alt="Status: Inactive"></td>
                  <td><span class="bold">Inactive:</span><br>This badge indicates that the project is not actively maintained, but that might change in the future.</td>
                </tr>
                <tr>
                  <td><img src="/assets/img/gitstatus/discontinued.svg" alt="Status: Discontinued"></td>
                  <td><span class="bold">Discontinued:</span><br>This badge indicates that the project is not actively maintained and will not be maintained in the future.</td>
                </tr>
                <tr>
                  <td><img src="/assets/img/gitstatus/unknown.svg" alt="Status: Unknown"></td>
                  <td><span class="bold">Unknown:</span><br>This badge indicates that there is not information about the project being maintained or not.</td>
                </tr>
              </tbody>
            </table>

              <p>Feel free to use them in your GitHub-projects without any mention (WTFPL-License).</p>
              <p>Recommended Use in Markdown:</p>
              <code>
               [![Status: Active](https://jokenetwork.de/assets/img/gitstatus/communitybased.svg)](https://jokenetwork.de/badges)<br>
               [![Status: Active](https://jokenetwork.de/assets/img/gitstatus/active.svg)](https://jokenetwork.de/badges)<br>
               [![Status: Inactvie](https://jokenetwork.de/assets/img/gitstatus/inactive.svg)](https://jokenetwork.de/badges)<br>
               [![Status: EOL](https://jokenetwork.de/assets/img/gitstatus/discontinued.svg)](https://jokenetwork.de/badges)<br>
               [![Status: Unknown](https://jokenetwork.de/assets/img/gitstatus/unknown.svg)](https://jokenetwork.de/badges)
              </code>
        </section>
      </div>
    </div>
      <?php include ('includes/footer.php'); ?>
  </body>
</html>