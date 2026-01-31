<?php
// konfigurasi database
$host = "localhost";
$user = "root";  // default XAMPP
$pass = "";
$db   = "topupdb";

// koneksi ke database
$conn = new mysqli($host, $user, $pass, $db);

// cek koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// ambil data dari form
$game_id = $_POST['game_id'];
$nominal = $_POST['nominal'];
$payment_method = $_POST['payment_method'];

// simpan ke database
$sql = "INSERT INTO topup_history (game_id, nominal, payment_method) 
        VALUES ('$game_id', '$nominal', '$payment_method')";

if ($conn->query($sql) === TRUE) {
    echo "Top up berhasil!";
} else {
    echo "Error: " . $conn->error;
}

$conn->close();
?>
