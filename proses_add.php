<?php 
include "Konekdb.php";
    if (isset($_POST['klik'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];

        $data = mysqli_query($conn,"INSERT INTO login(Username, Sandi) VALUES('$username','$password')");
        echo "<script>alert('Data Telah Di Tambahkan');window.location='dashboard.php'</script>";
    }
?>