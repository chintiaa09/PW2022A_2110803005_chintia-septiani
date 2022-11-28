<?php 
    $mahasiswa = [
      [
        "nama" => "Chintia Septiani", 
        "NIM" => "2110803005", 
       "jurusan" => "Sistem Informasi",
        "email" => "chintiaseptiani@gmail.com"
      ],
      [
        "nama" => "tifanie",
        "NIM" => "2110803002",
        "jurusan" => "Sistem Informasi",
        "email" => "tifaniesha@gmail.com"
        
      ],
      ["nama" => "bella",
      "NIM" => "2120803020",
      "jurusan" => "sistem informasi",
      "email" => "bellapuspit@gmail.com"
      ]
    ]; 
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Document</title>
</head>
<body>
  <h2>Daftar Mahasiswa</h2>
    <?php foreach ($mahasiswa as $mhs) { ?>
      <ul>
        <li>Nama : <?php echo $mhs["nama"]; ?></li>
        <li>NIM : <?php echo $mhs["NIM"]; ?></li>
        <li>Jurusan : <?php echo $mhs["jurusan"]; ?></li>
        <li>E-mail : <?php echo $mhs["email"]; ?></li>
      </ul>
    <?php } ?>
</body>
</html>
