<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Sonuçları | Sevim Şevval Acı</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body { 
            font-family: 'Poppins', sans-serif; 
            background-color: #f0f2f5; 
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
            margin: 0;
            padding: 20px; 
        }
        .result-card {
            background: white;
            border-radius: 25px;
            box-shadow: 0 20px 40px rgba(0,0,0,0.1);
            padding: 40px;
            max-width: 600px;
            width: 100%;
            border-top: 8px solid #212529; 
        }
        .result-header h2 {
            font-weight: 600;
            color: #212529;
            margin-bottom: 5px;
        }
        .info-row {
            display: flex;
            flex-direction: column; 
            padding: 15px 0;
            border-bottom: 1px solid #eee;
        }
        /* Masaüstü (PC) için yan yana görünüm ayarı */
        @media (min-width: 768px) {
            .info-row {
                flex-direction: row;
                justify-content: space-between;
                align-items: center;
            }
            .info-value {
                text-align: right;
                max-width: 60%;
            }
        }
        .info-label {
            font-weight: 600;
            color: #6c757d;
            font-size: 0.9rem;
            text-transform: uppercase;
        }
        .info-value {
            color: #212529;
            font-weight: 400;
            word-wrap: break-word; 
        }
        .btn-back {
            background-color: #212529;
            color: white;
            border-radius: 12px;
            padding: 15px;
            width: 100%;
            margin-top: 30px;
            text-decoration: none;
            display: block;
            text-align: center;
            font-weight: 600;
            transition: 0.3s;
        }
        .btn-back:hover {
            background-color: #343a40;
            color: white;
            transform: translateY(-2px);
        }
    </style>
</head>
<body>

    <div class="result-card shadow-lg">
        <div class="result-header text-center mb-4">
            <h2>📩 Form Verileri</h2>
            <p class="text-muted small">Gönderilen bilgiler aşağıda listelenmiştir.</p>
        </div>

        <div class="result-body">
            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                
                $ad = htmlspecialchars($_POST['ad_soyad'] ?? 'Belirtilmedi');
                $mail = htmlspecialchars($_POST['email'] ?? 'Belirtilmedi');
                $tel = htmlspecialchars($_POST['tel'] ?? 'Belirtilmedi');
                $mesaj = htmlspecialchars($_POST['mesaj'] ?? 'Belirtilmedi');

                
                $alanlar = [
                    "Ad Soyad" => $ad,
                    "E-posta" => $mail,
                    "Telefon" => $tel,
                    "Mesaj" => $mesaj
                ];

                foreach ($alanlar as $etiket => $deger) {
                    echo '<div class="info-row">
                            <span class="info-label">' . $etiket . '</span>
                            <span class="info-value">' . $deger . '</span>
                          </div>';
                }
            } else {
                echo '<div class="alert alert-danger text-center">Doğrudan erişim engellendi! Lütfen formu kullanın.</div>';
            }
            ?>
        </div>

        <a href="iletisim.html" class="btn-back">İletişim Sayfasına Dön</a>
    </div>

</body>
</html>