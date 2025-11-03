<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styleTrek.css">
    <link rel="icon" href="trekking.png" type="image/png">
    <title>Treks</title>
</head>
<body>
<nav>
    <p>Trekation</p>
</nav>
<div class="topTrek">
<div class="leftArrow"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                className="size-6">
                <path fillRule="evenodd"
                    d="M7.72 12.53a.75.75 0 0 1 0-1.06l7.5-7.5a.75.75 0 1 1 1.06 1.06L9.31 12l6.97 6.97a.75.75 0 1 1-1.06 1.06l-7.5-7.5Z"
                    clipRule="evenodd" />
            </svg></div>
    <?php
        include("connection.php");
        $sql = "SELECT * FROM trek";
        $result = mysqli_query($conn, $sql);    
        

        if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {
                echo "<div class='treDisp js-fillcolor'>";
                echo "<div class ='trekPhoto'><img src=$row[img] height='50vmin' alt='T'></div>";
                echo "Name: " . $row["name"]. "<br>  Info: " . $row["info"]. " <br> Duration:-" . $row["days"]. " <br> Difficulty :-" . $row["level"]." <br> Altitude -" . $row["altitude"];
                echo "</div><br>";
                echo "<script>console.log(" . json_encode($row) . ");</script>";

            }
        } else {
            echo "0 results";
        }
        mysqli_close($conn);
    ?>

<div class="rightArrow"> <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                className="size-6">
                <path fillRule="evenodd"
                    d="M16.28 11.47a.75.75 0 0 1 0 1.06l-7.5 7.5a.75.75 0 0 1-1.06-1.06L14.69 12 7.72 5.03a.75.75 0 0 1 1.06-1.06l7.5 7.5Z"
                    clipRule="evenodd" />
            </svg></div>
</div>
    

</body>
<script src="main.js"></script>
</html>