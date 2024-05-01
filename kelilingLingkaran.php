<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP - Keliling Lingkaran</title>
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Belajar PHP">
    <meta name="keywords" content="233307001">
    <meta name="author" content="ALFINDO OKTAVIAN R">
</head>
<body>
    <?php
    $radius = 15; // jari-jari lingkaran
    $pi = 3.14; // nilai phi

    // Rumus keliling lingkaran: 
    // Keliling = 2 * phi * jari-jari/radius
    $keliling = 2 * $pi * $radius;

    echo "<p>Keliling = 2 x $pi x $radius = $keliling</p>";
    echo "Keliling lingkaran dengan jari-jari $radius cm adalah: $keliling cm";
    ?>

</body>
</html>