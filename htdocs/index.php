<?php
// Hata raporlamayı etkinleştir
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Giriş Sayfası</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="card mt-5">
                    <div class="card-body">
                        <h2 class="card-title text-center">Giriş Yap</h2>
                        <form action="login.php" method="POST">
                            <div class="form-group">
                                <label for="username">Kullanıcı Adı</label>
                                <input type="text" class="form-control" name="username" id="username" placeholder="Kullanıcı Adı" required>
                            </div>
                            <div class="form-group">
                                <label for="password">Şifre</label>
                                <input type="password" class="form-control" name="password" id="password" placeholder="Şifre" required>
                            </div>
                            <button type="submit" class="btn btn-primary btn-block">Giriş Yap</button>
                        </form>
                        <?php
                            if (isset($_GET['error'])) {
                                echo "<p class='text-danger mt-3 text-center'>Kullanıcı adı veya şifre yanlış!</p>";
                            }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS, Popper.js, and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
