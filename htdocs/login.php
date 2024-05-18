<?php
// Hata raporlamayı etkinleştir
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Kullanıcı adı ve şifreyi kontrol etmek için sabit değerler
$correct_username = "b000000000";
$correct_password = "b000000000";

// Formdan gelen kullanıcı adı ve şifre
$username = $_POST['username'];
$password = $_POST['password'];

// Kullanıcı adı ve şifre doğruysa AnaSayfa'ya yönlendir
if ($username == $correct_username && $password == $correct_password) {
    header("Location: /Web_Teknolojileri/AnaSayfa/AnaSayfa.html");
    exit();
} else {
    // Kullanıcı adı veya şifre yanlışsa hata mesajı ile beraber tekrar giriş sayfasına yönlendir
    header("Location: index.php?error=1");
    exit();
}
?>
