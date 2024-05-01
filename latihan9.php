<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP - Fungsi</title>
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Belajar PHP">
    <meta name="keywords" content="233307001">
    <meta name="author" content="ALFINDO OKTAVIAN R">
</head>
<body>
    <?php 
    // contoh fungsi
    function writeMsg($nama) {
        echo "selamat datang " . $nama . "<br>";
    }
    writeMsg("Ahmad"); // pemanggilan fungsi

    // fungsi dengan mengirim nilai balik
    function tambah(int $angka1, int $angka2) {
        $a = $angka1 + $angka2;
        return $a;
    }

    $hasil = tambah(5, 5);
    echo ($hasil);
    ?>
</body>
</html>