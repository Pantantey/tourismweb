<?php
    namespace Medoo;
    require "Medoo.php";
    
    session_start();
    if(isset($_SESSION["status"]))
    {
        header("location:mainpage.php");
    }
    
    $database = new Medoo([
        'type' => 'mysql',
        'host' => 'localhost',
        'database' => 'tourismweb',
        'username' => 'root',
        'password' => ''
     
    ]);


    if ($_POST) {
        $user = $database->select("users_tb", "*",[
        "username"=>$_POST["user"]
        ]);
        $email = $database->select("users_tb", "*",[
        "email"=>$_POST["user"]
        ]);
        $a=false;
        if (count($user)>0) {
            if (password_verify($_POST["pass"], $user[0]["password"])) {
                if ($user[0]["admin"]==1) {
                    header("location:adminmenu.php");
                }else{
                    header("location:mainpage.php");

                    session_start();
                    $_SESSION["usr"] = $user[0]["username"];
                    $_SESSION["id"] = $user[0]["user_id"];
                    $_SESSION["status"] = true;
                }
            }else{
                echo "<script>alert('Wrong password');</script>";
            }
        }else if(count($email)>0){
            if (password_verify($_POST["pass"], $email[0]["password"])) {
                if ($email[0]["admin"]==1) {
                    header("location:adminmenu.php");
                }else{
                    header("location:mainpage.php");

                    session_start();
                    $_SESSION["usr"] = $email[0]["username"];
                    $_SESSION["id"] = $email[0]["user_id"];
                    $_SESSION["status"] = true;
                }
            }else{
                echo "<script>alert('Wrong password');</script>";
            }
        }else{
            echo "<script>alert('No such username or email exists');</script>";
        }

        
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
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="./css/loginstyle.css">
    <title>Top Travel: Log In</title>
</head>

<body>
    <section class="container backgrnd">
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
                <a id="login-pc" class="login-button top-nav_item" href="./userlogin.php">Log in <i class="fas fa-user"></i></a>
            </nav>
            <section>
                <div class="inner-grid login-section">
                    <h1 class="login-title">log in<span class="yel-dot">.</span></h1>
                </div>
            </section>
        </header>
        <section class="bckgd-w inner-grid b-radius" data-aos="fade-down" data-aos-duration="2000">
            <div class="login-flex mrgtb-15">
                <h4 class="login-subtext border">Log in to vote or to submit new places.</h2>
                <form action="userlogin.php" method="post">
                    <div class="login-flex">
                        <label class="input-label " for="user">Username or email</label>
                        <input type="text" class="input-text" name="user" id="user">
                    </div>
                    <div class="login-flex">
                        <label class="input-label" for="pass">Password</label>
                        <input type="password" class="input-text" name="pass" id="pass">
                    </div>
                    <div class="login-flex">
                        <input class="submit-button" type="submit" value="LOG IN">
                    </div>
                </form>
                    <div class="login-flex">
                        <a class="login-links border" href="./passwordrecovery.php">Forgot your password?</a>
                    </div>
                    <div class="login-flex ">
                        <a class="create-user-button" href="./registeruser.php">Create a new account</a>
                </div>
            </div>
        </section>
        <footer class="footer">
            <p class="mrgr-1">Top Travel© <br> Universidad de Costa Rica <br> Guillermo Guerra B73469 <br> Andrey Fernández B82930</p>
        </footer>
    </section>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
      </script>
</body>

</html>