<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login</title>
    <link rel="stylesheet" href="css/stylesensus.css" class="css">
    <link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
</head>
<body>
    <img>
    <div class="container">
        <div class="img">
            <img src="img/book.jpg">
        </div>
        <div class="login-container">
            <form action="process.php" method="post">
                <img class="avatar" src="img/avatar.png">
                <h2>Login</h2>
                <div class="input-div one focus">
                    <div>
                        <h5>Username</h5>
                        <input type="text" name="username" class="input">
                    </div>
                </div>
                <div class="input-div two focus">
                    <div>
                        <h5>Password</h5>
                        <input type="password" name="password" class="input">
                    </div>
                </div>
                <a href="registrasi.php">Tidak ada akun? Buat akun!</a>
                <input type="submit" value="Login" name="login" class="btn">
            </form>
        </div>
    </div>
</body>
</html>