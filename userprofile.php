<?php

    namespace Medoo;
    require "Medoo.php";

    session_start();
    if(isset($_SESSION["status"]))
    {
        $button= "<a id='login-pc' class='logout-button top-nav_item' href='./userprofile.php?logout=true'>Log out<i class='fas fa-user'></i></a>";
    }else{
        header("location:mainpage.php");
    }

    $database = new Medoo([
        'type' => 'mysql',
        'host' => 'localhost',
        'database' => 'tourismweb',
        'username' => 'root',
        'password' => ''
     
    ]);

    $user = $database->select("users_tb", "*",[
        "username"=>$_SESSION["usr"]
        ]);
    


    if(isset($_GET['logout'])){
        session_destroy();
        echo "<script> alert('You have logged out successfully')</script>";
        header("location:mainpage.php");
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
    <title>Top Travel: User profile</title>
</head>

<body class="body-bg">
    <section class="container backgrnd">
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
                <?php echo $button; ?>
            </nav>
            <section>
                <div class="inner-grid login-section">
                    <h1 class="login-title">log in<span class="yel-dot">.</span></h1>
                </div>
            </section>
        </header>
        <section class="inner-grid bg-y pt-3">
            <div>
                <img class="img" src="./imgs/user.jpg" alt="user">
            </div>

            <div>
                <h1 class="bd-filter username"><?php echo $user[0]["username"]; ?></h1>
                
            </div>

        </section>
        <section class="inner-grid bg-t pb-2">
            <h2 class="profile cw">Submissions<span class="yd">.</span></h2>
            <input type="radio" name="tab" id="city" checked>
            <label for="city">Cities</label>
            <input type="radio" name="tab" id="mnts">
            <label for="mnts">Mountains</label>
            <input type="radio" name="tab" id="beach">
            <label for="beach">Beaches</label>

            <div class="tab c1 bg-g">
                <div>
                    <div class="card inner-col bg-r">
                        <img class="img-subm" src="./imgs/01.jpg" alt="San Francisco">
                        <div class="inner-grid_top">
                            <h4 class="subm-title">San francisco</h4>
                            <p class="subm-sub">Submitted on: 07/20/20</p>
                            <p class="subm-sub">500 votes</p>
                        </div>
                        <div class="scrollbox">
                            <h6 class="description">A popular tourist destination, San Francisco is known for its cool
                                summers, fog, steep rolling hills,
                                eclectic mix of architecture, and landmarks, including the Golden Gate Bridge, cable
                                cars, the former Alcatraz Federal Penitentiary,
                                Fisherman's Wharf, and its Chinatown district.</h6>
                        </div>
                    </div>
                    <div class="card inner-col bg-r">
                        <img class="img-subm" src="./imgs/04.jpg" alt="New York">
                        <div class="inner-grid_top">
                            <h4 class="subm-title">new york</h4>
                            <p class="subm-sub">Submitted on: 07/28/21</p>
                            <p class="subm-sub">200 votes</p>
                        </div>
                        <div class="scrollbox">
                            <h6 class="description">Many districts and monuments in New York City are major landmarks,
                                including some of the world's most visited tourist attractions. Times Square is the
                                brightly illuminated hub of the Broadway Theater District,
                                one of the world's busiest pedestrian intersections, and a major center of the world's
                                entertainment industry.</h6>
                        </div>
                    </div>
                    <div class="card inner-col bg-r">
                        <img class="img-subm" src="./imgs/07.jpg" alt="Paris">
                        <div class="inner-grid_top">
                            <h4 class="subm-title">new york</h4>
                            <p class="subm-sub">Submitted on: 07/28/21</p>
                            <p class="subm-sub">200 votes</p>
                        </div>
                        <div class="scrollbox">
                            <h6 class="description">Many districts and monuments in New York City are major landmarks,
                                including some of the world's most visited tourist attractions. Times Square is the
                                brightly illuminated hub of the Broadway Theater District,
                                one of the world's busiest pedestrian intersections, and a major center of the world's
                                entertainment industry.</h6>
                        </div>
                    </div>
                    <div class="card inner-col bg-r">
                        <img class="img-subm" src="./imgs/05.jpg" alt="New York">
                        <div class="inner-grid_top">
                            <h4 class="subm-title">new york</h4>
                            <p class="subm-sub">Submitted on: 07/28/21</p>
                            <p class="subm-sub">200 votes</p>
                        </div>
                        <div class="scrollbox">
                            <h6 class="description">Many districts and monuments in New York City are major landmarks,
                                including some of the world's most visited tourist attractions. Times Square is the
                                brightly illuminated hub of the Broadway Theater District,
                                one of the world's busiest pedestrian intersections, and a major center of the world's
                                entertainment industry.</h6>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab c2 bg-g">
                <div>

                    <div class="card inner-col bg-r">
                        <img class="img-subm" src="./imgs/06.jpg" alt="New York">
                        <div class="inner-grid_top">
                            <h4 class="subm-title">new york</h4>
                            <p class="subm-sub">Submitted on: 07/28/21</p>
                            <p class="subm-sub">200 votes</p>
                        </div>
                        <div class="scrollbox">
                            <h6 class="description">Many districts and monuments in New York City are major landmarks,
                                including some of the world's most visited tourist attractions. Times Square is the
                                brightly illuminated hub of the Broadway Theater District,
                                one of the world's busiest pedestrian intersections, and a major center of the world's
                                entertainment industry.</h6>
                        </div>
                    </div>
                    <div class="card inner-col bg-r">
                        <img class="img-subm" src="./imgs/10.jpg" alt="Paris">
                        <div class="inner-grid_top">
                            <h4 class="subm-title">new york</h4>
                            <p class="subm-sub">Submitted on: 07/28/21</p>
                            <p class="subm-sub">200 votes</p>
                        </div>
                        <div class="scrollbox">
                            <h6 class="description">Many districts and monuments in New York City are major landmarks,
                                including some of the world's most visited tourist attractions. Times Square is the
                                brightly illuminated hub of the Broadway Theater District,
                                one of the world's busiest pedestrian intersections, and a major center of the world's
                                entertainment industry.</h6>
                        </div>
                    </div>
                    <div class="card inner-col bg-r">
                        <img class="img-subm" src="./imgs/03.jpg" alt="New York">
                        <div class="inner-grid_top">
                            <h4 class="subm-title">new york</h4>
                            <p class="subm-sub">Submitted on: 07/28/21</p>
                            <p class="subm-sub">200 votes</p>
                        </div>
                        <div class="scrollbox">
                            <h6 class="description">Many districts and monuments in New York City are major landmarks,
                                including some of the world's most visited tourist attractions. Times Square is the
                                brightly illuminated hub of the Broadway Theater District,
                                one of the world's busiest pedestrian intersections, and a major center of the world's
                                entertainment industry.</h6>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab c3 bg-g">
                <div>

                    <div class="card inner-col bg-r">
                        <img class="img-subm" src="./imgs/02.jpg" alt="New York">
                        <div class="inner-grid_top">
                            <h4 class="subm-title">new york</h4>
                            <p class="subm-sub">Submitted on: 07/28/21</p>
                            <p class="subm-sub">200 votes</p>
                        </div>
                        <div class="scrollbox">
                            <h6 class="description">Many districts and monuments in New York City are major landmarks,
                                including some of the world's most visited tourist attractions. Times Square is the
                                brightly illuminated hub of the Broadway Theater District,
                                one of the world's busiest pedestrian intersections, and a major center of the world's
                                entertainment industry.</h6>
                        </div>
                    </div>
                    <div class="card inner-col bg-r">
                        <img class="img-subm" src="./imgs/08.jpg" alt="Paris">
                        <div class="inner-grid_top">
                            <h4 class="subm-title">new york</h4>
                            <p class="subm-sub">Submitted on: 07/28/21</p>
                            <p class="subm-sub">200 votes</p>
                        </div>
                        <div class="scrollbox">
                            <h6 class="description">Many districts and monuments in New York City are major landmarks,
                                including some of the world's most visited tourist attractions. Times Square is the
                                brightly illuminated hub of the Broadway Theater District,
                                one of the world's busiest pedestrian intersections, and a major center of the world's
                                entertainment industry.</h6>
                        </div>
                    </div>
                    <div class="card inner-col bg-r">
                        <img class="img-subm" src="./imgs/09.jpg" alt="New York">
                        <div class="inner-grid_top">
                            <h4 class="subm-title">new york</h4>
                            <p class="subm-sub">Submitted on: 07/28/21</p>
                            <p class="subm-sub">200 votes</p>
                        </div>
                        <div class="scrollbox">
                            <h6 class="description">Many districts and monuments in New York City are major landmarks,
                                including some of the world's most visited tourist attractions. Times Square is the
                                brightly illuminated hub of the Broadway Theater District,
                                one of the world's busiest pedestrian intersections, and a major center of the world's
                                entertainment industry.</h6>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </section>
</body>

</html>