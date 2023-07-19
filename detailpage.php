<?php

    session_start();
    if(isset($_SESSION["status"]))
    {
        $button= "<a id='login-pc' class='login-button top-nav_item' href='./userprofile.php'>".$_SESSION["usr"]."<i class='fas fa-user'></i></a>";
    }else{
        $button= "<a id='login-pc' class='login-button top-nav_item' href='./userlogin.php'>Log in <i class='fas fa-user'></i></a>";
    }

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&family=Poppins:wght@300;400;600;700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css"
        integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/profilestyle.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <title>Top Travel: Details</title>
</head>

<body class="bg-b">
    <section class="container">
        <header>
            <nav class="top-nav top-nav_fix">
                <a class="logo" href="./mainpage.php">Top<br><span class="logo-large">Travel</span><i
                        class="fas fa-globe-africa green"></i></a>
                        <input type="checkbox" name="phone" id="phone">
                        <label for="phone" class="side"><i class="fas fa-ellipsis-v"></i></label>
                <ul class="top-nav_items mrgr-nav">
                    <li class="top-nav_item"><a class="top-nav_link" href="./gallery.php">Gallery</a></li>
                    <li class="top-nav_item"><a class="top-nav_link" href="./placesubmission.php">Submit</a></li>
                    <li class="top-nav_item"><a class="top-nav_link" href="./mainpage.php#top10">Top 10</a></li>
                    <li><a  id="login-phone" class="login-button top-nav_item" href="./userlogin.php">Log in <i class="fas fa-user"></i></a></li>
                </ul>
                <?php echo $button ?>
            </nav>
        </header>
        <section class="inner-grid bg-r border-rad mt-6">
            <div class="bg-s bg-1">
                <img class="img-details" src="./imgs/barca.jpg" alt="Barca">
                <h2 class="title">Barcelona</h2>
            </div>
            <div class="inner-grid">

                <p class="text-details">Submitted by: <span class="color-grey"> Sean Connor</span></p>
                <p class="text-details">Posted on: <span class="color-grey"> January 20th 2019</span></p>
                <p class="text-details">Category: <span class="color-grey">Cities</span></p>
                <p class="text-details mb-0">Description:</p>
                <p class="desc-text"> Barcelona is a major cultural, economic, and financial centre in southwestern Europe, as well as the
                    main biotech hub in Spain. As a leading world city,
                    Barcelona's influence in global socio-economic affairs qualifies it for global city status</p>
                <p class="text-details">300 votes</p>
                <button class="vote-button">Vote</button>
            </div>
        </section>
        <footer class="footer">
            <p class="mrgr-1">Top Travel© <br> Universidad de Costa Rica <br> Guillermo Guerra B73469 <br> Andrey Fernández B82930</p>
        </footer>
    </section>
    <script>
        AOS.init();
      </script>
</body>

</html>