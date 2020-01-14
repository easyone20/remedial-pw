<?php
include('Konekdb.php');
$id = @$_GET['id'];
$delete = mysqli_query($conn,"DELETE FROM login WHERE id='$id'");
echo "<script>alert('Data Terhapus');window.location='dashboard.php'</script>";

?>
