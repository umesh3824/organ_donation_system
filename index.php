<?php
include "php/includes/config.php";
include "php/includes/DBController.php";
include "php/doctor.php";
include "php/donar.php";
include "php/recipient.php";

$DBObj=new DBController($con);
$doctorObj=new Doctor($DBObj);
$donarObj=new Donar($DBObj);
$recipientObj=new Recipient($DBObj);
?>
<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="assets/css/style.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
  <title>Hello, world!</title>
</head>

<body class="bg-light">
  <div class="container">
    <div class="shadow mt-5 border card">
      <nav class="bg-success tab-bar">
        <a href="index.php" class="tab">Home</a>
        <a href="?pageflag=donarlogin" class="tab">Donar</a>
        <a href="?pageflag=recipientlogin" class="tab">Recipient</a>
        <a href="organ_check_availibility.php" class="tab">Check Availability</a>
      </nav>
      <?php
          if (isset($_GET['pageflag'])) {
            $pageflag = $_GET['pageflag'];
          } else {
            $pageflag = "index";
          }
          switch ($pageflag) {
            case "index":
              include "template/index.php";
              break;
            case "donarlogin":
              include "template/donar_login.php";
              break;
            case "recipientlogin":
              include "template/recipient_login.php";
              break;
            case "donarregistration":
              include "template/donar_registration.php";
              break;
            case "recipientregistration":
              include "template/recipient_registration.php";
              break;
            default:
              echo "<h class='text-center text-danger'> Invalid URL</h1>";
          }
      ?>
      <p class="bg-light m-0 border-bottom border-success p-2 text-center">Contact No:- 8855223366 | E-Mail:- admin@gmail.com</p>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>

</html>