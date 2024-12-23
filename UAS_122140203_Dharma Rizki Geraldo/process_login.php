<?php
include 'database.php';
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = htmlspecialchars($_POST['email']);
    $password = htmlspecialchars($_POST['password']);
    $rememberMe = isset($_POST['remember_me']); // Cek opsi "Remember Me"

    $stmt = $conn->prepare("SELECT id, name, password, role FROM users WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();
        if (password_verify($password, $user['password'])) {
            // Set session
            $_SESSION['username'] = $user['name'];
            $_SESSION['role'] = $user['role']; // Simpan role dalam sesi

            // Set cookie jika Remember Me dipilih
            if ($rememberMe) {
                setcookie("username", $user['name'], time() + (86400 * 30), "/"); // Berlaku selama 30 hari
            }

            // Jika admin, redirect ke dashboard admin
            if ($_SESSION['role'] == 'admin') {
                header("Location: admin.php");
            } else {
                header("Location: dashboard.php"); // Jika bukan admin
            }
            exit();
        } else {
            echo "Password salah.";
        }
    } else {
        echo "Email tidak ditemukan.";
    }

    $stmt->close();
}

$conn->close();
?>
