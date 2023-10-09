<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Branching</title>
</head>

<body>
    <!-- membuat form input -->
    <form method="post" action="">
        Masukkan Nilai x = <input type="number" name="x">
        <input type="submit" name="submit" value="Submit">
    </form>
    <?php
    // $x = 2;
    // echo "Nilai x = $x </br></br>";
    // if ($x > 0) {
    //     echo " $x adalah Bilangan Positif";
    // } else if ($x < 0) {
    //     echo "$x adalah Bilangan Negatif";
    // } else {
    //     echo "$x adalah Bilangan Nol";
    // }
    if (isset($_POST['submit'])) {
        $x = $_POST["x"];
        echo "Nilai x = $x </br></br>";
        if ($x > 0) {
            echo " $x adalah Bilangan Positif";
        } else if ($x < 0) {
            echo "$x adalah Bilangan Negatif";
        } else {
            echo "$x adalah Bilangan Nol";
        }
    }
    ?>
</body>

</html>