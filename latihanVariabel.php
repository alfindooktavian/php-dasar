<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP - Menampilkan Semua Hari</title>
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Belajar PHP">
    <meta name="keywords" content="233307001">
    <meta name="author" content="ALFINDO OKTAVIAN R">
</head>
<body>
    <h2>Daftar Hari Menggunakan Mekanisme Variabel</h2>
    <?php 
    $nama_hari = "Senin";
    $nama_hari .= " Selasa";
    $nama_hari .= " Rabu";
    $nama_hari .= " Kamis";
    $nama_hari .= " Jum'at";
    $nama_hari .= " Sabtu";
    $nama_hari .= " Minggu";
    echo $nama_hari;
    ?>
</body>
</html>