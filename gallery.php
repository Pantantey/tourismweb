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
    <link rel="stylesheet" href="./css/gallerystyle.css">
    <title>Gallery</title>
</head>

<body>
    <section class="container">
        <header class="top-banner">
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
            <div class="inner-grid">
                <h1 class="gallery-title">Gallery<span class="yel-dot">.</span></span></h1>
            </div>
        </header>
        <section class="inner-grid bgd-white border-lr">
            <div>
                <h2 class="gallery-sub">Welcome to the gallery! <br> Here you´ll find hundreds of user-submissions that might just pique your interests.</h2>
            </div>
            <div class="inner-col">
                <div class="gallery-grid">
                    <a class="m-2 link" href="./detailpage.php">
                        <figure class="hover-img">
                            <img class="img" src="./imgs/05.jpg" alt="Barcelona">
                            <figcaption>
                                City <br> <br>
                                Submitted by: <br>
                                John smith <br> <br>
                                Posted on: <br>
                                10/09/21 <br> <br>
                                Votes: 355
                            </figcaption>
                        </figure>
                    </a>
                    <a class="m-2 link" href="./detailpage.php">
                        <figure class="hover-img">
                            <img class="img" src="./imgs/10.jpg" alt="Grand Canyon">
                            <figcaption>
                                Mountain <br> <br>
                                Submitted by: <br>
                                Kelsey Grammar <br> <br>
                                Posted on: <br>
                                02/03/10 <br> <br>
                                Votes: 188
                            </figcaption>
                        </figure>
                    </a>
                    <a class="m-2 link" href="./detailpage.php">
                        <figure class="hover-img">
                            <img class="img" src="./imgs/02.jpg" alt="Manuel Antonio">
                            <figcaption>
                                Beach <br> <br>
                                Submitted by: <br>
                                Juan Oreamuno <br> <br>
                                Posted on: <br>
                                12/17/18 <br> <br>
                                Votes: 489
                            </figcaption>
                        </figure>
                    </a>
                    <a class="m-2 link" href="./detailpage.php">
                        <figure class="hover-img">
                            <img class="img" src="./imgs/06.jpg" alt="Chirripo">
                            <figcaption>
                                Mountain <br> <br>
                                Submitted by: <br>
                                Maria Ramirez <br> <br>
                                Posted on: <br>
                                05/23/20 <br> <br>
                                Votes: 302
                            </figcaption>
                        </figure>
                    </a>
                    <a class="m-2 link" href="./detailpage.php">
                        <figure class="hover-img">
                            <img class="img" src="./imgs/03.jpg" alt="Mount Fuji">
                            <figcaption>
                                Mountain<br> <br>
                                Submitted by: <br>
                                Mike Hannigan <br> <br>
                                Posted on: <br>
                                09/19/20 <br> <br>
                                Votes: 406
                            </figcaption>
                        </figure>
                    </a>
                    <a class="m-2 link" href="./detailpage.php">
                        <figure class="hover-img">
                            <img class="img" src="./imgs/04.jpg" alt="New York">
                            <figcaption>
                                City <br> <br>
                                Submitted by: <br>
                                John smith <br> <br>
                                Posted on: <br>
                                10/09/21 <br> <br>
                                Votes: 364
                            </figcaption>
                        </figure>
                    </a>
                    <a class="m-2 link" href="./detailpage.php">
                        <figure class="hover-img">
                            <img class="img" src="./imgs/09.jpg" alt="Barcelona">
                            <figcaption>
                                City <br> <br>
                                Submitted by: <br>
                                John smith <br> <br>
                                Posted on: <br>
                                10/09/21 <br> <br>
                                Votes: 355
                            </figcaption>
                        </figure>
                    </a>
                    <a class="m-2 link" href="./detailpage.php">
                        <figure class="hover-img">
                            <img class="img" src="./imgs/08.jpg" alt="Miami Beach">
                            <figcaption>
                                Beach <br> <br>
                                Submitted by: <br>
                                Andrew Jackson <br> <br>
                                Posted on: <br>
                                10/09/21 <br> <br>
                                Votes: 251
                            </figcaption>
                        </figure>
                    </a>
                    <a class="m-2 link" href="./detailpage.php">
                        <figure class="hover-img">
                            <img class="img" src="./imgs/01.jpg" alt="Barcelona">
                            <figcaption>
                                City <br> <br>
                                Submitted by: <br>
                                John smith <br> <br>
                                Posted on: <br>
                                10/09/21 <br> <br>
                                Votes: 355
                            </figcaption>
                        </figure>
                    </a>
                    <a class="m-2 link" href="./detailpage.php">
                        <figure class="hover-img">
                            <img class="img" src="./imgs/07.jpg" alt="Barcelona">
                            <figcaption>
                                City <br> <br>
                                Submitted by: <br>
                                John smith <br> <br>
                                Posted on: <br>
                                10/09/21 <br> <br>
                                Votes: 355
                            </figcaption>
                        </figure>
                    </a>
                </div>
            </div>
        </section>
        <footer class="footer">
            <p class="mrgr-1">Top Travel© <br> Universidad de Costa Rica <br> Guillermo Guerra B73469 <br> Andrey Fernández B82930</p>
        </footer>
    </section>
</body>

</html>