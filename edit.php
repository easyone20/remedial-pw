<?php

include_once("Konekdb.php");

if(isset($_POST['update']))
{
    $id=$_POST['id'];
    $username=$_POST['username'];
    $password=$_POST['password'];

    $result = mysqli_query($conn, "UPDATE login SET Username='$username', Sandi='$password' WHERE id='$id'");

    echo "<script>alert('Data Telah Di Update');window.location='dashboard.php'</script>";
}

$id=$_GET['id'];

$result=mysqli_query($conn, "SELECT * FROM login WHERE id='$id'");

while($ambil = mysqli_fetch_array($result))
{

?>
<html>
<head>  
    <title>Edit Username/Password</title>
</head>

<body>
    <a href="dashboard.php">Beranda</a>
    <br/><br/>

    <form method="post" action="edit.php">
        <table border="1">
            <tr> 
                <td>Username</td>
                <td><input type="text" name="username" value="<?php echo $ambil['Username'];?>" required ></td>
            </tr>
            <tr> 
                <td>Password</td>
                <td><input type="text" name="password" value="<?php echo $ambil['Sandi'];?>" required ></td>
            </tr>
            <tr>
                <input type="hidden" name="id" value="<?php echo $ambil['id'];?>">
                <td colspan="2"><input type="submit" name="update" value="Update"></td>
            </tr>
        </table>
    </form>
<?php } ?>
</body>
</html>