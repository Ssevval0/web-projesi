<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Özgeçmiş | Sevim Şevval Acı</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <style>
        body { font-family: 'Poppins', sans-serif; background-color: #f8f9fa; }
        .cv-card { transition: transform 0.3s; border: none; }
        .cv-card:hover { transform: translateY(-5px); }
        .badge-tech { background-color: #2b2d42; color: white; margin-right: 5px; }
        .timeline-title { color: #0d6efd; font-weight: 600; }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
        <div class="container">
            <a class="navbar-brand" href="index.php">SEVİM ŞEVVAL<span>ACI</span></a>
            <div class="navbar-nav ms-auto">
                <a class="nav-link" href="index.php">Hakkında</a>
                <a class="nav-link active" href="ozgecmis.php">Özgeçmiş</a>
            </div>
        </div>
    </nav>

    <main class="container my-5">
        <header class="text-center mb-5">
            <h1 class="display-4 fw-bold">Özgeçmişim</h1>
            <p class="text-muted">Eğitim Hayatım ve Teknik Bilgilerim</p>
            <hr class="w-25 mx-auto border-primary border-2">
        </header>

        <div class="row justify-content-center">
            <div class="col-md-8">
                
                <section class="mb-5">
                    <h2 class="h4 mb-4 fw-bold"><i class="bi bi-book"></i> Eğitim Bilgileri</h2>
                    
                    <article class="cv-card p-4 shadow bg-white rounded border-start border-primary border-4 mb-4">
                        <div class="d-flex justify-content-between align-items-start">
                            <div>
                                <h5 class="timeline-title mb-1">Sakarya Üniversitesi</h5>
                                <p class="mb-0 text-dark fw-bold">Bilgisayar Mühendisliği Bölümü</p>
                                <p class="text-muted small mb-0">Lisans Dönemi</p>
                            </div>
                            <span class="badge bg-primary rounded-pill">2026 - Devam</span>
                        </div>
                    </article>

                    <article class="cv-card p-4 shadow bg-white rounded border-start border-info border-4 mb-4">
                        <div class="d-flex justify-content-between align-items-start">
                            <div>
                                <h5 class="timeline-title mb-1" style="color: #0dcaf0;">Malatya Anadolu Lisesi</h5>
                                <p class="mb-0 text-dark fw-bold">Fen Bilimleri Alanı</p>
                                <p class="text-muted small mb-0">Lise Mezuniyeti</p>
                            </div>
                            <span class="badge bg-info text-dark rounded-pill">Mezun</span>
                        </div>
                    </article>
                </section>

                <section>
                    <h2 class="h4 mb-4 fw-bold">Teknik Yetenekler</h2>
                    <article class="cv-card p-4 shadow bg-white rounded border-start border-success border-4">
                        <div class="d-flex flex-wrap gap-2">
                            <span class="badge badge-tech p-2">C++ & OOP</span>
                            <span class="badge badge-tech p-2">C# & WinForms</span>
                            <span class="badge badge-tech p-2">HTML5 & CSS3</span>
                            <span class="badge badge-tech p-2">PHP Temelleri</span>
                            <span class="badge badge-tech p-2">Bootstrap 5</span>
                        </div>
                    </article>
                </section>
            </div>
        </div>
        
        <div class="text-center mt-5">
            <a href="index.php" class="btn btn-outline-primary px-4 shadow-sm">Ana Sayfaya Dön</a>
        </div>
    </main>

    <footer class="text-center py-4 mt-5 border-top bg-white">
        <p class="text-secondary mb-0">&copy; 2026 - Sevim Şevval Acı | Sakarya Üniversitesi</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>