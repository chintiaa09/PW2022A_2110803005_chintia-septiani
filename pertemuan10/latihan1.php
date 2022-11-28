<?php
$mahasiswa = [
    ["chintia","2110803005","sistem informasi"],
    ["tifanie","2110803002","sistem informasi"],
    ["bella","2110803005","sistem informasi"],
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Array</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
    <?php foreach($mahasiswa as $mhs): ?>
    <ul>

        <li> <?php echo $mhs[0]; ?> </li>
        <li> <?php echo $mhs[1]; ?> </li>
        <li> <?php echo $mhs[2]; ?> </li>
        <li> <?php echo $mhs[3]; ?> </li>
         </ul>
        <?php endforeach; ?>
   
</body>
</html>
