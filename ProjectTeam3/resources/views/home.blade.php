<!-- resources/views/home.blade.php -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Universitas Multi Data Palembang</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f0f2f5;
        }

        .navbar {
            background-color: #003366;
        }

        .navbar-brand {
            color: #fff;
        }

        .navbar-brand:hover {
            color: #ffc107;
        }

        .dashboard-header {
            margin-top: 30px;
            margin-bottom: 30px;
            text-align: center;
        }

        .card {
            margin-bottom: 20px;
        }

        .card-header {
            background-color: #003366;
            color: #fff;
        }

        .card-body {
            background-color: #fff;
        }

        footer {
            background-color: #003366;
            color: #fff;
            padding: 20px;
            text-align: center;
            margin-top: 30px;
        }

        footer a {
            color: #ffc107;
            text-decoration: none;
        }

        footer a:hover {
            text-decoration: underline;
        }
    </style>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">UMDP Dashboard</a>
        </div>
    </nav>

    <!-- Dashboard Content -->
    <div class="container">
        <div class="dashboard-header">
            <h1>Welcome to Universitas Multi Data Palembang</h1>
            <p class="lead">Selamat datang di dashboard resmi UMDP</p>
        </div>

        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">Mahasiswa</h5>
                    </div>
                    <div class="card-body">
                        <p class="card-text">Total Mahasiswa Terdaftar: 1200</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">Dosen</h5>
                    </div>
                    <div class="card-body">
                        <p class="card-text">Total Dosen: 75</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">Pengumuman</h5>
                    </div>
                    <div class="card-body">
                        <p class="card-text">Pengumuman terbaru tentang akademik dan kegiatan kampus</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">Aktivitas Terbaru</h5>
                    </div>
                    <div class="card-body">
                        <ul>
                            <li>Seminar Nasional Teknologi - 10 Maret 2024</li>
                            <li>Workshop Dosen: Penelitian & Pengembangan - 15 Maret 2024</li>
                            <li>Perkuliahan Semester Genap Dimulai - 20 Maret 2024</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">Status Sistem</h5>
                    </div>
                    <div class="card-body">
                        <p>Semua sistem berjalan dengan baik.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer>
        <p>&copy; 2024 Universitas Multi Data Palembang | <a href="#">Website Resmi</a></p>
    </footer>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>