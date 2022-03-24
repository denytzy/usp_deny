<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body><br /><br /><br /><br /><br />

<b><center><div class="balon">Halo Selamat Datang</div></center></b>

    <div class="container">
        <center><h1><b>Deny Printer</b></h1></center>
        <center><h3>Login Atau Daftar</h3></center>
        <form action="process.php" method="POST">
            <b><label>Username</label></b>
            <input type="text" name="username" class="form-control" id=""> <br /><br />

        <b><label>Password</label><b>
        <input type="password" name="password" class="form-control" id=""> <br /><br />
        
        <center><button type="submit" name="login">Login</button></center>

        <div class="register">
            <medium>Belum punya akun? <br />
            <a href="../register/index.php">Register</a></medium>
        </div>
        </form>
    </div>
</body>
</html>