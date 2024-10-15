<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eskul dan Seni Budaya SMK Wikrama</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        body {
            background-color: #f8f9fa;
        }

        .hero {
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 50px 0;
            background: url('{{ asset('assets/images/Gedung.jpg') }}') no-repeat center center/cover;
            color: white;
            border-radius: 10px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
            animation: fadeIn 1.5s;
            position: relative;
        }

        .hero-logo {
            position: absolute;
            top: 20px;
            left: 20px;
            width: 80px;
            z-index: 10;
        }

        .hero-text {
            text-align: center;
            z-index: 1;
        }

        .hero h1 {
            font-size: 2.5rem;
            font-weight: bold;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
            animation: slideInText 1.5s;
        }

        .hero p {
            font-size: 1.2rem;
            animation: fadeInText 2s;
        }

        .btn-primary {
            background-color: #ffc107;
            border: none;
        }

        .btn-primary:hover {
            background-color: #e0a800;
        }

        footer {
            background-color: #343a40;
            color: white;
            padding: 20px 0;
        }

        .activities {
            margin-top: 50px;
        }

        .activity-card {
            transition: transform 0.3s;
        }

        .activity-card:hover {
            transform: scale(1.05);
        }

        /* Animations */
        @keyframes fadeIn {
            from {
                opacity: 0;
            }

            to {
                opacity: 1;
            }
        }

        @keyframes slideInText {
            from {
                transform: translateY(-50%);
                opacity: 0;
            }

            to {
                transform: translateY(0);
                opacity: 1;
            }
        }

        @keyframes fadeInText {
            from {
                opacity: 0;
            }

            to {
                opacity: 1;
            }
        }

        .hero::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
            z-index: 1;
            border-radius: 10px;
        }
    </style>
</head>

<body>

    <header class="hero container mt-4">
        <img src="{{ asset('assets/images/logo-smkwikrama.png') }}" alt="Logo SMK Wikrama" class="hero-logo">
        <div class="hero-text">
            <h1>Selamat Datang di Eskul dan Seni Budaya SMK Wikrama!</h1>
            <p>Mengembangkan kreativitas dan bakat siswa melalui berbagai kegiatan ekstrakurikuler.</p>
            <a href="{{ route('ekstrakurikuler.index') }}" class="btn btn-primary">Esktrakurikuler dan Seni Budaya</a>
        </div>
    </header>

    <div class="container activities">
        <h2 class="text-center">Kegiatan Ekstrakurikuler</h2>
        <div class="row">
            <div class="col-md-4">
                <div class="card activity-card text-center">
                    <div class="card-body">
                        <i class="fas fa-flag fa-3x mb-3" style="color: #007bff;"></i> <!-- Ikon PASKIBRA -->
                        <h5 class="card-title">PASKIBRA</h5>
                        <p class="card-text">Latihan kepemimpinan dan nasionalisme melalui kegiatan PASKIBRA.</p>
                        <p class="activity-description">PASKIBRA merupakan kegiatan yang mendidik siswa untuk disiplin dan memiliki jiwa kepemimpinan. Dalam kegiatan ini, siswa akan dilatih untuk menjadi anggota pasukan pengibar bendera.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card activity-card text-center">
                    <div class="card-body">
                        <i class="fas fa-music fa-3x mb-3" style="color: #28a745;"></i> <!-- Ikon Seni Musik -->
                        <h5 class="card-title">Seni Musik</h5>
                        <p class="card-text">Ikuti kegiatan musik dan ciptakan lagu-lagu yang keren dan kuasai alat-alat musik.</p>
                        <p class="activity-description">Seni musik memberikan kesempatan kepada siswa untuk mengembangkan kemampuan bermusik, baik melalui alat musik tradisional maupun modern. Siswa dapat belajar menciptakan komposisi musik mereka sendiri.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card activity-card text-center">
                    <div class="card-body">
                        <i class="fas fa-paint-brush fa-3x mb-3" style="color: #dc3545;"></i> <!-- Ikon Seni Rupa -->
                        <h5 class="card-title">Seni Melukis</h5>
                        <p class="card-text">Ekspresikan diri Kamu dan Perasaanmu melalui media seni melukis.</p>
                        <p class="activity-description">Melalui seni melukis, siswa dapat mengekspresikan ide, emosi, dan imajinasi mereka melalui berbagai teknik lukis, dari cat minyak hingga cat air.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer class="text-center mt-5">
        <p>&copy; 2024 SMK Wikrama. Semua Hak Dilindungi.</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
