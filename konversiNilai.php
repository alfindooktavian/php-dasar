<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>PHP - Konversi Nilai</title>
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Belajar PHP">
    <meta name="keywords" content="233307001">
    <meta name="author" content="ALFINDO OKTAVIAN R">
</head>

<body>
    <h3>Program Konversi Nilai Angka ke Huruf </h3>
    <?php
    /**
     * C    = 0 -> 59
     * BC   = 60 -> 69
     * B    = 70 -> 79
     * AB   = 80 -> 89
     * A    = 90 -> 100
     */

    $nilai = 80;

    // Cetak nilai
    echo "Nilai : " . $nilai . "<br>";

    if ($nilai >= 0 && $nilai <= 59) {
        echo "Nilai anda C";
    } elseif ($nilai >= 60 && $nilai <= 69) {
        echo "Nilai anda BC";
    } elseif ($nilai >= 70 && $nilai <= 79) {
        echo "Nilai anda B";
    } elseif ($nilai >= 80 && $nilai <= 89) {
        echo "Nilai anda AB";
    } elseif ($nilai >= 90 && $nilai <= 100) {
        echo "Nilai anda A";
    } else {
        echo "Nilai tidak valid";
    }
    ?>
</body>

</html>