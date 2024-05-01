<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>PHP - Soal Hitung Pecahan Uang</title>
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Belajar PHP">
    <meta name="keywords" content="233307001">
    <meta name="author" content="ALFINDO OKTAVIAN R">
</head>

<body>
    <h3>Program Menghitung Pecahan Uang</h3>
    <?php
    function hitungPecahanUang($jumlahUang)
    {
        $pecahan = [100000, 50000, 20000, 10000, 5000, 2000, 500];
        $jumlahPecahan = [];

        foreach ($pecahan as $nilai) {
            $jumlah = intval($jumlahUang / $nilai);
            $jumlahPecahan[$nilai] = $jumlah;
            $jumlahUang %= $nilai;
        }

        return $jumlahPecahan;
    }

    $jumlahUangDiambil = 1387500;
    $hasilHitung = hitungPecahanUang($jumlahUangDiambil);

    echo "Jumlah uang Ani : $jumlahUangDiambil <br><br>"; 

    foreach ($hasilHitung as $nilai => $jumlah) {
        if ($jumlah > 0) {
            echo "Jumlah uang Rp. " . number_format($nilai) . " = " . $jumlah . " lembar<br>";
        }
    }
    ?>

</body>

</html>