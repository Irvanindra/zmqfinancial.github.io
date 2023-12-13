<?php
// Mengambil data dari formulir HTML
$nama = $_POST['namaa'];
$email = $_POST['emaill'];
$nomor = $_POST['nomor'];

// Konfigurasi koneksi ke database
$host = "localhost";
$username = "root";
$password = "";
$database = "test";

// Membuat koneksi
$conn = new mysqli($host, $username, $password, $database);

// Periksa koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Nama tabel diubah menjadi sesuai dengan struktur database Anda
$nama_tabel = "registration";

// Query untuk menyimpan data ke dalam database
$sql = "INSERT INTO $nama_tabel (namaa, emaill, nomor) VALUES ('$nama', '$email', '$nomor')";

// Eksekusi query
if ($conn->query($sql) === TRUE) {
    echo "Data berhasil disimpan";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Tutup koneksi
$conn->close();
