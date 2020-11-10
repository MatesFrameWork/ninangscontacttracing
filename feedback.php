<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Ninang's Kitchen</title>
    <link rel="icon" type="image/svg+xml" href="images/logo1.png">
    <link rel="stylesheet" href="css/feedback.css">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
  </head>
  <body>

      <section id="data-inserted">
        <div class="container-background">
          <img src="images/form_img.jpg" class="background-img">
        </div>

        <div class="container-text">
          <p >CUSTOMER SURVEY</p>
        </div>

        <div class="container-logo">
          <img src="images/logo1.png" class="logo">
        </div>

        <form action="insertfeedback.html" method="post">

          <div class="container-ambiance-text">
            <p>Ambiance</p>
          </div>

          <div class="container-rating1">
            <div class="container-star">
              <div class="rating1">
                <input type="radio" id="star1" name="rating1" value="1" ><label for="star1"></label>
                <input type="radio" id="star2" name="rating1" value="2" ><label for="star2"></label>
                <input type="radio" id="star3" name="rating1" value="3" ><label for="star3"></label>
                <input type="radio" id="star4" name="rating1" value="4" ><label for="star4"></label>
              </div>
            </div>
          </div>

          <div class="container-ambiance">
            <textarea name="ambiance" cols="80" placeholder="Comments or Suggestions"></textarea>
          </div>

          <div class="container-service-text">
            <p>Service</p>
          </div>

          <div class="container-rating2">
            <div class="container-star">
              <div class="rating2">
                <input type="radio" id="star5" name="rating2" value="1" ><label for="star5"></label>
                <input type="radio" id="star6" name="rating2" value="2" ><label for="star6"></label>
                <input type="radio" id="star7" name="rating2" value="3" ><label for="star7"></label>
                <input type="radio" id="star8" name="rating2" value="4" ><label for="star8"></label>
              </div>
            </div>
          </div>

          <div class="container-service">
            <textarea name="service" cols="80" placeholder="Comments or Suggestions"></textarea>
          </div>

          <div class="container-food-text">
            <p>Food Quality</p>
          </div>

          <div class="container-rating3">
            <div class="container-star">
              <div class="rating3">
                <input type="radio" id="star9" name="rating3" value="1" ><label for="star9"></label>
                <input type="radio" id="star10" name="rating3" value="2" ><label for="star10"></label>
                <input type="radio" id="star11" name="rating3" value="3" ><label for="star11"></label>
                <input type="radio" id="star12" name="rating3" value="4" ><label for="star12"></label>
              </div>
            </div>
          </div>

          <div class="container-food">
            <textarea name="food" cols="80" placeholder="Comments or Suggestions"></textarea>
          </div>

          <div class="container-others-text">
            <p>Is there anything else you'd like to share?</p>
          </div>

          <div class="container-others">
            <textarea name="others" cols="80" placeholder="Comments or Suggestions"></textarea>
          </div>

          <div class="container-button">
            <input type="submit" value="SUBMIT" class="submit-button">
          </div>

        </form>



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
