<?php    

    namespace Medoo;
    require "Medoo.php";
    
    /*session_start();
    if(isset($_SESSION["isLoggedIn"]))
    {
        header("location:mainpage.php");
    }*/
    
    $database = new Medoo([
        'type' => 'mysql',
        'host' => 'localhost',
        'database' => 'tourismweb',
        'username' => 'root',
        'password' => ''
     
    ]);
    

    
    if($_POST){
        $user = $database->select("users_tb", "*",[
            "username"=>$_POST["username"]
        ]);

        $email = $database->select("users_tb", "*",[
            "email"=>$_POST["email"]
        ]);
        
        $a=true;
        $b=true;

        if (count($email)>0) {
            echo "<script>alert('That email is already in use by another user');</script>";
            $a=false;
        }
        if (count($user)>0) {
            echo "<script>alert('That username has already been registered');</script>";
            $b=false;
        }
        $users = $database->select("users_tb", "*");
    
        if($a&&$b){
            if($_POST["pass"]==$_POST["pass-conf"]){
                $pass = password_hash($_POST["pass"], PASSWORD_DEFAULT);
                $database->insert("users_tb", [
                        "username" => $_POST["username"],
                        "email" => $_POST["email"],
                        "name" => $_POST["name"],
                        "lastname" => $_POST["lastname"],
                        "password" => $pass,
                    ]);
            
                echo "<script> alert('User has been registered succesfully!'); window.location.href='userlogin.php';</script>";
                    
            }else{
                echo "<script> alert('The confirmation does not match the password.');</script>; ";
            }
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
    <link rel="stylesheet" href="./css/loginstyle.css">
    <title>Top Travel: Registration</title>
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
                    <li><a  id="login-phone" class="login-button_unselected top-nav_item" href="./userlogin.php">Log in <i class="fas fa-user"></i></a></li>
                </ul>
                <a id="login-pc" class="login-button_unselected top-nav_item" href="./userlogin.php">Log in <i class="fas fa-user"></i></a>
            </nav>
            <section>
                <div class="inner-grid login-section">
                    <h1 class="login-title">sign in<span class="yel-dot">.</span></h1>
                </div>
            </section>
        </header>
        <section class="bckgd-w inner-grid b-radius w-75">
            <div class="login-flex mrgtb-15">      
                <h4 class="login-subtext border">Sign in and share your favorite places.</h2>
                <form action="registeruser.php" method="post">
                    <div class="login-row">
                        <div class="login-flex w-45">
                            <label class="input-label w-100" for="name">Name</label>
                            <input type="text" class="input-text w-100" name="name" id="name">
                        </div>
                        <div class="login-flex w-45">
                            <label class="input-label w-100" for="lastname">Last name</label>
                            <input type="text" class="input-text w-100" name="lastname" id="lastname">
                        </div>
                    </div>
                    <div class="login-row">
                        <div class="login-flex w-45">
                            <label class="input-label w-100" for="email">Email</label>
                            <input type="email" class="input-text w-100" name="email" id="email">
                        </div>
                        <div class="login-flex w-45">
                            <label class="input-label w-100" for="username">Username</label>
                            <input type="text" class="input-text w-100" name="username" id="username">
                        </div>
                    </div>
                    <div class="login-row">
                        <div class="login-flex w-45">
                            <label class="input-label w-100" for="pass">Password</label>
                            <input type="password" class="input-text w-100" name="pass" id="pass">
                        </div>
                        <div class="login-flex w-45">
                            <label class="input-label w-100" for="pass-conf"> Confirm Password</label>
                            <input type="password" class="input-text w-100" name="pass-conf" id="pass-conf">
                        </div>
                    </div>
                    <div class="login-flex">
                        <input class="submit-button mrgt-3" type="submit" value="CREATE ACCOUNT">
                    </div>
                </form>    
                
            </div>
        </section>
        <footer class="footer">
            <p class="mrgr-1">Top Travel© <br> Universidad de Costa Rica <br> Guillermo Guerra B73469 <br> Andrey Fernández B82930</p>
        </footer>
    </section>

    <script src="./js/mainjs.js"></script>
</body>

</html>