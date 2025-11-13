<!DOCTYPE html>
<html>
<head>
    <title>Penggunaan WHILE</title>
</head>
<body>
    Menggunakan WHILE
    <br>

    <?php
    $jumlah = 0;
    while ($jumlah < 100) {
         echo "<p>Ini adalah perulangan ke-$jumlah</p>";
    $jumlah++;
    }
    ?>
</body>
</html>