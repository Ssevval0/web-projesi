<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hoş Geldiniz | Web Teknolojileri Projesi</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-dark sticky-top">
        <div class="container">
            <a class="navbar-brand" href="index.php">WEB<span>PORTFOLIO</span></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link active" href="index.php">Hakkında</a></li>
                    <li class="nav-item"><a class="nav-link" href="ozgecmis.php">Özgeçmiş</a></li>
                    <li class="nav-item"><a class="nav-link" href="sehrim.php">Şehrim</a></li>
                    <li class="nav-item"><a class="nav-link" href="ilgi-alanlarim.php">İlgi Alanlarım</a></li>
                    <li class="nav-item"><a class="nav-link" href="iletisim.php">İletişim</a></li>
                    <li class="nav-item"><a class="nav-link login-btn" href="login.php">Giriş Yap</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <header class="hero-section">
        <div class="container">
            <div class="row align-items-center min-vh-100">
                <div class="col-lg-6">
                    <div class="content-box">
                        <h6 class="text-primary text-uppercase fw-bold">Bilgisayar Mühendisi Adayı</h6>
                        <h1 class="display-3 fw-bold">Merhaba, Ben <br><span class="text-gradient">Sevim Şevval Acı</span></h1>
                        <p class="lead my-4 text-secondary">
                            Sakarya Üniversitesi'nde eğitimime devam ediyorum. Teknolojiyi, tasarımı ve kodlamayı seviyorum. Bu web sitesi benim dijital dünyadaki ilk adımlarımdan biri.
                        </p>
                        <div class="d-flex gap-3">
                            <a href="ozgecmis.php" class="btn btn-primary btn-lg px-4">Özgeçmişimi Gör</a>
                            <a href="iletisim.php" class="btn btn-outline-dark btn-lg px-4">Bana Ulaşın</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 text-center mt-5 mt-lg-0">
                    <div class="profile-img-container">
                        <img src="fotograflar/img/profil.jpg" alt="Profil Resmi" class="img-fluid profile-img">
                        <div class="experience-badge">
                            <span>SAÜ</span>
                            <small>Öğrenci</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <footer class="text-center py-4">
        <p class="mb-0 text-secondary">&copy; 2026 - Sevim Şevval Acı | Tüm Hakları Saklıdır.</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>