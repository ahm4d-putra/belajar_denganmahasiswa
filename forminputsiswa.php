<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8" />
    <title>Input Data Siswa</title>
</head>

<body style="margin:0; min-height:100vh; display:flex; align-items:center; justify-content:center; background:orange">
    <form action="tampilansiswa.php" method="post">
        <b>Pengelolaan Data Mahasiswa</b>
        <br><br>

    <pre>
    Nama   : <input type="text" name="nama"   size="25" maxlength="50"> 
    Alamat : <input type="text" name="alamat" size="25" maxlength="50">
    </pre>

       Jenis Kelamin :
        <input type="radio" name="jeniskel" value="Laki-Laki"> Laki - Laki
        <input type="radio" name="jeniskel" value="Perempuan"> Perempuan

        <p>
            Pekerjaan :
            <select name="pekerjaan">
                <option value="">-Pilih-</option>
                <option value="Pelajar">Pelajar</option>
                <option value="Karyawan">Karyawan</option>
                <option value="Wirausaha">Wirausaha</option>
                <option value="Lain-lain">Lain-lain</option>
            </select>
        </p>

        <p>
            Hobi :
            <input type="checkbox" name="hobi1" value="Olahraga">Olahraga
            <input type="checkbox" name="hobi2" value="Musik">Musik
            <input type="checkbox" name="hobi3" value="Jalan-Jalan">Jalan-Jalan
        </p>

        <p>
            <input type="submit" value="Kirim">
            <input type="reset" value="Batal">
        </p>
    </form>
</body>

</html>