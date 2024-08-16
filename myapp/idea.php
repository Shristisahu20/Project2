<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <style>
        body {
            font-family:Arial, Helvetica, sans-serif;
            background-color: #f4f4f4;
            text-align: center;
            margin: 0;
            padding: 0;
            background-color:rgba(255, 0, 0, 0.1);
            background: url('img.webp')no-repeat;
            background-size: cover;
            background-position: center;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            min-width: 100vh;
        }

        h1 {
            color: white;
            top: 9%;
            right: 43%;
            position: absolute;
            font-style:inherit;
            font-family: Georgia, 'Times New Roman', Times, serif;
            font-size: 33px;
            
        }

        form {
            max-width: 540px;
            height: 280px;
            margin: 20px auto;
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    background: rgba(255, 255, 255, 0.1); 
    backdrop-filter: blur(20px); 
    padding: 20px;
    border-radius: 8px;
    color: #fff;
}

        

        label{
            display: block;
            margin-bottom: 8px;
            color: #333;
            font-size: larger;
        }

        input {
            width: 80%;
            padding: 8px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            background: transparent;
        
        }

        button {
            background-color: #45a049;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        button:hover {
            background-color: #45a049;
        }
        .wrapper {
    width: 420px;
    border:2px solid rgba(255, 255, 255, 0.2);
    box-shadow: 0 0 10px rgba(0, 0, 0, .2);
    border-radius: 10px;
    padding: 30px 40px;
    text-align: center;
    right: 33%;
    top: 23%;
    position: absolute;
    color: transparent;
    backdrop-filter: blur(20px);

        }
    </style>
</head>

<body>
    <h1>Registration</h1>
    <div class="wrapper">
    <form method="post">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required>
        <br>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>
        <br>
        <label for="confirm_password">Confirm Password:</label>
        <input type="password" id="confirm_password" name="confirm_password" required>
        <br>
        <button type="submit" name="register">Register</button>
    </form>
    <?php
    if(isset($_POST["register"])) {
        $link = mysqli_connect("localhost", "root", "");
        mysqli_select_db($link, "example");
        $a = $_POST["username"];
        $b = $_POST["password"];
        $query = "insert into users(username,password) values('$a','$b')";
        mysqli_query($link, $query);
        echo "Registration successful";
    }
    ?>
</body>

</html>
