<?php 
$conn = mysqli_connect('localhost','root','','blogIhsan');

if(!$conn) {
    die('koneksi gagal');
}

// Function Query
function query($query) {
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while( $row = mysqli_fetch_assoc($result)){
        $rows[] = $row;
    }
    return $rows;
}

function registrasi($data) {
    global $conn;

    $username = htmlspecialchars(stripslashes($data["username"]));
    $password = mysqli_real_escape_string($conn, $data["password"]);
    $confirm = mysqli_real_escape_string($conn, $data["confirm"]);

    if($password !== $confirm) {
        echo "
        <script>
            alert('Konfirmasi Password Salah!!!');
        </script>
        ";
        return false;
    }

    // confirm username
    $result = mysqli_query($conn, "SELECT * FROM users WHERE username = '$username'");

    if(mysqli_fetch_assoc($result)) {
        echo "
        <script>
            alert('Username Tidak Tersedia!!!');
        </script>";
        return false;
    }

    // enc pass
    $password = password_hash($password, PASSWORD_DEFAULT);

    // create
    mysqli_query($conn, "INSERT INTO users VALUES('', '$username', '$password')");

    return mysqli_affected_rows($conn);

}

?>