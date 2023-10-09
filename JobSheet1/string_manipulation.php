<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>String Manipulation</title>
</head>

<body>
    <?php
    $date = "Hari ini Senin, 09-10-2023 </br>";
    $x = "Selamat Belajar PHP! </br>";
    echo $x;
    //huruf kapital
    echo strtoupper($x);
    //huruf kecil
    echo strtolower($x);
    //memotong string
    echo substr($x, 0, 7);
    echo "</br></br>";
    echo $date;
    echo strtoupper($date);
    echo strtolower($date);
    echo substr($date, 0, 14);
    ?>
</body>

</html>