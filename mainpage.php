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
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="./css/mainstyle.css">
    <title>Top Travel</title>
</head>

<body>
    <section class="container">
        <header class="top-banner">
            <section class="inner-grid_top">
                <nav class="top-nav top-nav_fix">
                    <a class="logo" href="">Top<br><span class="logo-large">Travel</span><i
                            class="fas fa-globe-africa green"></i></a>
                            <input type="checkbox" name="phone" id="phone">
                            <label for="phone" class="side"><i class="fas fa-ellipsis-v"></i></label>
                    <ul class="top-nav_items mrgr-nav">
                        <li class="top-nav_item"><a class="top-nav_link" href="./gallery.php">Gallery</a></li>
                        <li class="top-nav_item"><a class="top-nav_link" href="./placesubmission.php">Submit</a></li>
                        <li class="top-nav_item"><a class="top-nav_link" href="#top10">Top 10</a></li>
                        <li><a  id="login-phone" class="login-button top-nav_item" href="./userlogin.php">Log in <i class="fas fa-user"></i></a></li>
                    </ul>
                    <!--<a id="login-pc" class="login-button top-nav_item" href="./userlogin.php">Log in <i class="fas fa-user"></i></a>-->
                    <?php echo $button ?>
                </nav>
                <div class="left-al slogan-grid">
                    <h1 class="main-slogan"><span class="pdr-2">Discover your next</span><br><span
                            class="slogan-large">experience<span class="yel-dot">.</span></span></h1>
                    <div class="btn-fix">
                        <a class="main-button" href="#sect">More <i class="fas fa-angle-down"></i></a>
                    </div>
                </div>
            </section>
        </header>
        <section class="inner-grid" id="sect">
            <div class="sect-decoration">
                <h2 class="about-title">What is <span class="txt-dec">Top Travel</span>?</h2>
                <p class="about-sub">It's a place for adventure seekers to share and vote for their favorite sites to
                    visit! <br> Discover places from all around the world and find out which ones are the most
                    well-known.
                </p>
                <div class="displ-icons icons-about mtb-2r">
                    <i class="fas fa-compass mr-2r"></i>
                    <i class="fas fa-vote-yea mr-2r"></i>
                    <i class="fas fa-plane-departure"></i>
                </div>
            </div>
        </section>
        <section class="inner-col backg-1 wdt-100">
            <div class="ml-5 bg-1">
                <img class="img imgv" src="./imgs/cityM.jpg" alt="City">
                <img class="img imgv" src="./imgs/mountainM.jpg" alt="Mountain">
                <img class="img imgv" src="./imgs/beachM.jpg" alt="Beach">
            </div>
            <div>
                <h2 class="about-title txt-ar mrgr-5">Check out our <span class="txt-dec">gallery</span></h2>
                <p class="about-sub txt-ar mrgr-5">Look through the many user submited cities, mountains or beaches to
                    prepare for your
                    next trip</p>
                <div class="cont-al-right">
                    <a class="button" href="./gallery.php">Go now<i class="fas fa-angle-right"></i></a>
                </div>
            </div>
        </section>
        <section class="inner-col mlf-5">
            <div>
                <h2 class="about-title txtl-al">Join the community</h2>
                <p class="about-sub txtl-al">Submit your own favorite spots and help other users find the best places by
                    voting for the ones you like the most.
                    <br> Your place might even make it into the top 10 someday!
                </p>
                <div class="cont-al-right mt-10">
                    <a class="button" href="./registeruser.php">Sign up<i class="fas fa-angle-right"></i></a>
                </div>
            </div>
            <div class="mxw-cont bg-2">
                <img class="img mb-1 img-ph" src="./imgs/mnt_sillhouette.jpg" alt="">
                <img class="img img-ph pph" src="./imgs/beach_sillhouette.jpg" alt="">
            </div>
        </section>
        <section id="top10" class="inner-grid center-al backg-1 wdt-100">
            <div>
                <h2 class="about-title">Top 10</h2>
                <p class="about-sub">Check out the top ten user voted places</p>
            </div>
            <div class="ranking mrgb-2">
                <div class="displ-two">
                    <a class="no-decoration" href="./detailpage.php">
                        <div class="card first-place">
                            <h3 class="first-position">1</h3>
                            <img class="first-img" src="./imgs/01.jpg" alt="San Francisco">
                            <p class="first-text mrgb-05 mrgt-07">San Francisco <br> <span class="fntsz-small"> 534
                                    votes </span></p>
                            <p class="arrow-first"><i class="far fa-arrow-alt-circle-right"></i></p>
                        </div>
                    </a>
                    <a class="no-decoration" href="./detailpage.php">
                        <div class="card reg-card">
                            <h3 class="reg-place">2</h3>
                            <img class="reg-img" src="./imgs/02.jpg" alt="Manuel Antonio">
                            <p class="reg-text mrgb-05 mrgt-07">Manuel Antonio<br><span class="fntsz-small">489 votes</span></p>
                            <p class="arrow-reg"><i class="far fa-arrow-alt-circle-right"></i></p>
                        </div>
                    </a>
                </div>
                <div class="displ-two">

                    <a class="no-decoration" href="./detailpage.php">
                        <div class="card reg-card">
                            <h3 class="reg-place">3</h3>
                            <img class="reg-img" src="./imgs/03.jpg" alt="Mount Fuji">
                            <p class="reg-text mrgb-05 mrgt-07">Mount Fuji <br><span class="fntsz-small">406 votes</span></p>
                            <p class="arrow-reg"><i class="far fa-arrow-alt-circle-right"></i></p>
                        </div>
                    </a>
                    <a class="no-decoration" href="./detailpage.php">
                        <div class="card reg-card">
                            <h3 class="reg-place">4</h3>
                            <img class="reg-img" src="./imgs/04.jpg" alt="New York">
                            <p class="reg-text mrgb-05 mrgt-07">New York<br><span class="fntsz-small">364 votes</span></p>
                            <p class="arrow-reg"><i class="far fa-arrow-alt-circle-right"></i></p>
                        </div>
                    </a>
                </div>
                <div class="dipl-two">
                    <a class="no-decoration" href="./detailpage.php">
                        <div class="card reg-card">
                            <h3 class="reg-place">5</h3>
                            <img  class="reg-img" src="./imgs/05.jpg" alt="Barcelona">
                            <p class="reg-text mrgb-05 mrgt-07">Barcelona<br><span class="fntsz-small">355 votes</span></p>
                            
                            <p class="arrow-reg"><i class="far fa-arrow-alt-circle-right"></i></p>
                        </div>
                    </a>
                    <a class="no-decoration" href="./detailpage.php">
                        <div class="card reg-card">
                            <h3 class="reg-place">6</h3>
                            <img class="reg-img" src="./imgs/06.jpg" alt="Chirripo">
                            <p class="reg-text mrgb-05 mrgt-07">Chirripo<br><span class="fntsz-small">302 votes</span></p>
                          
                            <p class="arrow-reg"><i class="far fa-arrow-alt-circle-right"></i></p>
                        </div>
                    </a>
                </div>
                <div class="dipl-two">
                    <a class="no-decoration" href="./detailpage.php">
                        <div class="card reg-card">
                            <h3 class="reg-place">7</h3>
                            <img class="reg-img" src="./imgs/07.jpg" alt="Paris">
                            <p class="reg-text mrgb-05 mrgt-07">Paris<br><span class="fntsz-small">273 votes</span></p>
                           
                            <p class="arrow-reg"><i class="far fa-arrow-alt-circle-right"></i></p>
                        </div>
                    </a>
                    <a class="no-decoration" href="./detailpage.php">
                        <div class="card reg-card">
                            <h3 class="reg-place">8</h3>
                            <img class="reg-img" src="./imgs/08.jpg" alt="Miami Beach">
                            <p class="reg-text mrgb-05 mrgt-07">Miami Beach <br><span class="fntsz-small">251 votes</span></p>
                            <p class="arrow-reg"><i class="far fa-arrow-alt-circle-right"></i></p>
                        </div>
                    </a>
                </div>
                <div class="dipl-two">
                    <a class="no-decoration" href="./detailpage.php">
                        <div class="card reg-card">
                            <h3 class="reg-place">9</h3>
                            <img class="reg-img" src="./imgs/09.jpg" alt="Santa Monica">
                            <p class="reg-text mrgb-05 mrgt-07">Santa Monica Beach<br><span class="fntsz-small">238 votes</span></p>

                            <p class="arrow-reg"><i class="far fa-arrow-alt-circle-right"></i></p>
                        </div>
                    </a>
                    <a class="no-decoration" href="./detailpage.php">
                        <div class="card reg-card">
                            <h3 class="reg-place">10</h3>
                            <img class="reg-img" src="./imgs/10.jpg" alt="Grand Canyon">
                            <p class="reg-text mrgb-05 mrgt-07">Grand Canyon<br><span class="fntsz-small">188 votes</span></p>
                            <p class="arrow-reg"><i class="far fa-arrow-alt-circle-right"></i></p>
                        </div>
                    </a>
                </div>
            </div>
        </section>
        <footer class="footer">
            <p>Top Travel© <br> Universidad de Costa Rica <br> Guillermo Guerra B73469 <br> Andrey Fernández B82930</p>
        </footer>
    </section>
</body>

</html>