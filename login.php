<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style1.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    <div class="wrapper">
        <form action= "adminpage.php">
            <h1>login</h1>
            <div class="input-box">
                <input type="text" placeholder="Username"required>
                <i class='bx bxs-user'></i>
            </div>
            <div class="input-box">
                <input type="Password" placeholder="Password"required>
                <i class='bx bxs-lock-alt'></i>
            </div>
            <div class="remember-forgot">
                <label><input type="checkbox"> Remember me</label>
                <a href="#">Forgot password?</a>
            </div>
            <button type="submit" class="btn">Login</button>

            <div class="register-link">
                <p>Don't have an account? <a href="">Register</a></p>
            </div>
</form>
</body>
</html>