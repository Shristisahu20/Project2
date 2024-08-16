<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['login'])) {
    $host = 'localhost';
    $user = 'root';
    $pass = '';
    $dbname = 'example';

    
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
    $result = mysqli_query($con, $sql);
    $count = mysqli_num_rows($result);

    if ($count == 1) {
        echo "<h1><center>Login successful</center></h1>";
    } else {
        echo "<h1>Login failed. Invalid username or password.</h1>";
    }

    mysqli_close($con);
}
?>


</html>
<!DOCTYPE html>
<html lang="en">
     
<head>
    <title>login form in html and css | codehal</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <style>
    @import url("https://fonts.googleapis.com/css2? family=Poppins:wght@300;400;500;600;700;800;900&display=swap");
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family:"Poppins", sans-serif;
}

body {
    display: flex;
    justify-content: center;
    align-items: center;
    min-width: 100vh;
    min-height: 100vh;
    background: url('img4.jpg')no-repeat;
    background-size: cover;
    background-position: center;

}

.wrapper {
    width: 420px;
    background: transparent;
    border:2px solid rgba(255, 255, 255, .2);
    backdrop-filter: blur(20px);
    box-shadow: 0 0 10px rgba(0, 0, 0, .2);
    color: #fff;
    border-radius: 10px;
    padding: 30px 40px;
}

.wrapper h1 {
    font-size: 36px;
    text-align: center;
}

.wrapper .input-box{
    width: 100%;
    height: 50px;
    background: transparent;
    margin: 30px 0;
}
 .input-box input{
    width: 100%;
    height: 100%;
    background: transparent;
    border: none;
    outline:none;
    border: 2px solid rgba(255, 255, 255, .2);
    border-radius: 40px;
    font-size: 16px;
    color:#fff;
    padding: 20px 45px 20px 20px;

 }
 .input-box input::placeholder{
    color:#fff;
 }

 .input-box i {
    position:absolute;
    right:10px;
    top: 33%;
    transform:translateY(-50%);
    font-size: 20px;
}
.input-box a {
    position: absolute;
    right: 10px;
    top: 55%;
    transform:translateY(-50%);
    font-size: 20px;
}


.wrapper .remember-forgot {
    display:flex;
    justify-content: space-between;
    font-size: 14.5px;
    margin: -15px 0 15px;
}
 .remember-fogot label input{
    accent-color:#fff;
    margin-right: 3px;
 }

 .remember-forgot a{
    color: #fff;
    text-decoration: none;

}
.remember-forgot a:hover {
    text-decoration: underline;
}

.wrapper .btn{
    width: 100%;
    height: 45px;
    background: #fff;
    border:none;
    outline:none;
    border-radius: 40px;
    box-shadow: 0 0 10px rgba(0, 0, 0, .1);
    cursor: pointer;
    font-size: 16px;
    color:#333;
    font-weight: 600;
}

.wrapper.register-link{
    font-size: 14.5px;
    text-align: center;
    margin: 20px 0 15px;
}
.register-link p a:hover {
    text-decoration: underline;
    
}
</style>
</head>

<body>

    <div class="wrapper">
        <form action="">
            <h1>login</h1>
            <div class="input-box">
                <input type="text" placeholder="Username"
                required>
                <i class='bx bxs-user'></i>
            </div>
            <div class="input-box">
                <input type="password"
                placeholder="Password" required>
                <a class='bx bxs-lock-alt'></a>
             </div>
            <div class="remember-forgot">
                <label><input type="checkbox">Remember me</label>
                <a href="#">Forgot password?</a>
            </div>
            <button type="submit" class="btn">Login</button>
            <div class="register-link">
                <p>Don't have an account? <a 
                    href="idea1.php">Register</a></p>
            </div>
        </form>
    </div>
    
</body>

</html>