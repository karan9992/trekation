<?php
    include("connection.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="trekking.png" type="image/png">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Big+Shoulders+Inline:opsz,wght@10..72,100..900&family=Roboto:ital,wght@0,100..900;1,100..900&family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap"
        rel="stylesheet">
    <title>Trekation</title>

</head>

<body>
    <div class="background">
        <div class="navbar">
            <img src="trekking.png" height="50vmin" alt="T">
            <div class="logo">Trekation </div>

            <nav>

                <div><a href="#" id="home">Home</a></div>
                <div><a href="trek.php">Treks</a></div>
                <div><a href="#about">About</a></div>
                <div><a href="#footer">Contact</a></div>
            </nav>
            <div class="login" id="join"><a href="join.php">Join Now</a></div>
            <div class="login"><a href="login.php">Log In</a></div>
        </div>
        <p>Experience </p>
        <p>The mountains </p>
        <p> like never before.</p>


    </div>
    <p class="info">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Facere, enim? Quasi nam, hic corporis
        maxime itaque et aspernatur. Amet, impedit? Eos, repellat? In quidem earum porro sapiente enim saepe nisi
        quibusdam doloribus? Consectetur, quaerat?</p>




        <p> Top Treks</p>
    <div class="topTrek">
        <div class="leftArrow"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                className="size-6">
                <path fillRule="evenodd"
                    d="M7.72 12.53a.75.75 0 0 1 0-1.06l7.5-7.5a.75.75 0 1 1 1.06 1.06L9.31 12l6.97 6.97a.75.75 0 1 1-1.06 1.06l-7.5-7.5Z"
                    clipRule="evenodd" />
            </svg></div>


<!-- ///////////////////////// -->
            <?php
        include("connection.php");
        $sql = "SELECT * FROM trek";
        $result = mysqli_query($conn, $sql);    
        

        if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {
                

              
                echo "<div class='trekDisp'>";
                echo "<div class ='trekPhoto'><img src=$row[img]  alt='T'>";
                echo "</div><p id='trekName'>".$row["name"]." </p></div>";
            }
        } else {
            echo "0 results";
            echo "<script type='text/javascript'>console.log('0 results');</script>";
        }
        mysqli_close($conn);
    ?>  

        <!-- <div class="trekDisp">1</div>
        <div class="trekDisp">2</div>
        <div class="trekDisp">3</div>
        <div class="trekDisp">4</div>
        <div class="trekDisp">5</div>
        <div class="trekDisp">6</div>-->
        <div class="rightArrow"> <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" 
                className="size-6">
                <path fillRule="evenodd"
                    d="M16.28 11.47a.75.75 0 0 1 0 1.06l-7.5 7.5a.75.75 0 0 1-1.06-1.06L14.69 12 7.72 5.03a.75.75 0 0 1 1.06-1.06l7.5 7.5Z"
                    clipRule="evenodd" />
            </svg></div>
    </div>


<!--/////////////about///////////// --> 
<div id="about">
    <div class="aboutImg">
        <img src="ceo.png" alt="">
        <img src="marketing.png" alt="">
    </div>
    <div class="aboutText">
        <p> Lorem ipsum dolor sit, amet consectetur adipisicing elit. Perspiciatis quidem quibusdam ab. Itaque inventore at eaque quos sunt ullam facilis repellat ratione harum eveniet laborum atque accusamus vel ex tempora temporibus, dolorum ad. Doloribus, rem eius. Unde quos, fugit animi iste voluptatem molestias repudiandae natus nemo in dolorem error porro commodi est consequuntur quos quae accusantium, explicabo quidem sint nemo molestiae ipsa nesciunt ab dolorem. Fuga minus quidem tempora? Praesentium, voluptatem commodi rem dicta, nemo facilis perspiciatis velit tenetur fugit autem quas libero nulla harum et similique. quidem!</p>
        <P>Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse sint officiis hic perspiciatis id, exercitationem quis perferendis modi! Rerum iste, explicabo aliquid dignissimos dolorum a consequatur veniam cupiditate officia, optio animi maiores maxime fugiat. Commodi et rerum non, ab est saepe enim. Itaque quod eaque necessitatibus, velit deleniti, porro commodi est consequuntur quos quae accusantium, explicabo quidem sint nemo molestiae ipsa nesciunt ab dolorem. Fuga minus quidem tempora? Praesentium, voluptatem commodi rem dicta, nemo facilis perspiciatis velit tenetur fugit autem quas libero nulla harum et similique. </P>
       </div>
  
</div>

    <footer id="footer">
        <div class="contact">
        <div>Office
            <p>
                123, Gandhi Road, <br>
                Mumbai City, <br>
                400456
            </p>
        </div>
        <div> Quick Links
            <p><a href="">Top Treks</a><br>
                <a href="">Monsoon Treks</a><br>
                <a href="">Winter Treks</a></p>
        </div>
        <div >Follow us <br>
            <p>
                
            <a href=""><img src="youtube.png" alt=""></a>
            <a href=""><img src="instagram.png" alt=""></a>
            <a href=""><img src="whatsapp.png" alt=""></a>
      
        </p>
        </div>
    </div>
        <a href="https://www.flaticon.com/free-icons/hiking" title="hiking icons">Hiking icons created by Freepik -
            Flaticon</a>
        </footer>

    <script src="main.js"></script>
</body>

</html>