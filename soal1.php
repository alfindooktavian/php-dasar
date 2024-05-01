<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>PHP - Soal Menghitung Gaji Bersih</title>
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Belajar PHP">
    <meta name="keywords" content="233307001">
    <meta name="author" content="ALFINDO OKTAVIAN R">
</head>

<body>
    <?php
    $gaji_pokok = 3500000;
    $tunjangan = 1600000;

    $gaji_kotor = $gaji_pokok + $tunjangan;
    $pajak = 0.1 * $gaji_kotor;

    $gaji_bersih = $gaji_kotor - $pajak;

    echo "<h2>Menghitung Gaji Bersih Obi</h2>";

    echo "Diketahui : <br>";
    echo "Gaji pokok Obi adalah Rp. $gaji_pokok <br>";
    echo "Tunjangan Obi adalah Rp. $tunjangan <br><br>";
    echo "Gaji kotor = $gaji_pokok + $tunjangan = " . $gaji_kotor . "<br>";
    echo "Pajak = 10% x $gaji_kotor = " . $pajak . "<br>";
    echo "Gaji bersih = $gaji_kotor - $pajak = $gaji_bersih <br><br>";
    echo "Gaji bersih yang diterima Obi setiap bulannya adalah: Rp. " . number_format($gaji_bersih, 0, ",", ".");
    ?>
</body>

</html>