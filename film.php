<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <title>Etalase Film</title>
    <style>
        body {
            background: linear-gradient(to bottom, #f8f9fa, #e9ecef);
            font-family: Arial, sans-serif;
        }
        .container {
            margin-top: 50px;
        }
        .card {
            transition: transform 0.3s; /* efek animasi */
        }
        .card:hover {
            transform: scale(1.05); /* hover */
        }
        .card-img-top {
            height: 300px; /* Set a fixed height for images */
            object-fit: cover; /* Keep aspect ratio and cover the area */
        }
        .btn-primary {
            background-color: #007bff; /* Change button color */
            border: none; /* Remove border */
        }
        .btn-primary:hover {
            background-color: #0056b3; /* Darker shade on hover */
        }
        h1 {
            color: #343a40; /* Set a dark color for the title */
            margin-bottom: 30px; /* Add space below the title */
        }
        .card-title {
            color: #343a40; /* Set a dark color for the card title */
        }
    </style>
</head>
<body>
    <div class="container">
        <h1 class="text-center font-weight-bold">Sedang Tayang</h1>
        <div class="row">
            <!-- Card Film 1 -->
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="images/Bolehkah Sekali Saja Kumenangis.jpeg" class="card-img-top" alt="Film 1">
                    <div class="card-body">
                        <h5 class="card-title font-weight-bold">Bolehkah Sekali Saja Kumenangis</h5>
                        <p class="card-text">Setelah kakaknya meninggalkan rumah, Tari berjuang sendiri untuk menyelamatkan ibunya dari ayahnya yang kasar. Tari yang mengalami trauma sejak kecil memutuskan untuk bergabung dengan kelompok pendukung bersama Baskara.</p>
                        <a href="index.php?film=film1" class="btn btn-primary"><i class="fas fa-ticket-alt"></i> Pesan Tiket</a>
                    </div>
                </div>
            </div>
            <!-- Card Film 2 -->
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="images/Agak Laen.jpeg" class="card-img-top" alt="Film 2">
                    <div class="card-body">
                        <h5 class="card-title font-weight-bold">Agak Laen</h5>
                        <p class="card-text">Seorang lelaki tua meninggal dalam wahana rumah hantu yang gagal. Operator mengubur jasadnya di lokasi, menjadikannya objek wisata populer.</p>
                        <a href="index.php?film=film2" class="btn btn-primary"><i class="fas fa-ticket-alt"></i> Pesan Tiket</a>
                    </div>
                </div>
            </div>
            <!-- Card Film 3 -->
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="images/Home Sweet Loan.jpeg" class="card-img-top" alt="Film 3">
                    <div class="card-body">
                        <h5 class="card-title font-weight-bold">Home Sweet Loan</h5>
                        <p class="card-text">Seorang pekerja kelas menengah bernama Kaluna. Ia masih tinggal bersama orang tua dan kakak-kakaknya yang sudah menikah.</p>
                        <a href="index.php?film=film3" class="btn btn-primary"><i class="fas fa-ticket-alt"></i> Pesan Tiket</a>
                    </div>
                </div>
            </div>
            <!-- Card Film 4 -->
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="images/Kuasa Gelap.jpeg" class="card-img-top" alt="Film 4">
                    <div class="card-body">
                        <h5 class="card-title font-weight-bold">Kuasa Gelap</h5>
                        <p class="card-text">Seorang pekerja kelas menengah bernama Kaluna. Ia masih tinggal bersama orang tua dan kakak-kakaknya yang sudah menikah.</p>
                        <a href="index.php?film=film4" class="btn btn-primary"><i class="fas fa-ticket-alt"></i> Pesan Tiket</a>
                    </div>
                </div>
            </div>
            <!-- Card Film 5 -->
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="images/Mencuri Raden Saleh.jpeg" class="card-img-top" alt="Film 5">
                    <div class="card-body">
                        <h5 class="card-title font-weight-bold">Mencuri Raden Saleh</h5>
                        <p class="card-text">Seorang pekerja kelas menengah bernama Kaluna. Ia masih tinggal bersama orang tua dan kakak-kakaknya yang sudah menikah.</p>
                        <a href="index.php?film=film5" class="btn btn-primary"><i class="fas fa-ticket-alt"></i> Pesan Tiket</a>
                    </div>
                </div>
            </div>
            <!-- Card Film 6 -->
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="images/Munkar.jpeg" class="card-img-top" alt="Film 6">
                    <div class="card-body">
                        <h5 class="card-title font-weight-bold">Munkar</h5>
                        <p class="card-text">Seorang pekerja kelas menengah bernama Kaluna. Ia masih tinggal bersama orang tua dan kakak-kakaknya yang sudah menikah.</p>
                        <a href="index.php?film=film6" class="btn btn-primary"><i class="fas fa-ticket-alt"></i> Pesan Tiket</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
