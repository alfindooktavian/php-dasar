<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Div dan Span</title>
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Belajar PHP">
    <meta name="keywords" content="233307001">
    <meta name="author" content="ALFINDO OKTAVIAN R">
</head>

<body>
    <?php
    $angka = 5; // Ubah nilai angka disini

    $angka_terbilang = '';
    switch ($angka) {
        case 1:
            $angka_terbilang = "satu";
            break;
        case 2:
            $angka_terbilang = "dua";
            break;
        case 3:
            $angka_terbilang = "tiga";
            break;
        case 4:
            $angka_terbilang = "empat";
            break;
        case 5:
            $angka_terbilang = "lima";
            break;
        case 6:
            $angka_terbilang = "enam";
            break;
        case 7:
            $angka_terbilang = "tujuh";
            break;
        case 8:
            $angka_terbilang = "delapan";
            break;
        case 9:
            $angka_terbilang = "sembilan";
            break;
        default:
            $angka_terbilang = "Di luar range 1-9";
            break;
    }

    echo "Angka $angka dalam huruf adalah: $angka_terbilang";
    ?>
</body>

</html>