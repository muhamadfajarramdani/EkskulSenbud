<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WIKRAMA</title>
    <link rel="icon" href="{{ asset('assets/images/logo-smkwikrama.png') }}" type="image/png">
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- FontAwesome Icons -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <!-- Google Fonts - Poppins -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <style>
        /* CSS untuk sidebar */
        .sidebar {
            height: 100vh;
            /* Full height */
            position: fixed;
            /* Tetap pada posisi saat scroll */
            left: 0;
            top: 0;
            width: 250px;
            /* Lebar sidebar */
            background-color: #343a40;
            /* Warna latar belakang lebih gelap */
            padding-top: 20px;
        }

        .sidebar .nav-link {
            color: #fff;
            /* Teks putih */
            font-weight: bold;
        }

        .sidebar .nav-link:hover {
            background-color: #495057;
            /* Warna hover */
            border-radius: 5px;
        }

        .sidebar .nav-link i {
            margin-right: 10px;
            /* Memberi jarak antara ikon dan teks */
        }

        .content {
            margin-left: 250px;
            /* Sama dengan lebar sidebar */
            padding: 20px;
        }

        .navbar-brand {
            color: #fff;
            font-size: 1.5rem;
            text-align: center;
            display: block;
            margin-bottom: 30px;
            font-family: 'Poppins', sans-serif;
            /* Ganti font SMK WIKRAMA dengan Poppins */
        }

        .logo-img {
            display: block;
            margin: 0 auto 20px auto;
            /* Pusatkan gambar dan beri margin bawah */
            width: 100px;
            /* Sesuaikan ukuran gambar */
            height: auto;
        }

        /* Styling untuk hr */
        .sidebar hr {
            border: none;
            /* Hilangkan border default */
            height: 5px;
            /* Atur ketebalan */
            background-image: linear-gradient(to right, #6c757d, #fff);
            /* Tambahkan efek gradien */
            margin: 20px auto;
            /* Beri jarak margin */
            width: 100%;
            /* Sesuaikan lebar garis */
        }
    </style>
</head>

<body>

    <div class="sidebar shadow-sm">
        <!-- Tambahkan logo di sini -->
        <img src="{{ asset('assets/images/logo-smkwikrama.png') }}" alt="Logo SMK Wikrama" class="logo-img">
        <a class="navbar-brand fw-bold">SMK WIKRAMA</a>
        <hr>
        <ul class="navbar-nav flex-column mt-4">
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/') }}">
                    <i class="fas fa-home"></i> Home
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('ekstrakurikuler.index') }}">
                    <i class="fas fa-football-ball"></i> Ekstrakurikuler
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('senbud.data') }}">
                    <i class="fas fa-paint-brush"></i> Seni Budaya
                </a>
            </li>
        </ul>
    </div>

    <div class="content">
        @yield('content') <!-- Bagian ini akan diisi oleh konten dari setiap view yang menggunakan layout ini -->
    </div>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init({
            duration: 600,
            once: true,
        });
    </script>

</body>

</html>
