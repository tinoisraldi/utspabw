<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="css/stylesensus.css" class="css">
    <link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
</head>
<body>
<img>
    <div class="container">
        <div class="img">
            <img src="img/confirmasi.jpg">
        </div>
        <div class="login-container">
            <form action="process.php" method="post">
                <img class="avatar" src="img/avatar.png">
                <h2>Daftar</h2>
                <div class="input-div one focus">
                    <div>
                    <h5>Username</h5>
                        <input type="text" name="username" class="input">
                    </div>
                </div>
                <div class="input-div one focus">
                    <div>
                    <h5>Email</h5>
                        <input type="email" name="email" class="input">
                    </div>
                </div>
                <div class="input-div two focus">
                    <div>
                        <h5>Password</h5>
                        <input type="password" name="password" class="input">
                    </div>
                </div>
                <a class="small" href="login.php">Sudah punya akun? Login!</a>
                <input type="submit" value="Daftar" name="registrasi" class="btn">
            </form>
        </div>
    </div>
</body>
</html>