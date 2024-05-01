<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP - Operator Logika</title>
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Belajar PHP">
    <meta name="keywords" content="233307001">
    <meta name="author" content="ALFINDO OKTAVIAN R">
</head>
<body>
    <?php
    /**
     * Operator logika yang bisa digunakan
     * ==   Sama dengan         $x == $y
     * ===  Identical           $x === $y
     * !=   Tidak sama dengan   $x != $y
     * <>   Tidak sama dengan   $x <> $y
     * !==  Not identical       $x !== $y
     * >    Lebih besar dari    $x > $y
     * <    Kurang dari         $x < $y
     * >=   Lebih besar atau sama dengan    $x >= $y
     * <=   Kurang dari atau sama dengan    $x <= $y
     * <=>  Spaceship   $x  <=> $y
     */

     $t = date("H");
     echo "If<br>";
     if ($t < 16) {
        echo "Selamat siang!";
     } 

     echo "<br> if dan Else <br>";
     if ($t < 20) {
        echo "Selamat siang!";
     } else {
        echo "Selamat malam!";
     }
     
     echo "<br> if dan Else <br>";
     if ($t < 12) {
        echo "Selamat Pagi!";
     } elseif ($t < 16) {
        echo "Selamat sore!";
     } else {
        echo "Selamat Malam!";
     }
    ?>

</body>
</html>