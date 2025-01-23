<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    //konstanta
    define("gaji", 5000000);
    define("bonus", 500000);
    define("pajak",0.12);

    $proyek =1;
    //$total gaji yang didapat
    //$total gaji bersih

    $bonus = $proyek * bonus;
    $gajiKotor = gaji + $bonus;
    $gajiBersih = $gajiKotor - ($gajiKotor * pajak);

    echo"ini adalah bonus anda $bonus <br/>";
    echo"ini adalah gaji anda setelah ditambah $gajiKotor <br/>";
    echo"ini adalah gaji bersih anda $gajiBersih <br/>";
?>
</body>
</html>