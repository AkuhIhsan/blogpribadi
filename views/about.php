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
    <title>About</title>
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

    .custom-gap {
      --bs-gutter-x: 30px;
    }
    .custom-column {
      flex-wrap: wrap;
    }
    @media (max-width: 576px) {
      .custom-column {
        flex-direction: column;
      }
    }
  </style>
</head>
<body>
    <!-- Navbar -->
    <div
    class="bg-dark shadow-lg d-flex align-items-center p-2 justify-content-between"
    style="width: 100%; height: 35px"
  >
    <div id="brand" class="text-white" style="font-weight: bold">
      Ihsan Hadi Pratama
    </div>
    <ul class="d-flex flex-row list-unstyled my-auto">
      <li>
        <a class="text-decoration-none text-white p-2" href="index.html">Home</a>
      </li>
      <li>
        <a class="text-decoration-none text-white p-2" href="about.html">About</a>
      </li>
      <li>
        <a class="text-decoration-none text-white p-2" href="gallery.html">Gallery</a>
      </li>
      <li>
        <a class="text-decoration-none text-white p-2" href="contact.html">Contact</a>
      </li>
    </ul>
  </div>
  <!-- /Navbar -->
  <!-- Card About -->
  <div class="container">
    <div class="card mt-5 p-4 shadow-lg">
      <img src="../assets/nophoto.jpg" alt="gambar gagal dimuat" width="220px" height="220" class="mx-auto border rounded-circle border-lg border-dark shadow-lg">
      <div class="mx-auto font-weight-bold h1">
        Ihsan Hadi Pratama
      </div>
      <div class="mx-auto font-weight-bold h2">
        SMKN 2 Banjarmasin
      </div>
      <div class="mx-auto font-weight-bold h5">
        Pengembangan Perangkat Lunak dan Gim
      </div>
      <div class="mx-auto font-weight-bold text-muted">
        X PPLG B
      </div>
    </div>
  </div>
  <!-- /Card About -->
  <div class="container d-flex flex-row flex-lg-column justify-content-center mt-5 mb-5 custom-gap custom-column">
    <div class="card mb-3">
      <div class="bg-primary text-white d-flex justify-content-center align-items-center display-4 font-weight-bold rounded-top"
        style="height: 80px;">
        <span>Judul</span>
      </div>
      <div class="text-justify p-3">
        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Odit eaque at saepe doloremque neque autem optio deserunt. Adipisci natus culpa expedita sequi aperiam obcaecati quod quidem. Vero itaque reiciendis aut ipsum non consectetur quasi consequatur accusamus porro laboriosam soluta et sequi voluptatibus hic asperiores deserunt expedita quas aperiam laborum ipsa, nihil modi? Tenetur cumque velit voluptas beatae consequatur totam aperiam!
        <br>
        <a href="#" class="mt-4 btn btn-primary w-25">More</a>
      </div>
    </div>
    <div class="card mb-3">
      <div class="bg-primary text-white d-flex justify-content-center align-items-center display-4 font-weight-bold rounded-top"
        style="height: 80px;">
        <span>Judul</span>
      </div>
      <div class="text-justify p-3">
        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Odit eaque at saepe doloremque neque autem optio deserunt. Adipisci natus culpa expedita sequi aperiam obcaecati quod quidem. Vero itaque reiciendis aut ipsum non consectetur quasi consequatur accusamus porro laboriosam soluta et sequi voluptatibus hic asperiores deserunt expedita quas aperiam laborum ipsa, nihil modi? Tenetur cumque velit voluptas beatae consequatur totam aperiam!
        <br>
        <a href="#" class="mt-4 btn btn-primary w-25">More</a>
      </div>
    </div>
    <div class="card mb-3">
      <div class="bg-primary text-white d-flex justify-content-center align-items-center display-4 font-weight-bold rounded-top"
        style="height: 80px;">
        <span>Judul</span>
      </div>
      <div class="text-justify p-3">
        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Odit eaque at saepe doloremque neque autem optio deserunt. Adipisci natus culpa expedita sequi aperiam obcaecati quod quidem. Vero itaque reiciendis aut ipsum non consectetur quasi consequatur accusamus porro laboriosam soluta et sequi voluptatibus hic asperiores deserunt expedita quas aperiam laborum ipsa, nihil modi? Tenetur cumque velit voluptas beatae consequatur totam aperiam!
        <br>
        <a href="#" class="mt-4 btn btn-primary w-25">More</a>
      </div>
    </div>
  </div>
</body>
</html>