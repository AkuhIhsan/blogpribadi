<?php 
session_start();

require '../functions/functions.php';

if (!isset($_SESSION["login"])) {
    header("Location: login.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
  <link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
    crossorigin="anonymous"
  />
  <style>

    .custom-gap {
      --bs-gutter-x: 30px;
      display: flex;
      gap: 20px;
    }
    .custom-column {
      flex-wrap: wrap;
    }
    @media (max-width: 576px) {
      #brand {
        display: none;
      } 

      .custom-column {
        flex-direction: column;
      }
    }
  </style>
</head>
<body>
    <div id="container" class="bg-dark mh-100" style="width: 100%; height: 100%"> 
    <!-- Navbar -->
    <div
    class="bg-dark shadow-lg d-flex align-items-center p-2 justify-content-between border-bottom border-success"
    style="width: 100%; height: 35px"
  >
    <div id="brand" class="text-white" style="font-weight: bold">
      Ihsan Hadi Pratama
    </div>
    <ul class="d-flex flex-row list-unstyled my-auto">
      <li>
        <a class="text-decoration-none text-white p-2" href="index.php">Home</a>
      </li>
      <li>
        <a class="text-decoration-none text-white p-2" href="about.php">About</a>
      </li>
      <li>
        <a class="text-decoration-none text-white p-2" href="gallery.php">Gallery</a>
      </li>
      <li>
        <a class="text-decoration-none text-white p-2" href="contact.php">Contact</a>
      </li>
    </ul>
  </div>
  <!-- /Navbar -->
  <!-- contact -->
  <div class="container-lg p-5">
    <div class="bg-light shadow-lg rounded mt-5" style="width: 100%; height: max-content; margin-bottom: 27.8vh;">
        <div class="bg-primary rounded-top" style="width: 100%; height: 50px;">
            <h1 class="text-white font-weight-bold text-center">MY CONTACT</h1>
        </div>
        <div class="container mt-5">
            <div class="row justify-content-center custom-gap">
              <div class="col-md-6 col-lg-4 mb-5">
                <div class="card" style="width: 100%;">
                  <img src="../assets/wa.webp" alt="wa" class="card-img-top" style="height: 280px;">
                  <div class="card-body">
                    <a class="btn btn-success rounded-0 w-100 text-decoration-none" href="#">CONTACT ME</a>
                  </div>
                </div>
              </div>
              <div class="col-md-6 col-lg-4 mb-5">
                <div class="card" style="width: 100%;">
                  <img src="../assets/ig.avif" alt="ig" class="card-img-top" style="height: 280px;">
                  <div class="card-body">
                    <a class="btn btn-success rounded-0 w-100 text-decoration-none" href="#">CONTACT ME</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          
    </div>
  </div>
  <!-- /contact -->
</div>
  <script
    src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
    crossorigin="anonymous"
  ></script>
</body>
</html>