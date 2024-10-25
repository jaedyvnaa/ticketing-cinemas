<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <title>Pemesanan Tiket</title>
    <style>
        body {
            background-color: #f8f9fa;
        }
        .container {
            margin-top: 50px;
            max-width: 600px;
            background-color: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        h1 {
            text-align: center;
            color: #007bff;
        }
        .btn-primary {
            width: 100%;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Informasi Pemesanan</h1>
        <form action="process.php" method="post">
            <div class="form-group">
                <label for="jenis_tiket">Kategori:</label>
                <select name="jenis_tiket" id="jenis_tiket" class="form-control" required>
                    <option value="dewasa">Dewasa - Rp50.000</option>
                    <option value="anak">Anak-anak - Rp30.000</option>
                </select>
            </div>

            <div class="form-group">
                <label for="jumlah_tiket">Jumlah Tiket:</label>
                <input type="number" name="jumlah_tiket" id="jumlah_tiket" class="form-control" min="1" required>
            </div>

            <div class="form-group">
                <label for="tanggal_pemesanan">Pilih Tanggal:</label>
                <input type="date" name="tanggal_pemesanan" id="tanggal_pemesanan" class="form-control" required>
            </div>

            <button type="submit" class="btn btn-primary">Pesan Tiket</button>
        </form>
    </div>
    
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
