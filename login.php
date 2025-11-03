<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="icon" href="trekking.png" type="image/png">
    <link rel="stylesheet" href="styleJoin.css">
</head>
<body>

    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            include("connection.php");
            $email = $_POST['email'];
            $password = $_POST['password'];
            $sql = "SELECT * FROM account WHERE email = '$email' AND pass = '$password'";
            $result = mysqli_query($conn, $sql);
            if (mysqli_num_rows($result) > 0) {
                echo "<script type='text/javascript'>
                console.log('Login succesful. ');
                window.open('trek.php','_parent');</script>";
            } else {
                echo "<script type='text/javascript'>console.log('Login failed. ');</script>";
            }
            mysqli_close($conn);
        }

    ?>
    <form action="login.php" method="post">
        <h1 >Login</h1>
        <label for="email">Email</label>
        <input type="text" name="email" id="email" placeholder="Email">
        <label for="password">Password</label>
        <input type="password" name="password" id="password" placeholder="Password">
        <button type="submit">Log In</button>
        <p>Dont have account? <a href="join.php"> Create new</a></p>
    </form>
    
</body>
</html>