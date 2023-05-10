<?php 

session_start();

require '../functions/functions.php';

if( isset($_SESSION["login"])) {
    header("Location: index.php");
    exit;
}

if(isset($_POST["register"])) {
    if(registrasi($_POST) > 0 ) {
        echo "
        <script>
        alert('registrasi berhasil');
        </script>
        ";
    } else {
        echo mysqli_error($conn);
    }
}
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Form</title>
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
        input {
            outline: none;
        }

        input:focus {
            background-color: #eaeaea;
        }
    </style>
</head>
<body>
    <div class="d-flex justify-content-center align-items-center" style="background-color: #535353; width: 100%; height: 100vh;">
        <div>
            <div class="card p-1 shadow-lg" style="width: 400px; height: max-content; border: 5px dotted lime;">
                <div class="h2 font-weight-bold text-center border-bottom p-3">
                    REGISTER FORM
                </div>
                <div>
                    <form class="p-2 d-flex flex-column" action="" method="post" style="gap: 25px;">
                        <input type="text" placeholder="Username" id="username" name="username" class="w-100 rounded" style="height: 45px; border: 1px solid #222;">
                        <input type="password" placeholder="Password" id="password" name="password" class="w-100 rounded" style="height: 45px; border: 1px solid #222;">
                        <input type="password" placeholder="Confirm Password" id="confirm" name="confirm" class="w-100 rounded" style="height: 45px; border: 1px solid #222;">
                        <div class="d-flex justify-content-end">
                            <button class="btn btn-primary w-50" id="register" name="register">Register</button>
                        </div>
                    </form>
                    <div class="d-flex flex-row align-items-center" style="gap: 5px">
                        <hr class="w-100" style="border-top: 2px solid #222;">
                        or
                        <hr class="w-100" style="border-top: 2px solid #222;">
                    </div>
                    <div class="d-flex justify-content-center">
                        <span>have an account?<a href="login.php" style="margin-left: 3px;">click here</a></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>