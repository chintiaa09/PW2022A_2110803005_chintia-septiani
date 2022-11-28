<?php
$mahasiswa = ["chintia","2110803005","sistem informasi","@chintiaa09"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>Array</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
    <ul>
<?php foreach($mahasiswa as $mhs): ?>
        <li> <?php echo $mhs; ?> </li>
        <?php endforeach; ?>
    </ul>
</body>
</html>
