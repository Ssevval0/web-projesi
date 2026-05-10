<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $sifre = $_POST['sifre'];

    $ogrenciNo = strstr($email, '@', true);

    if (!empty($email) && !empty($sifre) && $sifre === $ogrenciNo) {
        echo '
        <!DOCTYPE html>
        <html lang="tr">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Giriş Başarılı</title>
            <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap" rel="stylesheet">
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
            <style>
                body { background-color: #f8f9fa; height: 100vh; display: flex; align-items: center; justify-content: center; font-family: "Poppins", sans-serif; }
                .welcome-card { background: white; padding: 40px; border-radius: 25px; box-shadow: 0 15px 35px rgba(0,0,0,0.1); text-align: center; border-top: 6px solid #0d6efd; width: 90%; max-width: 450px; }
            </style>
        </head>
        <body>
            <div class="welcome-card">
                <h1 class="fw-bold" style="color: #212529;">Hoşgeldiniz 🎉</h1>
                <p class="mt-3 text-secondary">Sayın <strong>' . htmlspecialchars($ogrenciNo) . '</strong>, başarıyla giriş yaptınız.</p>
                <a href="index.html" class="btn btn-primary mt-3 w-100" style="border-radius:10px; background-color: #0d6efd; border:none; padding:12px;">Ana Sayfaya Dön</a>
            </div>
        </body>
        </html>';
    } else {
        echo '<script>alert("❌ Hatalı kullanıcı adı veya şifre!"); window.location.href="login.html";</script>';
        exit();
    }
} else {
    header("Location: login.html");
    exit();
}
?>