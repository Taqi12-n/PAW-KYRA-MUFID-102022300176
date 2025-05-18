<<<<<<< HEAD
<?php
include 'connect.php';

// Cek Apakah ada data yang dikirim
if (isset($_GET[' '])) {
    $id = $_GET['id'];

    // Definisikan query untuk menghapus data


    // Jalankan query


    if (mysqli_affected_rows($conn) > 0) {
        header("location: katalog_buku.php");
    } else {
        echo "<script>alert('Data gagal dihapus');</script>";
    }
}
=======
<?php
include 'connect.php';

// Cek Apakah ada data yang dikirim
if (isset($_GET[' '])) {
    $id = $_GET['id'];

    // Definisikan query untuk menghapus data


    // Jalankan query


    if (mysqli_affected_rows($conn) > 0) {
        header("location: katalog_buku.php");
    } else {
        echo "<script>alert('Data gagal dihapus');</script>";
    }
}
>>>>>>> b7bbf27f6b4e2ccc2f14bdc8f4bd9170f1b4cedc
?>