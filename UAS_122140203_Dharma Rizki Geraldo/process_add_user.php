<?php
include 'database.php';

// Memeriksa apakah form telah disubmit
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $gender = $_POST['gender'];

    // Validasi input (misalnya, memastikan email belum terdaftar)
    $sql = "SELECT id FROM users WHERE email = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows > 0) {
        echo "Email sudah terdaftar. Coba lagi dengan email lain.";
    } else {
        // Enkripsi password
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        // Query untuk memasukkan data user baru
        $insert_sql = "INSERT INTO users (name, email, password, gender) VALUES (?, ?, ?, ?)";
        $insert_stmt = $conn->prepare($insert_sql);
        $insert_stmt->bind_param("ssss", $name, $email, $hashed_password, $gender);
        
        if ($insert_stmt->execute()) {
            echo "User berhasil ditambahkan.";
            header("Location: admin.php");
            exit();
        } else {
            echo "Terjadi kesalahan: " . $conn->error;
        }
    }

    $stmt->close();
    $conn->close();
}
?>
