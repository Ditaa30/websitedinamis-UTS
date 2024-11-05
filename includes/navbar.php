<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navbar Cerita Harian</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #fff; /* Latar belakang halaman */
        }
        .navbar-custom {
            background-color: #FFB6C1; /* Warna latar belakang navbar */
        }
        .navbar-custom .navbar-brand,
        .navbar-custom .nav-link {
            color: #000; /* Warna teks navbar */
        }
        .navbar-custom .nav-link:hover {
            color: #FF69B4; /* Warna teks saat hover */
        }
        .header {
            background-color: #FFFFFF; /* Warna latar belakang header */
            padding: 20px;
            text-align: center;
            color: #000; /* Warna teks header */
        }
    </style>
</head>
<body>

<nav class="navbar navbar-expand-md navbar-custom">
    <div class="container-fluid">
        <a class="navbar-brand" href="?page=home">Home</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="?page=about">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="?page=contact">Contact</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Belajar
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="?page=tabel">Datatables</a></li>
                        <li><a class="dropdown-item" href="?page=form">Form</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="?page=something">Something else here</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>