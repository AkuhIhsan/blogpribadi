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
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Home</title>
    <link
      rel="stylesheet"
      href="../node_modules/bootstrap/dist/css/bootstrap.min.css"
    />
    <script src="../node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
      integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
      crossorigin="anonymous"
    />
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
      integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
      crossorigin="anonymous"
    ></script>
    <style>
      #container {
        background-image: url("../assets/bg-nature.jpg");
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        width: 100%;
        height: 100vh;
      }

      @media only screen and (max-width: 512px) {
        #brand {
          display: none;
        }
      }
    </style>
  </head>
  <body>
    <div id="container">
    <!-- Navbar -->
      <div
        class="bg-dark shadow-lg d-flex align-items-center p-2 justify-content-between"
        style="width: 100%; height: 45px"
      >
        <div id="brand" class="text-white" style="font-weight: bold">
          Ihsan Hadi Pratama
        </div>
        <ul class="d-flex flex-row list-unstyled align-items-center pt-3">
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
          <li>
            <a class="text-decoration-none text-danger p-2" href="logout.php">Logout</a>
          </li>
        </ul>
      </div>
      <!-- /Navbar -->
      <div
        class="container-lg bg-dark mt-5 rounded-2 p-5"
        style="width: 100%; height: max-content"
      >
        <div class="d-flex flex-column text-white mx-auto">
          <h1>Home</h1>
          <p class="text-justify my-auto">
            Lorem ipsum dolor sit amet consectetur, adipisicing elit.
            Consectetur dolore corrupti eligendi, totam accusantium eaque
            molestiae at nulla vel neque voluptatem modi quasi nihil ducimus,
            sapiente libero laboriosam distinctio hic. Temporibus qui facere
            rerum nulla iure corporis quas rem nostrum, in, suscipit sapiente
            culpa provident harum quae nobis autem minus.
          </p>
        </div>
        <div class="container">
          <ul id="home-content" class="row list-unstyled my-4 border-top p-2">
            <li class="col-6 col-md-3 mb-3">
              <div
                class="rounded d-flex align-items-center justify-content-center"
              >
                <a class="btn btn-danger text-decoration-none text-white p-2" style="padding: 20; width: 200px;" href="index.php">Home</a>
              </div>
            </li>
            <li class="col-6 col-md-3 mb-3">
              <div
                class="rounded d-flex align-items-center justify-content-center"
              >
                <a class="btn btn-success text-decoration-none text-white p-2" style="padding: 20; width: 200px;" href="about.php"
                  >About</a
                >
              </div>
            </li>
            <li class="col-6 col-md-3 mb-3">
              <div
                class="rounded d-flex align-items-center justify-content-center text-dark"
              >
                <a class="text-decoration-none text-white p-2 btn btn-warning" style="padding: 20px; width: 200px;" href="gallery.php"
                  >Gallery</a
                >
              </div>
            </li>
            <li class="col-6 col-md-3 mb-3">
              <div
                class="d-flex align-items-center justify-content-center"
              >
                <a class="btn btn-primary text-decoration-none text-white p-2" style="padding: 20px; width: 200px;" href="contact.php"
                  >Contact</a
                >
              </div>
            </li>
          </ul>
          <div class="container-fluid">
            <img src="../assets/car.gif" alt="" width="100%" height="300px" class="container-fluid rounded">
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
