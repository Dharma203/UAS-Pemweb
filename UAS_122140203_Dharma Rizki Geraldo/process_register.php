<?php
include 'database.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Ambil data dari form
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $gender = $_POST['gender'];

    // Validasi data
    if (empty($name) || empty($email) || empty($password) || empty($gender)) {
        echo "<script>alert('Semua field harus diisi!'); window.location.href = 'register.html';</script>";
        exit();
    }

    // Enkripsi password
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Masukkan data ke database
    $sql = "INSERT INTO users (name, email, password, gender) VALUES ('$name', '$email', '$hashed_password', '$gender')";
    if (mysqli_query($conn, $sql)) {
        // Redirect ke halaman login setelah berhasil registrasi
        echo "<script>alert('Registrasi berhasil! Silakan login.'); window.location.href = 'login.html';</script>";
        exit();
    } else {
        echo "<script>alert('Terjadi kesalahan: " . mysqli_error($conn) . "'); window.location.href = 'register.html';</script>";
    }
}
?>
