<<<<<<< HEAD
<?php
// host
$host = "localhost";
// username
$username = "root";
// password
$password = "";
// database
$database = "db_buku";
// port
$port = 3306;

// conn
$conn = mysqli_connect($host, $username, $password, $database, $port);

// check conn
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

=======
<?php
// host
$host = "localhost";
// username
$username = "root";
// password
$password = "";
// database
$database = "db_buku";
// port
$port = 3306;

// conn
$conn = mysqli_connect($host, $username, $password, $database, $port);

// check conn
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

>>>>>>> b7bbf27f6b4e2ccc2f14bdc8f4bd9170f1b4cedc
?>