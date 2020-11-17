<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Ninang's Kitchen</title>
    <link rel="icon" type="image/svg+xml" href="images/logo1.png">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="css/admin1.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
  </head>
  <body>


      <section id="admin-table">
        <div class="container-logo2">
          <img src="images/logo1.png" class="logo2">
        </div>

        <div class="container">

          <div class="container-fluid container-admin-display">

            <form action="#" method="post">
              <input class="search1" type="text" name="traceID" value="Trace ID">
              <input class="search1" type="text" name="customerName" value="Name">
              <input class="search1" type="text" name="zipCode" value="ZIP">

              <div class="submit-container">
                  <img src="images/search.png" class="btn-img">
                  <input type="submit" value=" " class="submit-button">
              </div>
            </form>

          </div>

          <div class="container-fluid container-table">

            <?php

            $server = "localhost";
            $user = "root";
            $pass = "Aeron0005";
            $dbname = "customers";
            $conn=mysqli_connect($server,$user,$pass,$dbname);

            if ($conn){

              $query = "SELECT name, mobile_number from contact_tracing_tb ORDER BY id DESC";

              $result = mysqli_query($conn,$query);

              echo "<table class='customer-display'>
                      <tr>
                        <th>Name</th>
                        <th>Mobile</th>
                        <th></th>
                      </tr>";

              while($row = mysqli_fetch_array($result)){

                echo "  <tr>
                          <td class='display'>".$row[0]."</td>
                          <td class='display mobile'>".$row[1]."</td>
                          <td class='display see-more'><a href='#'>See More</a></td>
                        </tr>
                ";
              }

              echo "</table>";

            }

              mysqli_close($conn);


             ?>

          </div>

        </div>

        <br> <br> <br> <br> <br> <br> <br>

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
