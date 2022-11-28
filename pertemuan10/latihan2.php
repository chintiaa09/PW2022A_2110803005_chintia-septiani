<?php 
$mahasiswa = [["Chintia Septiani", "2110803005", "Sistem Informasi", "@chinntiaa09"], 
              ["tifanie", "2110803002", "sistem informasi", "@tifaniesha",],
              ["bella", "2120803029", "sistem informasi", "@bellapuspit",],
             
]; ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Document</title>
</head>
<body>
  <h2>Daftar Mahasiswa</h2>
  <?php foreach ($mahasiswa as $mhs) {?>
    <ul>
      <li><?php echo $mhs[0]; ?></li>
      <li><?php echo $mhs[1]; ?></li>
      <li><?php echo $mhs[2]; ?></li>
      <li><?php echo $mhs[3]; ?></li>
    </ul>
  <?php } ?>
</body>
</html>