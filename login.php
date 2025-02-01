<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" href="login.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    <div class="wraper">
        <form action="">
            <h1>login</h1>
            <div class="input-box">
                <input type="text" placeholder="username"
                required>
                <i class='bx bxs-user'></i>
            </div>

            <div class="input-box">
                <input type="password" placeholder="password"
                required>
                <i class='bx bxs-lock-alt'></i>
            </div>
            <div class="ingatkan-saya">
                <label> <input type="checkbox">  ingatkan saya</label>
                <a href="#">lupa password?</a>
            </div>

            <button type ="submit" class="btn">
                <a href="index.php">login</a></button>
            <div class="daftar">
                <p>tidak memiliki akun? <a href="">daftar</a></p>
            </div>
        </form>
    </div>
</body>
</html>