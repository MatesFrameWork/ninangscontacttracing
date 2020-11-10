<?php

$firstName = $middleInitial = $lastName = $mobileNumber = $email = $street = " ";
$subdivision = $barangay = $town = $province = $zipcode = $temperature = $update = "";

if ($_SERVER['REQUEST_METHOD']=='POST'){

  $firstName = $_POST["firstName"];
  $middleInitial = $_POST["middleName"];
  $lastName = $_POST["lastName"];

  $name = $firstName." ".$middleInitial.". ".$lastName;

  $mobileNumber = $_POST["mobileNumber"];
  $email = $_POST["emailAddress"];

  $street = $_POST["street"];
  $subdivision = $_POST["subdivision"];
  $barangay = $_POST["barangay"];
  $town = $_POST["town"];
  $province = $_POST["province"];
  $zipcode = $_POST["zipcode"];

  $address = $street." ".$subdivision." ".$barangay." ".$town.", ".$province." ".$zipcode;

  $temperature = $_POST["temperature"];

  if (isset($_POST["agreeNews"])){
    $update = 1;
  }

  else {
    $update = 0;
  }

  $server = "localhost";
  $user = "root";
  $pass = "Aeron0005";
  $dbname = "customers";
  $conn=mysqli_connect($server,$user,$pass,$dbname);

  if ($conn){

    $insert = "INSERT INTO contact_tracing_tb (name, mobile_number, email, address, temperature, update_news)
    VALUES('" .$name. "','".$mobileNumber."','".$email."','".$address."','".$temperature."','".$update."')";

    mysqli_query($conn,$insert);

  }

    mysqli_close($conn);

  // header("location: ../insertdata.php");
}
?>
