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

  $date   = new DateTime(); //this returns the current date time
  $dateString = $date->format('Y-m-d');
  $krr    = explode('-', $dateString);
  $dateString = implode("", $krr);
  
//   ..\contact_tracing.csv

  $file = fopen("https://github.com/MatesFrameWork/ninangscontacttracing/blob/main/contact_tracing.csv","a");
  fputcsv($file,array($dateString,$name,$mobileNumber,$email,$address,$temperature,$update));
  fclose($file);

  header("location: ../insertdata.php");
}
?>
