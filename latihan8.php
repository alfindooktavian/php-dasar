<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP - Array 2 Dimensi</title>
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Belajar PHP">
    <meta name="keywords" content="233307001">
    <meta name="author" content="ALFINDO OKTAVIAN R">
</head>
<body>
    <?php 
    // data kelas dengan array 2 dimensi
    $array = array(
        "1C" => array("udin", "ismail", "adi"),
        "1D" => array("lukman", "fajri", "mahmud")
    );

    // menampilkan data array
    print_r($array);
    echo "<br>";
    
    // menampilkan kelas 1C
    print_r($array['1C']);
    echo "<br>";
    
    // menampilkan kelas 1D dengan index 0
    echo $array['1D'][0];
    echo "<br>";
    
    // tampilkan fajri
    echo $array['1D'][1];
    echo "<br>";
    
    // tampilkan adi
    echo $array['1C'][2];

    // data kelas bisa dituliskan juga dengan
    $array_simple = [
        "1C" => ["udin", "ismail", "adi"],
        "1D" => ["lukman", "fajri", "mahmud"]
    ];
    ?>
</body>
</html>