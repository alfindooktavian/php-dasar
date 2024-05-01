<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP - Mengakses Index Array</title>
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Belajar PHP">
    <meta name="keywords" content="233307001">
    <meta name="author" content="ALFINDO OKTAVIAN R">
</head>

<body>
    <?php
    $namaBuah = array("Nanas", "Mangga", "Jeruk", "Apel", "Melon", "Manggis");
    echo "saya suka " . $namaBuah[0] . ", " . $namaBuah[1] . " dan " . $namaBuah[2] . ".<br>";

    // tampilkan Mangga
    echo "saya suka " . $namaBuah[1];
    echo "<br>";

    // tampilkan Jeruk
    echo "saya suka " . $namaBuah[2];
    echo "<br>";

    // tampilkan Apel
    echo "saya suka " . $namaBuah[3];
    echo "<br>";

    // tampilkan Melon
    echo "saya suka " . $namaBuah[4];
    echo "<br><br>";

    // array dengan spesifik index
    $umur = array("Andi" => "35 Tahun", "Ben" => "37 Tahun", "Joe" => "39 Tahun");
    $umur['ahmad'] = "50 Tahun";

    echo "Umur Andi adalah " . $umur['Andi'];
    echo "<br>";

    echo "Umur Ben adalah " . $umur['Ben'];
    echo "<br>";

    echo "Umur Joe adalah " . $umur['Joe'];
    echo "<br>";
    ?>
</body>

</html>