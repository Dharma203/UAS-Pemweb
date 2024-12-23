<?php
include 'database.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $gender = $_POST['gender'];

    // Jika password kosong, biarkan password tetap yang lama
    if (!empty($password)) {
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);
        $sql = "UPDATE users SET name = ?, email = ?, password = ?, gender = ? WHERE id = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ssssi", $name, $email, $hashed_password, $gender, $id);
    } else {
        $sql = "UPDATE users SET name = ?, email = ?, gender = ? WHERE id = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("sssi", $name, $email, $gender, $id);
    }

    if ($stmt->execute()) {
        echo "User berhasil diperbarui.";
        header("Location: admin.php");
        exit();
    } else {
        echo "Terjadi kesalahan: " . $conn->error;
    }
}
?>
