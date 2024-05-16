<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Giriş Sayfası</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="login-container">
        <h2>Giriş Yap</h2>
        <form action="login.php" method="POST">
            <input type="text" name="username" placeholder="Kullanıcı Adı" required>
            <input type="password" name="password" placeholder="Şifre" required>
            <button type="submit">Giriş Yap</button>
        </form>
        <?php
            if(isset($_GET['error'])) {
                echo "<p class='error-message'>Kullanıcı adı veya şifre yanlış!</p>";
            }
        ?>
    </div>
</body>
</html>
