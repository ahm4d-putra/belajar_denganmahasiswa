<?php 
 
function e($s){ return htmlspecialchars((string)$s, ENT_QUOTES, 
'UTF-8'); } 
 
$nama      = $_POST['nama']      ?? ''; 
$alamat    = $_POST['alamat']    ?? ''; 
$jeniskel  = $_POST['jeniskel']  ?? ''; 
$pekerjaan = $_POST['pekerjaan'] ?? ''; 
 
 
$hobi = []; 
if (!empty($_POST['hobi1'])) $hobi[] = $_POST['hobi1']; 
if (!empty($_POST['hobi2'])) $hobi[] = $_POST['hobi2']; 
if (!empty($_POST['hobi3'])) $hobi[] = $_POST['hobi3']; 
?> 
<!DOCTYPE html> 
<html lang="id"> 
<head> 
  <meta charset="UTF-8"> 
<title>Data Siswa</title> 
  <link rel="stylesheet" href="tampilansiswa.css"> 
   
</head> 
<body> 
  <div class="card"> 
    <h2>Data Terkirim</h2> 
    <div class="row"><strong>Nama</strong><div><?= e($nama) ?: '-'; 
?></div></div> 
    <div class="row"><strong>Alamat</strong><div><?= e($alamat) ?: 
'-'; ?></div></div> 
    <div class="row"><strong>Jenis Kelamin</strong><div><?= 
e($jeniskel) ?: '-'; ?></div></div> 
    <div class="row"><strong>Pekerjaan</strong><div><?= 
e($pekerjaan) ?: '-'; ?></div></div> 
    <div class="row"><strong>Hobi</strong><div><?= $hobi ? 
e(implode(', ', $hobi)) : '-'; ?></div></div> 
 
    <div class="actions"> 
      <a class="btn" href="forminputsiswa.php">Kembali</a> 
    </div> 
  </div> 
</body> 
</html>