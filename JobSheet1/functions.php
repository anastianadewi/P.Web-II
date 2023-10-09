<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fungsi</title>
</head>

<body>
    <!-- membuat form input -->
    <form method="post" action="">
        Masukkan Panjang Persegi Panjang: <input type="number" name="panjang" required><br>
        Masukkan Lebar Persegi Panjang: <input type="number" name="lebar" required><br>
        Masukkan Jari-jari Lingkaran: <input type="number" name="jari_jari" required><br>
        <input type="submit" name="submit" value="Hitung">
    </form>

    <?php
    // function persegi_panjang($p, $l)
    // {
    //     return $p * $l;
    // }
    // function lingkaran($r)
    // {
    //     return 3.14 * $r * $r;
    // }
    // echo "Luas Persegi Panjang = " . persegi_panjang(5, 2) . "</br>";
    // echo "Luas Lingkaran = " . lingkaran(7) . "</br>";
    function persegi_panjang($p, $l)
    {
        return $p * $l;
    }
    function lingkaran($r)
    {
        return 3.14 * $r * $r;
    }

    // Inisialisasi variabel nilai default
    $luas_persegi_panjang = 0;
    $luas_lingkaran = 0;

    // Memproses input dari formulir jika sudah disubmit
    if (isset($_POST['submit'])) {
        // Mendapatkan nilai panjang dan lebar dari formulir
        $p = $_POST['panjang'];
        $l = $_POST['lebar'];

        // Mendapatkan nilai jari-jari dari formulir
        $r = $_POST['jari_jari'];

        // Menghitung luas persegi panjang dan lingkaran
        $luas_persegi_panjang = persegi_panjang($p, $l);
        $luas_lingkaran = lingkaran($r);
    }

    // Menampilkan hasil perhitungan
    echo "Luas Persegi Panjang= " . $luas_persegi_panjang . "<br>";
    echo "Luas Lingkaran= " . $luas_lingkaran . "<br>";
    ?>
</body>

</html>