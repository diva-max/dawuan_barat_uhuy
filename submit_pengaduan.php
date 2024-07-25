<?php
// Database configuration
$servername = "localhost"; // Update with your database server name
$username = "root"; // Update with your database username
$password = ""; // Update with your database password
$dbname = "dawuan"; // Update with your database name

// Create a connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve and validate form data
$jenis_pengaduan = isset($_POST['jenis_pengaduan']) ? trim($_POST['jenis_pengaduan']) : null;
$nama = isset($_POST['nama']) ? trim($_POST['nama']) : null;
$nomor = isset($_POST['nomor']) ? trim($_POST['nomor']) : null;
$email = isset($_POST['email']) ? trim($_POST['email']) : null;
$alamat = isset($_POST['alamat']) ? trim($_POST['alamat']) : null;
$kabupaten = isset($_POST['kabupaten']) ? trim($_POST['kabupaten']) : null;
$kelurahan = isset($_POST['kelurahan']) ? trim($_POST['kelurahan']) : null;
$deskripsi = isset($_POST['deskripsi']) ? trim($_POST['deskripsi']) : null;

// Check if any required fields are missing
if (!$jenis_pengaduan || !$nama || !$nomor || !$email || !$alamat || !$kabupaten || !$kelurahan || !$deskripsi) {
    echo "<script>
            Swal.fire('Semua kolom harus diisi!', '', 'warning');
          </script>";
    exit;
}

$stmt = $conn->prepare("INSERT INTO tbl_pengaduan (jenis_pengaduan, nama, nomor, email, alamat, kabupaten, kelurahan, deskripsi) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
$stmt->bind_param("ssssssss", $jenis_pengaduan, $nama, $nomor, $email, $alamat, $kabupaten, $kelurahan, $deskripsi);

// Execute the query
if ($stmt->execute()) {
    echo "<script>
            Swal.fire('Pengaduan telah disubmit!', '', 'success').then(() => {
                window.location.href = 'thank_you.html'; // Redirect to a thank you page or back to the form
            });
          </script>";
} else {
    echo "<script>
            Swal.fire('Terjadi kesalahan!', 'Silahkan coba lagi.', 'error');
          </script>";
}

// Close the statement and connection
$stmt->close();
$conn->close();
