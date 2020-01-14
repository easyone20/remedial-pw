<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    Tambah Data : <br>
    <form method="POST" action="proses_add.php">
        <input type="text" name="username" placeholder="Masukan Username">
        <input type="password" name="password" placeholder="Masukan Password">
        <button type="submit" name="klik">Simpan</button>
    </form><br><br><br>
    <?php 
        include "Konekdb.php";
        $data = mysqli_query($conn,"SELECT * FROM login");
        while($ambil=mysqli_fetch_array($data)){
    ?>
    <table border="1">
    <tr>
    <th><h3>Username</h3></th>
    <th><h3>Password</h3></th>
    <th><h3>Aksi</h3></th>
    </tr>
    <tr>
    <td><h3><?php echo $ambil['Username']; ?></h3></td>
    <td><h3><?php echo $ambil['Sandi'];?></h3></td>
    <td><h5><a href="delete.php?id=<?php echo $ambil['id']; ?>">DELETE</a></h5>
        <h5><a href="edit.php?id=<?php echo $ambil['id']; ?>">EDIT</a></h5></td>
    </tr>
        <?php } ?>
</body>
</html>