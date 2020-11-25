<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Ninang's Kitchen</title>
    <link rel="icon" type="image/svg+xml" href="images/logo1.png">
    <link rel="stylesheet" href="css/index.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <script src="js/index.js" charset="utf-8"></script>

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

      <section id="contact-form">
        <div class="container-logo2">
          <img src="images/logo1.png" class="logo2">
        </div>
        <!-- <div class="container-background-form">
          <img src="images/form_img.jpg" class="background-form-img">
        </div> -->
        <div class="container-text">
          <p class="text">CONTACT TRACING FORM</p>
        </div>
        <div class="form-container">
          <form class="form" action="php/insertdata.php" method="post">

            <table class="table-input">
              <tr>
                <td><input type="text" id="firstName" name="firstName" placeholder="First Name" class="first-name-input" required></td>
                <td><input type="text" id="middleName" name="middleName" placeholder="M.I." class="middle-name-input" required></td>
                <td><input type="text" id="lastName" name="lastName" placeholder="Last Name" class="last-name-input" required></td>
              </tr>
            </table>

            <table class="table-input">
              <tr>
                <td><input type="text" id="mobileNumber" name="mobileNumber" placeholder="Mobile Number" pattern="09[0-9]{9}" required> <br>
                  
                </td>
                <td><input type="email" id="emailAddress" name="emailAddress" placeholder="Email Address" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" required>
                  
                </td>
              </tr>
            </table>

            <table class="table-input">
              <tr>
                <td><textarea name="address" rows="8" cols="80" placeholder="Residence Address" class="txt1" required></textarea></td>
              </tr>
            </table>

            <table class="table-input">
              <tr>
                <td><input type="text" id="zipcode" name="zipcode" placeholder="ZIP" pattern="[0-9]{4}" required><br>
                  
                </td>
                <td><input type="number" id="temperature" name="temperature" placeholder="Temperature" min=30 step="0.1" required><br>
                  
                </td>
              </tr>
            </table>

            <br>
            <div class="agreeBox-container">
              <div class="checkbox-container">
                <input type="checkbox" id="experienceSickness" name="experienceSickness" class="agree-box">
              </div>
              <label for="experienceSickness">I have not experienced cough, colds nor flu in the past 3 days.</label>
            </div>
            <div class="agreeBox-container">
              <div class="checkbox-container">
                <input type="checkbox" id="agree" name="agreeBox" class="agree-box" required>
              </div>
              <label for="agree">I hereby authorize Ninang’s Kitchen to collect and process data indicated herein for the purpose of contact tracing affecting control of the COVID-19 transmission. I understand that my personal information is protected by RA 10173 of the Data Privacy Act of 2012 and that this form will be destroyed after 30 days from the date of accomplishment, following the National Archives of the Philippines protocol.</label>
            </div>
            <div class="agreeNews-container">
              <div class="checkbox-container">
                <input type="checkbox" id="agreeNews" name="agreeNews" class="agree-box">
              </div>
              <label for="agreeNews">I would also like to be contacted for promos, updates and new offerings from Ninang's Kitchen.</label>
            </div>

            <div class="submit-container">
                <img src="images/SUBMIT.png" class="btn-img">
                <input type="submit" value=" " class="submit-button">
            </div>

          </form>


        </div>

        <br><br><br><br><br><br>

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
