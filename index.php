<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <!-- CSS Bootstrap -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <!-- CSS Datatables -->
    <link href="assets/datatables/dataTables.dataTables.css" rel="stylesheet">
</head>

<body>
    <header>
        <h1 class="text-center p-3">Membuat Website Dinamis</h1>
    </header>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4; /* Warna latar belakang halaman */
        }
        header {
            background-color: #FFB6C1;
            color: #35424a;
            text-align: center;
            padding: 20px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }
        h1 {
            margin: 0; /* Menghilangkan margin default */
            font-size: 2.5em; /* Mengatur ukuran font */
        }
        p {
            font-size: 1.2em; /* Ukuran font untuk paragraf */
            margin-top: 10px; /* Jarak atas untuk paragraf */
        }
        footer {
            background-color: #FFB6C1; /* #FFB6C1 */
            color: #FFB6C1;
            text-align: center;
            padding: 2px 0;
            position: fixed;
            left: 0;
            right: 0;
            bottom: 0;
        }
    </style>
</head>
<body>

    <!-- menu -->
    <?php include "includes/navbar.php" ?>
    <!-- ./menu -->

    <!-- konten -->
    <div class="container mt-3">
        <?php include "konten.php" ?>
    </div>
    <!-- ./konten -->
    <footer>
        <div class="fixed-bottom text-bg-dark p-3 text-center mt-5 bg-danger">
            Pemrograman Web 1 @ <?= date("Y") ?>
        </div>
    </footer>
    <script src="assets/jquery/jquery-3.7.1.js"></script>
    <script src="assets/datatables/dataTables.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>

    <script>
        $('#example').DataTable();
    </script>
</body>

</html>