<!DOCTYPE html>
<html lang="en">

<head>
    <title>Login form in HTML and CSS | Codehal</title>
    <link rel="stylesheet" href="style.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>
    <div class="wrapper">
        <form method="post">
            <h1>Login</h1>
            <div class="input-box">
                <input type="text" name="username" placeholder="Username" required>
                <i class='bx bxs-user'></i>
            </div>
            <div class="input-box">
                <input type="password" name="password" placeholder="Password" required>
                <i class='bx bxs-lock-alt'></i>
            </div>
            <div class="remember-forgot">
                <label><input type="checkbox" name="remember">Remember me</label>
                <a href="#">Forgot password?</a>
            </div>
            <button type="submit" class="btn" name="login">Login</button>
            <div class="register-link">
                <p>Don't have an account? <a href="#">Register here</a></p>
            </div>
        </form>
    </div>


</body>

</html>