<html> 
<head>
	<title>Form Login</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<link rel="stylesheet" type="text/css" href="cssweb.css">
<body>
 
	<h1>MEMBUAT FORM LOGIN</h1>
 
	<div class="kotak_login">
		<p class="tulisan_login">Silahkan login</p>
 
		<form method="POST">
			<label>Username</label>
			<input type="text" name="username" class="form_login" placeholder="Username atau email ..">
 
			<label>Password</label>
			<input type="password" name="password" class="form_login" placeholder="Password ..">
 
			<input type="submit" class="tombol_login" value="LOGIN" name="submit">
            
			<br/>
			<br/>
			<center>
				
			</center>
		</form>
        <?php
        include "Konekdb.php";
            if (isset($_POST['submit'])) {
                $username = $_POST['username'];
                $password = $_POST['password'];
                $d = mysqli_query($conn, "SELECT * FROM login WHERE Username='$username' AND Sandi='$password'");
                if(mysqli_num_rows($d) > 0){
                    echo "<script>alert('Berhasil Login');window.location='dashboard.php'</script>";
                }
            }
            ?>
	</div>
 
 
</body>
</html>