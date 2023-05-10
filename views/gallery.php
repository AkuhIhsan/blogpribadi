
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gallery</title>
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
<div class="container-lg p-3">
    <div class="mt-5 p-2" style="background-color: #000; border-radius: 7px;">
        <div class="text-center text-white font-weight-bold">
            Menu Gallery
        </div>
    </div>
    <div class="mt-5 p-2" style="background-color: #000; border-radius: 7px;">
        <ul class="image-grid list-unstyled d-flex justify-content-center">
          <li class="p-1">
            <img src="../assets/gallery/raw-1.jpg" alt="raw-image" class="img-fluid">
          </li>
          <li class="p-1">
            <img src="../assets/gallery/raw-2.jpg" alt="raw-image" class="img-fluid">
          </li>
          <li class="p-1">
            <img src="../assets/gallery/raw-3.jpg" alt="raw-image" class="img-fluid">
          </li>
        </ul>
      </div>
    <div class="mt-5 p-2" style="background-color: #000; border-radius: 7px;">
        <ul class="image-grid list-unstyled d-flex justify-content-center">
          <li class="p-1">
            <img src="../assets/gallery/raw-1.jpg" alt="raw-image" class="img-fluid">
          </li>
          <li class="p-1">
            <img src="../assets/gallery/raw-2.jpg" alt="raw-image" class="img-fluid">
          </li>
          <li class="p-1">
            <img src="../assets/gallery/raw-3.jpg" alt="raw-image" class="img-fluid">
          </li>
        </ul>
      </div>
    <div class="mt-5 p-2" style="background-color: #000; border-radius: 7px;">
        <ul class="image-grid list-unstyled d-flex justify-content-center">
          <li class="p-1">
            <img src="../assets/gallery/raw-1.jpg" alt="raw-image" class="img-fluid">
          </li>
          <li class="p-1">
            <img src="../assets/gallery/raw-2.jpg" alt="raw-image" class="img-fluid">
          </li>
          <li class="p-1">
            <img src="../assets/gallery/raw-3.jpg" alt="raw-image" class="img-fluid">
          </li>
        </ul>
      </div>
      
   </div>
</body>
</html>