<?php
    include("connection.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="icon" href="trekking.png" type="image/png">
    <link rel="stylesheet" href="styleJoin.css">
</head>

<body>
    <!-- <div class="formBox"> -->

    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            include("connection.php");
            $fname = $_POST['fname'];
            $lname = $_POST['lname'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            $number = $_POST['number'];
            $dob = $_POST['dob'];
            $sql = "INSERT INTO account (fname, lname, email, pass, phone, dob) VALUES ('$fname', '$lname', '$email', '$password', '$number', '$dob')";
            if (mysqli_query($conn, $sql)) {
                echo "<script type='text/javascript'>console.log('New record ');</script>";
            } else {
                echo "<script type='text/javascript'>console.log(' $sql ', 'mysqli_error($conn)');</script>"; 
            }
            mysqli_close($conn);
        }

    ?>
        <form action="join.php" method="post">

            <h1>Register</h1>
            <div class="together">
                <div class="name">
                <label for="fname"> First Name</label>
                <input type="text" name="fname" id="fname" placeholder="Name">
                </div>
                <div class="name">
                <label for="lname">Last Name</label>
                <input type="text" name="lname" id="lname" placeholder="Name">
                </div>
            </div>
            <label for="email">Email</label>
            <input type="email" name="email" id="email" placeholder="Email">
            <label for="password">Password</label>
            <input type="password" name="password" id="password" placeholder="Password">
            <label for="number">Phone Number</label>
            <input type="number" name="number" id="number" placeholder="Phone Number">
            <label for="dob">Date Of Birth</label>
            <input type="date" name="dob" id="dob" placeholder="Date of Birth">
            <button type="submit">Join Now</button>
            <p>Already have an account? <a href="login.php">Log In</a></p>
        </form>
    <!-- </div> -->


</body>

</html>