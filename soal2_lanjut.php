<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>PHP - Soal Poin Siswa</title>
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Belajar PHP">
    <meta name="keywords" content="233307001">
    <meta name="author" content="ALFINDO OKTAVIAN R">
</head>

<body>
    <?php
    $siswa = array(
        array('no_urut' => 1, 'poin' => 75, 'siswa' => 'Adi'),
        array('no_urut' => 2, 'poin' => 80, 'siswa' => 'Joni'),
        array('no_urut' => 3, 'poin' => 65, 'siswa' => 'Jihan'),
        array('no_urut' => 4, 'poin' => 70, 'siswa' => 'Aya'),
        array('no_urut' => 5, 'poin' => 85, 'siswa' => 'Ita'),
        array('no_urut' => 6, 'poin' => 90, 'siswa' => 'Budi'),
        array('no_urut' => 7, 'poin' => 95, 'siswa' => 'Tini'),
        array('no_urut' => 8, 'poin' => 65, 'siswa' => 'Sari'),
    );

    echo "<h2>Program Perhitungan Nilai Akhir</h2>";

    // a) Tampilkan poin siswa dengan nomor urut 5
    $nomorUrut = 5;
    $siswaDitemukan = false;

    echo "a) Poin siswa dengan nomor urut $nomorUrut : ";
    foreach ($siswa as $data) {
        if ($data['no_urut'] === $nomorUrut) {
            echo $data['poin'] . "<br>";
            $siswaDitemukan =true;
            break;
        }
    }
    if (!$siswaDitemukan) echo "Tidak ada<br>";

    // b) Tampilkan semua nama siswa yang memiliki poin 90
    $poin = 90;
    $siswaLulus90 = [];
    foreach ($siswa as $data) {
        if ($data['poin'] === $poin) {
            $siswaLulus90[] = $data['siswa'];
        }
    }

    echo "b) Nama siswa dengan poin 90 : ";
    if (!empty($siswaLulus90)) {
        echo (implode(', ', $siswaLulus90) . "<br>");
    } else {
        echo "b) Tidak ada<br>";
    }

    // c) Tampilkan semua nama siswa yang memiliki poin 100
    $poin = 100;
    $siswaLulus100 = [];
    foreach ($siswa as $data) {
        if ($data['poin'] === $poin) {
            $siswaLulus100[] = $data['siswa'];
        }
    }

    echo "c) Nama siswa dengan poin 100 : ";
    if (!empty($siswaLulus100)) {
        echo (implode(', ', $siswaLulus100) . "<br>");
    } else {
        echo "Tidak ada<br>";
    }
    ?>

</body>
