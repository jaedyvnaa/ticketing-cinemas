<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Ambil data dari form
    $jenis_tiket = $_POST['jenis_tiket'];
    $jumlah_tiket = intval($_POST['jumlah_tiket']);
    $tanggal_pemesanan = $_POST['tanggal_pemesanan'];

    // Konversi string tanggal ke format tanggal
    $tanggal = new DateTime($tanggal_pemesanan);

    // Tentukan harga tiket
    if ($jenis_tiket == 'dewasa') {
        $harga_tiket = 50000;
    } else {
        $harga_tiket = 30000;
    }

    // Hitung total harga sebelum tambahan biaya atau diskon
    $total_harga = $harga_tiket * $jumlah_tiket;
    $total_harga_sebelum_tambahan = $total_harga; // Simpan total sebelum tambahan biaya

    // Cek apakah hari pemesanan adalah akhir pekan (Sabtu atau Minggu)
    $hari = $tanggal->format('l'); // Mengambil nama hari
    if ($hari == 'Saturday' || $hari == 'Sunday') {
        $total_harga += 10000 * $jumlah_tiket; // Tambah biaya Rp10.000 per tiket
    }

    // Cek apakah total harga melebihi Rp150.000 untuk diskon
    if ($total_harga > 150000) {
        $diskon = $total_harga * 0.1; // Diskon 10%
        $total_harga -= $diskon;
        $pesan_diskon = "Anda mendapat diskon 10%! ";
        $show_diskon = true; // Tampilkan diskon
    } else {
        $diskon = 0; // Tidak ada diskon
        $pesan_diskon = "";
        $show_diskon = false; // Tidak tampilkan diskon
    }

    // Tampilkan hasil total harga
    echo "<!DOCTYPE html>
    <html lang='en'>
    <head>
        <meta charset='UTF-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <link href='https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css' rel='stylesheet'>
        <title>Ringkasan Pemesanan Tiket</title>
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
            .summary {
                background-color: #e9ecef;
                border-radius: 10px;
                padding: 20px;
                margin-top: 20px;
            }
            .total {
                font-weight: bold;
                font-size: 1.25rem;
            }
            .before-discount {
                text-decoration: line-through;
                color: #dc3545; /* Warna merah untuk harga sebelum diskon */
            }
        </style>
    </head>
    <body>
        <div class='container'>
            <h1>Ringkasan Pemesanan Tiket Bioskop</h1>
            <div class='summary'>
                <p><strong>Jenis Tiket:</strong> " . ucfirst($jenis_tiket) . "</p>
                <p><strong>Jumlah Tiket:</strong> " . $jumlah_tiket . "</p>
                <p><strong>Tanggal Pemesanan:</strong> " . $tanggal->format('d-m-Y') . "</p>
                <p><strong>Hari Pemesanan:</strong> " . $hari . "</p>
                <p class='before-discount'><strong>Total Harga Sebelum Tambahan:</strong> Rp" . number_format($total_harga_sebelum_tambahan, 0, ',', '.') . "</p>
                <p class='total'><strong>Total Harga Setelah Diskon:</strong> Rp" . number_format($total_harga, 0, ',', '.') . "</p>";
    
    // Tampilkan pesan diskon hanya jika ada diskon
    if ($show_diskon) {
        echo "<p class='text-success'>$pesan_diskon</p>";
    }
    
    echo "</div>
            <a href='index.php' class='btn btn-primary btn-block'>Kembali ke halaman pemesanan</a>
        </div>
        
        <script src='https://code.jquery.com/jquery-3.5.1.slim.min.js'></script>
        <script src='https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js'></script>
        <script src='https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js'></script>
    </body>
    </html>";
} else {
    // Jika file diakses langsung tanpa form
    echo "Silakan pesan tiket melalui form.";
}
?>
