<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Ninang's Kitchen</title>
    <link rel="icon" type="image/svg+xml" href="images/logo1.png">
    <link rel="stylesheet" href="css/insertdata.css">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
  </head>
  <body>
  
	<!-- Load Facebook SDK for JavaScript -->
      <div id="fb-root"></div>
      <script>
        window.fbAsyncInit = function() {
          FB.init({
            xfbml            : true,
            version          : 'v9.0'
          });
        };

        (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
        fjs.parentNode.insertBefore(js, fjs);
      }(document, 'script', 'facebook-jssdk'));</script>

      <!-- Your Chat Plugin code -->
      <div class="fb-customerchat"
        attribution=setup_tool
        page_id="107559890595059"
		theme_color="#d4a88c">
      </div>

      <section id="data-inserted">
        <div class="container-background">
          <img src="images/form_img.jpg" class="background-img">
        </div>

        <div class="container-logo">
          <img src="images/logo1.png" class="logo">
        </div>

        <div class="container-text1">
          <p>Thank you for cooperating.<br>We have stored your information.</p>
        </div>

        <div class="container-smiley">
          <i class="far fa-smile-beam"></i>
        </div>

        <div class="container-text2">
          <p>Enjoy your meal and stay safe!</p>
        </div>

        <div class="container-button1">
          <!-- <p>Participate in Customer Survey?</p> -->
          <!-- <a href="javascript:window.close()">
            <div class="button1">
              <p>DONE</p>
            </div>
          </a> -->
        </div>

        <div class="footer">
          <div class="copyright">
            <p>Copyright © Ninang's Kitchen 2020. All Rights Reserved.</p>
          </div>
          <div class="icons">
            <a href="https://www.facebook.com/ninangs.ph" target="_blank"><i class="fab fa-facebook-square fa-5x"></i></a>
            <a href="https://www.instagram.com/ninangs.ph/?hl=en" target="_blank"><i class="fab fa-instagram-square fa-5x"></i></a>
          </div>
        </div>

      </section>

  </body>
</html>
